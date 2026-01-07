CREATE DATABASE IF NOT EXISTS `umkm_desa`;
USE `umkm_desa`;

DROP TABLE IF EXISTS `umkm`;
DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Username: admin dan Password: password (di-hash)
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

CREATE TABLE `umkm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kontak` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `umkm` (`id`, `nama`, `kategori`, `deskripsi`, `alamat`, `kontak`, `foto`) VALUES
(1, 'Keripik Bu Rini', 'Kuliner', 'Keripik singkong rasa pedas manis khas desa.', 'Dusun 1', '0812-1111-2222', '1767795833_Kerepek Pisang.jpg'),
(2, 'Batik Meneng', 'Kerajinan', 'Batik tulis dan cap motif khas Gedong Meneng Baru.', 'Dusun 2', '0812-3333-4444', '1767795826_Batik adalah warisan budaya yang mengandung….jpg'),
(3, 'Coffe Kupi Desa', 'Minuman', 'Kopi bubuk hasil kebun warga desa.', 'Dusun 3', '0812-5555-6666', '1767795816_10 Best Cafes You Must Try In Garden City, New York.jpg'),
(4, 'Kafe Cenayang', 'Kuliner', 'Menyediakan kopi', 'Dusun 3', '098277162551', '1767795906_17 Amazing Garden Cafe Design & Decorating Ideas.jpg');

COMMIT;