<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-10">
    <div class="card-header bg-primary text-white">
        Table Data Mahasiswa
    </div>   
        <div class="card-body">
            <a href="index.php" class="btn btn-primary">Tambah Data</a>
            <br>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>USIA</th>
                    <th>AKSI</th>
                </tr>
            <?php
                include "koneksi.php";
                $NAMA = "";
                if (isset($_GET['s']))
                {
                    $NAMA = $_GET['s'];
                    $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE NAMA LIKE '%$NAMA'");
                }else
                $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                while ($data = mysqli_fetch_array($tampil))
                {

            ?>
            <tr>
                    <td><?php echo $data ['id']?></td>
                    <td><?php echo $data ['nama']?></td>
                    <td><?php echo $data ['alamat']?></td>
                    <td><?php echo $data ['usia']?></td>
            <td>
                    <a href="edit_data.php?id=<?php echo $data['id'];?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="hapus_data.php?id=<?php echo $data['id'];?>" class="btn btn-sm btn-danger">Hapus</a>
            </td>
            </tr>

            <?php } ?>
            </table>
        </div>
    </body>
</html>