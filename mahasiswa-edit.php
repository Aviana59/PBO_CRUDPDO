<?php
session_start();
include('dbcon.php');
include('navbar.php')
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Edit & Update data ke Database menggunakan PHP PDO</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Mahasiswa
                            <a href="index.php"></a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $mahasiswa_id = $_GET['id'];

                            $query = "SELECT * FROM mahasiswa WHERE ID=:mahasiswa_id LIMIT 1";
                            $statement = $conn->prepare($query);
                            $data = [':mahasiswa_id' => $mahasiswa_id];
                            $statement->execute($data);

                            $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                        }
                        ?>
                        <form action="mahasiswa-code.php" method="POST">

                            <input type="hidden" name="mahasiswa_id" value="<?=$result->id?>" />

                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama" value="<?= $result->nama; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" value="<?= $result->email; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>No Telepon</label>
                                <input type="text" name="notelepon" value="<?= $result->notelepon; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Pelatihan</label>
                                <input type="text" name="pelatihan" value="<?= $result->pelatihan; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_mahasiswa_btn" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>