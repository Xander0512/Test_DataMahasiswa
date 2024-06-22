<?php
    include "koneksi.php";
    // Check if ID is set and not empty
    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $ambilData = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
        // Check if data is fetched successfully
        if(mysqli_num_rows($ambilData) > 0) {
            $data = mysqli_fetch_array($ambilData);
        } else {
            echo "Data not found.";
            exit;
        }
    } else {
        echo "ID parameter is missing.";
        exit;
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
    <div class="container col-md-6">
        <div class="card-header bg-primary text-white">
            Input Data Mahasiswa
        </div>   
        <div class="card-body">
            <form action="" method="POST" class="form-item">
                <div class="form-group">
                    <label for="NAMA">NAMA MAHASISWA</label>
                    <input type="text" name="nama" value="<?php echo $data['nama']?>" class="form-control col-md-9" placeholder="Masukkan NAMA" required>
                </div>

                <div class="form-group">
                    <label for="alamat">ALAMAT</label>
                    <input type="text" name="alamat" value="<?php echo $data['alamat']?>" class="form-control col-md-9" placeholder="Masukkan ALAMAT" required>
                </div>

                <div class="form-group">
                    <label for="usia">USIA</label>
                    <input type="text" name="usia" value="<?php echo $data['usia']?>" class="form-control col-md-9" placeholder="Masukkan USIA" required>
                </div>

                <br>
                <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                <a href="http://localhost/Test_DataMahasiswa/TestProgramingPHP/data_mahasiswa.php" class="btn btn-danger">BATAL</a>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['simpan'])) {
        $NAMA = $_POST['nama'];
        $ALAMAT = $_POST['alamat'];
        $USIA = $_POST['usia'];

        // Escape variables for security to prevent SQL injection
        $NAMA = mysqli_real_escape_string($koneksi, $NAMA);
        $ALAMAT = mysqli_real_escape_string($koneksi, $ALAMAT);
        $USIA = mysqli_real_escape_string($koneksi, $USIA);

        // Update query
        $query = "UPDATE mahasiswa 
                  SET nama='$NAMA', alamat='$ALAMAT', usia='$USIA'
                  WHERE id='$id'";

        if(mysqli_query($koneksi, $query)) {
            echo "<div align='center'><h5>Silahkan Tunggu, Data Sedang DiUpdate....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/Test_DataMahasiswa/TestProgramingPHP/data_mahasiswa.php'>";
        } else {
            echo "Error updating record: " . mysqli_error($koneksi);
        }
    }
?>
