<?php
    include "koneksi.php";
    if(isset($_POST['simpan'])) {
        $NAMA = $_POST['NAMA'];
        $ALAMAT = $_POST['ALAMAT'];
        $USIA = $_POST['USIA'];

        $query = "INSERT INTO mahasiswa (nama, alamat, usia) VALUES ('$NAMA', '$ALAMAT', '$USIA')";

        if(mysqli_query($koneksi, $query)) {
            echo "<div align='center'><h5>Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/Test_DataMahasiswa/TestProgramingPHP/data_mahasiswa.php'>";
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6 mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Input Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                        <label for="NAMA">NAMA MAHASISWA</label>
                        <input type="text" name="NAMA" class="form-control col-md-9" placeholder="Masukkan NAMA" required>
                    </div>
                    <div class="form-group">
                        <label for="ALAMAT">ALAMAT</label>
                        <input type="text" name="ALAMAT" class="form-control col-md-9" placeholder="Masukkan ALAMAT" required>
                    </div>
                    <div class="form-group">
                        <label for="USIA">USIA</label>
                        <input type="text" name="USIA" class="form-control col-md-9" placeholder="Masukkan USIA" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <a href="http://localhost/InputDataMahasiswa/data_mahasiswa.php" class="btn btn-danger">BATAL</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
