<?php
session_start();
include('dbcon.php');

if(isset($_POST['save_mahasiswa_btn']))
{
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $notelepon = $_POST['notelepon'];
    $pelatihan = $_POST['pelatihan'];

    $query = "INSERT INTO mahasiswa (nama, email, notelepon, pelatihan) VALUES (:nama, :email, :notelepon, :pelatihan)";
    $query_run = $conn->prepare($query);

    $data = [
        ':nama' => $nama,
        ':email' => $email,
        ':notelepon' => $notelepon,
        ':pelatihan' => $pelatihan,
    ];
    $query_execute = $query_run->execute($data);
  
    if($query_execute)
    {
        $_SESSION['message'] = "Memasukkan Data Sukses";
        header('Location: mahasiswa-add.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Tidak Ada Data yang Dimasukkan";
        header('Location: mahasiswa-add.php');
        exit(0);
    }
}

if(isset($_POST['update_mahasiswa_btn']))
{
    $mahasiswa_id = $_POST['mahasiswa_id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $notelepon = $_POST['notelepon'];
    $pelatihan = $_POST['pelatihan'];
    

    try {

        $query = "UPDATE mahasiswa SET nama=:nama, email=:email, notelepon=:notelepon, pelatihan=:pelatihan WHERE id=:mahasiswa_id LIMIT 1";
        $statement = $conn->prepare($query);

        $data = [
            ':nama' => $nama,
            ':email' => $email,
            ':notelepon' => $notelepon,
            ':pelatihan' => $pelatihan,
            ':mahasiswa_id' => $mahasiswa_id
        ];

        $query_execute = $statement->execute($data);
        
        if($query_execute)
        {
            $_SESSION['message'] = "Update Sukses";
            header('Location: index.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Tidak Ada Update";
            header('Location: index.php');
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if(isset($_POST['hapus_mahasiswa']))
{
    $mahasiswa_id = $_POST['hapus_mahasiswa'];

    try {

        $query = "DELETE FROM mahasiswa WHERE id=:mahasiswa_id";
        $statement = $conn->prepare($query);
        $data = [
            ':mahasiswa_id' => $mahasiswa_id
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {
            $_SESSION['message'] = "Hapus Sukses";
            header('Location: index.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Tidak Ada yang Dihapus";
            header('Location: index.php');
            exit(0);
        }

    } catch(PDOException $e){
        echo $e->getMessage();
    }
}

?>

<?php 
   session_start();
?>


<?php if(isset($_SESSION['message'])) : ?>
    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
<?php 
    unset($_SESSION['message']);
    endif; 
?>