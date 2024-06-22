<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_akademik");

    if(!$koneksi)
    {
        echo "Koneksi ke MySQL Gagal... ";
    }
?>