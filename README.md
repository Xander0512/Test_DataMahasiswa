# Data Mahasiswa Menggunakan PHP

Ini merupakan proyek pembuatan CRUD sederhana dari data mahasiswa menggunakan PHP dan MySQL

## Fitur

- **Tambah Data:** Menambah data mahasiswa dengan mengisi nama, alamat, dan usia.
- **Edit :** Mengubah data mahasiswa jika terjadi kesalahan pengisian data.
- **Hapus:** Hapus data mahasiswa yang tidak digunakan.

## Cara Menggunakan

1. **Pembuatan Database:**
-**Buat database dengan nama database :** "db_akademik"
- **Contoh sintax :**
## 
**CREATE TABLE `mahasiswa` (
  `id`  INT AUTO_INCREMENT PRIMARY KEY,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `usia` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;**

##
- **Menambahkan dummy data :** 
**INSERT INTO `mahasiswa` ( `nama`,  `alamat`, `usia`) VALUES**
**('Alex Sander', 'jl.Rangkea Sipagagan', '23'),**
**('Albertus', 'jln dahlia', '30'),**
**('Anastasya',  'jln mantuil komp wengga no 12', '25');**
**COMMIT;**

##

2. **Akses URL**

**Penggunaan url yang ada di local dengan mengubah sesuai tempat lokasi dokumen agar tampil, URL yang digunakan :**
**http://localhost/Test_DataMahasiswa/TestProgramingPHP/data_mahasiswa.php**

Dapat diubah sesuai kebutuhan.


