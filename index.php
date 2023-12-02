<?php 
include('dbcon.php');
include('navbar.php')
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Mahasiswa</title>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Mahasiswa</h3>
                       </div>
                    <div class="card-body">
                    <div class="mb-3">
                        <a href="mahasiswa-add.php" class="btn btn-primary">Add Mahasiswa</a>
                    </div>
                    <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Telepon</th>
                                    <th>Pelatihan</th>
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM mahasiswa";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();

                                    $statement->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                                    $result = $statement->fetchAll();
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row->id; ?></td>
                                                <td><?= $row->nama; ?></td>
                                                <td><?= $row->email; ?></td>
                                                <td><?= $row->notelepon; ?></td>
                                                <td><?= $row->pelatihan; ?></td>
                                                <td>
                                                    <a href="mahasiswa-edit.php?id=<?= $row->id; ?>" class="btn btn-success">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="mahasiswa-code.php" method="POST">
                                                        <button type="submit" name="hapus_mahasiswa" value="<?=$row->id;?>" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="5">Data Tidak Ditemukan</td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>