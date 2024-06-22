
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id`  INT AUTO_INCREMENT PRIMARY KEY,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `usia` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` ( `nama`,  `alamat`, `usia`) VALUES
('Bayu Rizki Madani', 'jl. Soetoyo S Gg. H Muchran no3', '20'),
('dimas furqon', 'jln dahlia', '30'),
('Muhammad Ramadhan',  'jln mantuil komp wengga no 12', '25');
COMMIT;
