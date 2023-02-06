-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2023 pada 06.31
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satuforum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `forumcepat`
--

CREATE TABLE `forumcepat` (
  `id` int(99) NOT NULL,
  `tanggal` varchar(999) NOT NULL,
  `waktu` varchar(999) NOT NULL,
  `nama` varchar(999) NOT NULL,
  `lokasi` varchar(999) NOT NULL,
  `judul` varchar(999) NOT NULL,
  `isi` varchar(999) NOT NULL,
  `ket` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `forumcepat`
--

INSERT INTO `forumcepat` (`id`, `tanggal`, `waktu`, `nama`, `lokasi`, `judul`, `isi`, `ket`) VALUES
(1, '2023-02-06', '12:08', 'Bima Maarschal', 'Cimahi', 'Hujan Lebat Di Cihanjuang', 'Di Cihanjuang Cimahi hujan lebat hati hati di jalan', 'Saya verifikasi berita ini'),
(2, '2023-02-06', '14:09', 'User Deee', 'Cimahi', 'Ada Buaya Lepas', 'Ada buaya lepas dari kandang hati hati', 'Saya verifikasi berita ini'),
(3, '2023-02-07', '12:10', 'Bima Maarschal', 'Bandung', 'Buku Baru', 'Penulis Terkenal ingin mengeluarkan buku Coding baru', 'Saya verifikasi berita ini'),
(4, '2023-02-07', '12:11', 'Anonim', 'Bandung', 'Macet di daerah paster', 'Macet di daerah paster', 'Saya verifikasi berita ini'),
(5, '2023-02-07', '17:18', 'Anonim Aja', 'Jakarta', 'Bima maarschal Buat web baru', 'Bima lagi buat web baru temanya forum berita', 'Saya verifikasi berita ini'),
(6, '2023-02-11', '13:14', 'Si D', 'Cimahi', 'Ada hujan meteor di Cimahi', 'Saya melihat hujan meteor di Cimahi tadi', 'Saya verifikasi berita ini');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(99) NOT NULL,
  `nama` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `level` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `password`, `level`) VALUES
(1, 'bima', 'bimamaarschal@gmail.com', '1234', 'pengguna'),
(2, 'user', 'user@user.com', '123', 'pengguna'),
(8, '123', '123@123.com', '123', 'pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tulispengguna`
--

CREATE TABLE `tulispengguna` (
  `idtulis` varchar(99) NOT NULL,
  `tanggal` varchar(999) NOT NULL,
  `judul` varchar(999) NOT NULL,
  `isi` text NOT NULL,
  `isi2` text NOT NULL,
  `pengguna` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tulispengguna`
--

INSERT INTO `tulispengguna` (`idtulis`, `tanggal`, `judul`, `isi`, `isi2`, `pengguna`) VALUES
('ID060220230501', '2023-02-06', 'Suhu Udara Arktik Turun Drastis', 'Suhu udara Arktik yang turun di Timur Laut pada Sabtu (4/2/2023) membawa suhu dingin di bawah nol dan angin dingin yang berbahaya ke wilayah tersebut. Angin dingin ini memecahkan rekor minus 108 derajat Fahrenheit atau minus 78 derajat Celcius di puncak Mount Washington di New Hampshire', 'Temperatur menjadi sangat rendah sehingga pihak berwenang di Massachusetts mengambil langkah yang tidak biasa dengan menjaga pusat transit South Station tetap buka semalaman, sehingga para tunawisma memiliki tempat yang aman untuk tidur.  Sementara angin kencang merobohkan cabang pohon yang menimpa sebuah mobil di Massachusetts barat. Insiden ini menewaskan seorang bayi.\r\n\r\n\"Saya tidak ingat suhu menjadi sedingin ini sejak 2015,\" kata Gin Koo (36 tahun) yang mengenakan tiga lapis kemeja dan jaket bulu, serta topi dan tudung, saat berjalan bersama anjingnya yang bernama Bee di jalanan Boston.\r\n\r\nBee berjalan-jalan sambil mengenakan mantel khusus anjing dan dia tampak menggigil. \"Saya tidak akan keluar jika tidak terpaksa,\" ujar Gin Koo.', 'bima'),
('ID060220230555', '2023-02-06', 'Gempa 7,8 Magnitudo Hantam Turki, Sejumlah Bangunan Runtuh', '\"Kedalaman gempa adalah 24,1 kilometer, terletak 23 kilometer timur Nurdagi, provinsi Gaziantep,\" menurut USGS, dikutip dari CNN.\r\n\r\nGempa susulan yang kuat telah dirasakan di Turki tengah. \"Gempa susulan berkekuatan magnitudo 6,7 lainnya melanda pada kedalaman 9,9 kilometer sekitar 11 menit setelah gempa pertama,\" sambung USGS.\r\n\r\nGempa tersebut dirasakan di ibu kota Ankara dan kota-kota Turki lainnya, dan juga di seluruh wilayah. Laporan datang bahwa beberapa bangunan telah runtuh, dan sejumlah orang mungkin terjebak\r\n\r\n', 'Seorang koresponden BBC Turki di Diyarbakir melaporkan bahwa sebuah pusat perbelanjaan di kota itu runtuh. Rushdi Abualouf, seorang produser BBC di Jalur Gaza, mengatakan ada getaran sekitar 45 detik di rumah tempat dia tinggal.\r\n\r\nSeismolog Turki memperkirakan kekuatan gempa berkekuatan 7,4 magnitudo. Mereka mengatakan bahwa gempa kedua terjadi beberapa menit kemudian.', 'bima'),
('ID060220230618', '2023-02-06', 'Film Indonesia Masuk ke Festival Kelas Dunia', 'Tujuh karya sinema pendek Indonesia ikut serta pada ajang Clermont Ferrand International Short Film Festival 2023, di Paris, Prancis.  Tiga film pendek di antaranya merupakan jebolan kompetisi produksi yang digelar Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek) berjudul Ride to Nowhere (tahun 2021), Toya dan Roh Seninya (tahun 2022), serta Teh Tawar untuk Akong (Tahun 2022).', 'Sedangkan judul film pendek lainnya adalah Dancing Colors, Bawang Merah Bawang Putih, Jamal, dan Nusa Antara. Direktur Jenderal Kebudayaan Kemdikbudristek, Hilmar Farid mengatakan, kemampuan film-film nasional yang unjuk gigi di pentas internasional dapat memacu pihaknya untuk terus memperkuat ekosistem perfilman Indonesia.\r\n\r\n“Kita lihat saat ini, selalu muncul produksi film-film berbobot dan mengedukasi dari para sineas di Tanah Air. Di sini, pemerintah (Kemdikbudristek) akan berupaya memfasilitasi sineas itu agar dapat menuangkan pemikiran kreatifnya,” ujar Hilmar, Minggu, 5 Februari', 'user'),
('ID060220230621', '2023-02-07', 'Asyik Banget! Inilah 8 Negara Dengan Libur Paling Banyak di Dunia', 'Hari libur menjadi idaman semua orang, terutama hari libur nasional. Tentunya, orang-orang memanfaatkan momen ini untuk sekadar beristirahat ataupun menghilangkan penat dari kesibukan hiruk pikuk kota. Misalnya saja, di Indonesia, setiap tanggal 17 Agustus ditandai sebagai hari libur nasional untuk memperingati kemerdekaan Republik Indonesia.', 'Berbicara soal hari libur, ternyata beberapa negara  memiliki hari libur terbanyak di dunia. Bahkan di antaranya memiliki jumlah hari libur nasional lebih dari 30 hari, lho!\r\n\r\nAda Kamboja hingga, berikut 7 negara dengan hari libur nasional terbanyak di dunia. Beruntung banget penduduk yang menempati negara-negara ini!\r\n\r\n1. Kamboja\r\n2. Sri Lanka\r\n3. Indonesia\r\n4. India\r\n5. Kolombia\r\n6. Trinidad dan Tobago\r\n7. Hong Kong\r\n8. Jepang', 'user'),
('ID060220230623', '2023-02-07', 'Teleskop Luar Angkasa Hubble Menangkap Fenomena Antariksa Unik, Apa Itu', 'Dilansir dari Space, Ahad (5/2/2023), gugus bulat seperti ini adalah rumah bagi puluhan ribu hingga jutaan bintang, semuanya terikat erat oleh tarikan gravitasi timbal balik. Populasi bintang yang padat ini membuat gugus bulat berbentuk bola.', 'Gugus bulat ditemukan di galaksi dengan segala bentuk dan ukuran serta cenderung menjadi struktur tertua di galaksi asalnya.  Mereka dikemas dengan bintang yang lebih tua dan lebih merah daripada yang ditemukan di gugus bintang terbuka, yang lebih kecil dari gugus bulat.\r\n\r\nGambar NGC 6355 ini, yang menggunakan data dari Advanced Camera for Surveys dan Wide Field Camera 3 Teleskop Luar Angkasa Hubble, menangkap detail menakjubkan dari inti bintang yang padat dan terang yang dikemas di tengah gugus bulat, menurut Badan Antariksa Eropa (ESA), mitra dalam misi. Hamburan bintang yang lebih jarang di pinggiran gugus bulat juga terlihat dalam kejernihan kristal.\r\n\r\nBintang merah dan biru pusat NGC 6355 dapat dibedakan dengan jelas dalam gambar, menunjukkan kekuatan pengamatan Hubble yang luar biasa, yang telah merevolusi studi tentang gugus bulat. Hubble mampu mengabadikan pemandangan menakjubkan ini karena posisinya sekitar 330 mil (530 kilometer) di atas permukaan planet kita. Titik menguntungkan ini membebaskan teleskop dari efek distorsi atmosfer Bumi yang membuat teleskop berbasis darat hampir tidak mungkin membedakan bintang individu dalam gugus bulat.', '123'),
('ID060220230625', '2023-02-06', 'Ilmuwan Prediksi Gempa Terkuat yang Mungkin Terjadi di Bumi!', 'Gempa terkuat yang pernah tercatat sendiri terjadi pada 22 Mei 1960 di Chile dan disebut gempa Valdivia, diambil dari nama kota terdekat ke pusat gempa. Gempa yang mengguncang wilayah di benua Amerika tersebut berlangsung selama 10 menit dan memiliki Magnitudo 9,5.', 'Mengutip United States of Geological Survey (USGS), gempa Chili 1960 itu memecahkan zona patahan yang jadi tempat lempengan dasar laut bergerak menghantam ke bawah lempeng Benua Amerika Selatan yang berdekatan.\r\n\r\nSelama gempa Chile 1960, tepi barat Lempeng Amerika Selatan meluncur sejauh 18 meter terhadap Lempeng Nazca yang mensubduksi, di area sepanjang 965 kilometer dan lebar lebih dari 160 kilometer.\r\n\r\nPeneliti ilmu bumi menyebut gempa yang lebih besar dari gempa Valdivia mungkin terjadi, tetapi kemungkinannya sangat kecil. Gempa yang melebihi M9,5 membutuhkan pergerakan patahan Bumi yang sangat dalam dan luar biasa panjang terjadi sekaligus.\r\nAhli geologi gempa bumi dan komunikator sains Wendy Bohon menyebut tidak banyak tempat di Bumi yang bisa menjadi lokasi gempa sebesar ini.\r\n\r\nMenurutnya, gempa M 9,5 sendiri sudah berada pada batas atas gempa yang mampu dihasilkan Bumi, dan gempa dengan magnitudo 10 mungkin tidak akan terjadi.\r\n\r\n\"Ini bagus untuk Hollywood, tapi tidak realistis untuk Bumi, syukurlah,\" kata Bohon, seperti dikutip LiveScience.', 'bima');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `forumcepat`
--
ALTER TABLE `forumcepat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tulispengguna`
--
ALTER TABLE `tulispengguna`
  ADD PRIMARY KEY (`idtulis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `forumcepat`
--
ALTER TABLE `forumcepat`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
