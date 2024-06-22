<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE ID='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/Test_DataMahasiswa/TestProgramingPHP/data_mahasiswa.php'>";
?>