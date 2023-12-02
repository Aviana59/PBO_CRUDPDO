<?php 
    session_start(); 
    include('navbar.php')
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Masukkan Data ke Database menggunakan PDO diPHP</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">

                <?php if(isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php 
                    unset($_SESSION['message']);
                    endif; 
                ?>

                <div class="card">
                    <div class="card-header">
                        <h3>Menambahkan Mahasiswa</h3>
                    </div>
                    <div class="card-body">
                        
                        <form action="mahasiswa-code.php" method="POST">
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>No Telepon</label>
                                <input type="text" name="notelepon" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Pelatihan</label>
                                <input type="text" name="pelatihan" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_mahasiswa_btn" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html