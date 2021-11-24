-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 06:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `no_exp` int(5) NOT NULL,
  `experience` text NOT NULL,
  `gambar_exp` varchar(255) NOT NULL,
  `kode_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `jenis_wisata` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`jenis_wisata`) VALUES
('alam'),
('maritim'),
('sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `objek_wisata`
--

CREATE TABLE `objek_wisata` (
  `kode_wisata` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `jenis_pariwisata` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jam_operasional` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objek_wisata`
--

INSERT INTO `objek_wisata` (`kode_wisata`, `id_user`, `judul`, `jenis_pariwisata`, `deskripsi`, `gambar`, `alamat`, `jam_operasional`) VALUES
(1, 1, 'Gunung Kerinci', 'alam', 'Gunung Kerinci merupakan gunung tertinggi di Sumatra, gunung berapi tertinggi di Indonesia, dan puncak tertinggi di Indonesia di luar Papua.Gunung kerinci menjadi salah satu wisata favorit lain ketika berkunjung ke Sumatera Barat, terutama bagi pecinta alam dan pendaki gunung. Selain bisa mendaki via Kersik Tuo, Jambi, kamu juga bisa mulai mendaki dari Desa Bangun Rejo, Solok Selatan', 'alam-1', 'Lubuk Gadang Selatan., Sangir, Kabupaten Solok Selatan, Sumatera Barat', '24 Jam'),
(2, 1, 'Kebun Teh Liki', 'alam', 'Sebagai kebun teh yang diklaim paling luas se-dunia, Liki memiliki luas sekitar 2.025 hektar dengan ketinggian 600-1300 mdpl. Anda akan disuguhi hamparan pemandangan perkebunan teh yang indah dengan latar belakang Gunung Kerinci. Suasananya tentu sudah pasti sejuk dan asri. Selain bisa menelusuri jalan-jalan setapak di tengah-tengah kebun teh, kamu juga bisa melihat pengolahan daun teh hingga menjadi teh yang siap di sedu', 'alam-2', 'Lubuk Gadang Selatan, Kec. Sangir, Kab. Solok Selatan', '24 Jam'),
(3, 1, 'Puncak Bangun Rejo', 'alam', 'Lokasi ini adalah kawasan perkebunan kopi, berada di Bukit Bontak tepat di kaki Gunung Kerinci. Masyarakat membangun lokasi ini menjadi tempat wisata kekinian dengan cafe & tempat selfie. Disini anda bisa melihat keindahan kaki Gunung Kerinci dan merasakan sejuknya udara pegunungan ditemani dengan kabut yang menyelimutinya', 'alam-3', 'Bangun Rejo , Lubuk Gadang Selatan, Kec. Sangir, Kab. Solok Selatan', 'Senin - Minggu : 10.00 - 18.15 WIB'),
(4, 1, 'Tubing Ducati ', 'alam', 'Tubing Ducati adalah tempat wisata untuk body rafting berlokasi di Pauh Duo. Dengan sungai alami yang mengalir deras dan jernih, ditambah batu-batuan membuat tubing ducati ini semakin cantik. Aksesnya pun sangat mudah, berada di jalan nasional, turun kendaraan Anda bisa langsung menemu pintu gerbangnya. Terdiri dari kolam alami dan sungai sejauh 1 Km, Anda bisa menyusuri sungai dengan arusnya menggunakan ban mobil ukuran besar. Sangat menyenangkan dan memompa adrenalin', 'alam-4', 'Jl. Raya Muara Labuh, Alam Pauh Duo, Kec. Pauah Duo, Kab. Solok Selatan', 'Senin - Jumat : 09.00 - 17.00 WIB'),
(5, 1, 'Air Terjun Kembar', 'alam', 'Untuk kesini, anda harus menempuh perjalanan sejauh 5 km dari Kantor Bupati Solok Selatan. Kemudian setelah sampai di tempat parkir, kamu harus melanjutkan perjalanan dengan berjalan kaki selama kurang lebih 5-10 menit. Sampai di lokasi, kamu bisa menikmati suasana Air Terjun Kembar yang masih sangat asri, ditemani dengan rindangnya pepohonan bahkan airnya bisa langsung diminum', 'alam-5', 'Bangun Rejo, Kec. Sangir, Kab. Solok Selatan', 'Senin - Sabtu : 09.00 – 17.00 WIB'),
(6, 1, 'Goa Batu Kapal', 'alam', 'Terdapat empat bongkah batu kapur dengan dua terbesar memiliki goa, goa inilah yang disebut Batu kapal. Nama ini muncul sebab lorongnya mirip dengan kabin kapal. Saat masuk ke bibir goa, Anda akan disambut dengan kelelawar dan walet di atap goa dengan backsound rintik air yang jatuh di sungai. Pemandangan indah juga muncul dari lubang-lubang di atap yang menyalurkan berkas sinar matahari yang indah. Dengan warna dinding putih kehijauan dan sorot cahaya matahari, dinding menjadi sangat indah seperti lukisan', 'alam-6', 'Jorong Ngalau Indah, Nagari Sungai Kunyit Barat, Kec. Sangir Balai Janggo, Kab. Solok Selatan', 'Senin - Sabtu : 07.00 - 17.00 WIB'),
(7, 1, 'Pemandian Hot Water Boom', 'alam', 'Pemandian air panas ini memiliki temperatur air yang sangat panas yang berasal dari kaki gunung atap Sumatera, Kerinci. Selain untuk mandi, biasanya orang datang kesini membawa telur untuk direbus. Untuk mandi tersedia dua kolam pemandian, satu untuk dewasa satu untuk anak lengkap dengan wahana permainan. Satu lagi ada kolam untuk merebus telur dengan suhu yang sangat panas', 'alam-7', 'Pauh Duo Nan Batigo, Kec. Pauah Duo, Kab. Solok Selatan', 'Senin - Sabtu : 08.00 - 16.30 WIB'),
(8, 1, 'Danau Maninjau', 'alam', 'Danau Maninjau adalah sebuah danau di kecamatan Tanjung Raya, Kabupaten Agam, provinsi Sumatera Barat, Indonesia.', 'alam-8', 'Kec. Tanjung Rayaini, Kab Agam Sumatera Barat', '24 Jam'),
(9, 1, 'Puncak Lawang', 'alam', 'Puncak Lawang berada di 1.210 mdpl. Di zaman penjajahan, tempat ini digunakan sebagai tempat peristirahatan bangsawan Belanda.', 'alam-9', 'Alamat : Lawang, Matur, Kab. Agam Sumbar', 'Senin - Minggu 08.00 - 18.00'),
(10, 1, 'Danau Biru', 'alam', 'Danau biru ini merupakan bekas dari galian tambang batubara. Meskipun terbuat dari dampak kerusakan lingkungan di sekitar. Untuk mencapai tempat wisata danau ini Anda harus menempuh perjalanan yang sangat sulit berupa bebatuan. Namun, perjalanan sulit yang Anda tempuh tersebut akan memacu adrenalin dan pemandangan di danau yang begitu indah.', 'alam-10', 'Alamat : Lawang, Matur, Kab. Agam Sumbar', 'Senin - Minggu 08.00 - 18.00'),
(11, 1, 'Kapalo Banda Taram', 'alam', 'Kapalo Banda Taram mulanya adalah sebuah irigasi yang dibangun untuk mengairi lahan pertanian dan perkebunan masyarakat setempat.', 'alam-11' ,  'Taram, Harau, Kabupaten Lima Puluh Kota, Sumatera Barat.', ' 07.00 - 18.00 WIB'),
(12, 1, 'Taluak Sikulo', 'alam', 'Taluak Sikulo yang terletak di daerah yang berjulukan “Negeri Sejuta Pesona” tepatnya di kenagarian Ampang Pulai Kecamatan Koto XI Tarusan ini dapat diakses berjalan kaki menyisir pantai batu kalang selama lebih kurang 2 Jam perjalanan, Memang akses untuk menuju Taluak Sikulo ini tidak bisa diakses oleh kendaraan, karena terletak jauh dari pinggiran jalan umum.Namun dapat ditempuh dengan boat yang Stanby di Sekitar pantai batu kalang yang hanya membutuhkan lebih kurang 20 menit saja untuk sampai ditaluak sikulo.', 'alam-12' , 'PCHC+M2V, Ampang Pulai, Koto XI Tarusan, Kabupaten Pesisir Selatan, Sumatera Barat 25654', ' 24 Jam'),
(13, 1, 'Wisata Mandeh', 'alam', 'Wisata yang satu ini telah berdiri sejak tahun 2015 dan selalu saja ramai dikunjungi oleh wisatawan. Pemandangan yang berada di sekitar Mandeh sangat menawan sehingga membuat para wisatawan terlena dan ingin kembali lagi untuk berlibur.', 'alam-13' , 'Mandeh, Kec. Koto XI Tarusan, Kab. Pesisir Selatan.', ' 06.00-19.00 WIB'),
(14, 1, 'Pantai Sasak', 'alam', 'Pantai ini menjadi salah satu ikon terbaik milik Pasaman Barat dalam kategori destinasi laut. Tak heran, ada banyak keindahan yang ditawarkannya. Salah satunya ialah kebersihan dan sunset yang disuguhkan, dimana pastinya mampu membuat kamu betah berlama-lama di sini.', 'alam-14' , 'Kenagarian Sasak, Kecamatan Sasak Ranah Pasisie', ' 24 Jam'),
(15, 1, 'Air terjun sipagogo', 'alam', ' Lokasi air terjun Sipagogo ini sudah cukup lama ditemukan, hanya saja baru terkenal beberapa tahun belakangan. Ini tidak terlepas dari terkendalanya akses bebas menuju lokasi, pasalnya sangat sulit, apalagi ketika musim hujan tiba. Namun, jika sudah sampai di depan air terjunnya, dijamin rasa lelah dan capek akan buyar ditepis keindahan dan keasrian dari wisata alam yang satu ini. Objek ini selalu ramai dikunjungi meski aksesnya sulit, terlebih ketika hari-hari libur atau akhir pekan.', 'alam-15' , 'kampung Situak, Nagari Ujung Gading, Kecamatan Lembah Malintang.', ' 24 Jam'),
(16, 1, 'Gunung Marapi', 'alam', ' Gunung Marapi (juga dikenal sebagai Merapi atau Berapi) adalah gunung berapi yang terletak di Sumatra Barat, Indonesia. Gunung ini tergolong gunung yang paling aktif di Sumatra. Terletak dalam kawasan administrasi Kabupaten Agam. Gunung ini dapat juga dilihat dari kota Bukittinggi, kota Padangpanjang dan kabupaten Tanah Datar dan memiliki ketinggian 2.891 m.', 'alam-16' , 'Kab. Agam, Sumbar', ' 24 Jam'),
(17, 1, 'Pantai Awera', 'alam', ' Kepulauan Mentawai merupakan salah satu kabupaten yang berada di Sumatera Barat. Pariwisata di pulau ini memang belum terlalu populer. Tidak heran jika di sini terdapat banyak pantai eksotis yang belum terjamah. Terutama jika Anda menjelajahi Pulau Awera. Pulau ini terlihat eksotis dikelilingi pohon kelapa dan tanaman lain. Ombaknya indah dengan air laut jernih. Bahkan, terumbu karang yang ada di dasarnya terlihat jelas.', 'alam-17' , 'Pulau Awera, Kepulauan Mentawai, Mentawai, Sumatera Barat', ' 24 Jam'),
(18, 1, 'Bukit Langkisau', 'alam', 'Keindahan alam di puncak Bukit Langkisau bahkan akan terlihat lebih indah saat matahari terbenam dan matahari terbit. Puncak bukit memiliki ketinggian sekitar 400 meter. Menuju puncak Langkisau Anda bisa menggunakan kendaraan, karena jalannya sudah diaspal. Tentunya lebih mudah, wisatawan datang ke puncak Bukit Langkisau. Sesampainya di area parkir, Anda masih harus berjalan kaki sekitar 25 meter menaiki tangga menuju puncak bukit. ', 'alam-18' , 'Jl. Langkisau, Salido, Iv Jurai, Kabupaten Pesisir Selatan, Sumatera Barat 25651', '10.00-17.30 WIB'),


(19, 1, 'Pantai Pamutusan', 'maritim', 'Salah satu pantai yang tak kalah menariknya dengan lokasi wisata lainnya adalah pulau Pamutusan. Pulau yang sangat indah dan menawan ini dapat dijadikan sebagai salah satu destinasi yang wajb dikunjungi saat berada di Pesisir Selatan. Selain itu, pemandangan yang eksotis di sekitar menjadi salah satu spot terbaik untuk mendapatkan hasil foto yang keren. Pulau ini biasa menjadi alternative wisata bahari saat berlibur Bersama keluarga ataupun teman-teman. Pantai Pamutusan ini terletak di Desa Sungai', 'maritim-1', 'Sungai Pinang, Kec. Koto XI Tarusan, Kab. Pesisir Selatan', '24 Jam'),
(37, 1, 'Nagari 1000 Rumah Gadang', 'sejarah', 'Nagari 1000 Rumah Gadang merupakan wisata budaya yang ada di Sumatera Barat. Kawasan Saribu Rumah Gadang ini memiliki luas wilayah 60 hektar dengan total 132 unit Rumah Gadang kemudian pada kawasan inti memiliki luas wilayah 7 hektar dan sudah ada 7 Rumah Gadang yang menjadi homestay. Tempat wisata ini memiliki suasana 12 perkampungan tradisional Minangkabau tempo dulu yang masih asli dan terjaga kelestariannya. Jika berangkat dari Padang, Anda perlu menempuh perjalanan sekitar 3,5 jam atau 150 km melalui jalur darat. Anda bisa mencoba untuk tinggal di rumah gadang yang difungsikan sebagai homestay. Setidaknya terdapat 7 rumah adat dengan harga sewa per malam sekitar Rp200.000. Biaya tersebut sudah termasuk makan malam dan sarapan, seperti lapek sagan dan pangek pisang', 'sejarah-1', 'Nagari Koto Baru, kecamatan Sungai Pagu, kabupaten Solok Selatan, Sumatera Barat', 'Senin – Sabtu: 09.30-17.30 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `no_rating` int(5) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `kode_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `no_saran` int(11) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `kode_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `level`) VALUES
(1, 'riza', 'riza@gmail.com', 'd5f275885bd96778f7f01c814e405e7c', 'admin'),
(2, 'hadef', 'hadef@gmail.com', '9d0d77659a6f4d38e5e6a6649b7f7db7', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`no_exp`),
  ADD KEY `kode_wisata` (`kode_wisata`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`jenis_wisata`);

--
-- Indexes for table `objek_wisata`
--
ALTER TABLE `objek_wisata`
  ADD PRIMARY KEY (`kode_wisata`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `jenis_pariwisata` (`jenis_pariwisata`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`no_rating`),
  ADD KEY `kode_wisata` (`kode_wisata`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`no_saran`),
  ADD KEY `kode_wsata` (`kode_wisata`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `objek_wisata`
--
ALTER TABLE `objek_wisata`
  MODIFY `kode_wisata` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`kode_wisata`) REFERENCES `objek_wisata` (`kode_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `objek_wisata`
--
ALTER TABLE `objek_wisata`
  ADD CONSTRAINT `objek_wisata_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `objek_wisata_ibfk_2` FOREIGN KEY (`jenis_pariwisata`) REFERENCES `jenis` (`jenis_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`kode_wisata`) REFERENCES `objek_wisata` (`kode_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `saran`
--
ALTER TABLE `saran`
  ADD CONSTRAINT `saran_ibfk_1` FOREIGN KEY (`kode_wisata`) REFERENCES `objek_wisata` (`kode_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
