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
(38, 1, 'Nagari Tuo Pariangan', 'sejarah', 'Secara historis Nagari Tuo Pariangan merupakan nagari/daerah asal muasal kehidupan nenek moyang orang Minangkabau yang berasal dari Gunung Marapi. Di kawasan Nagari Tuo Pariangan terdapat bukti-bukti sejarah : Kuburan Panjang, Masjid Tuo, Sawah Satampang Baniah, Batu Tigo Luhak, dan bukti sejarah lainnya serta objek wisata Air Panas. Nagari Tuo Pariangan terletak antara Padang Panjang–Batusangkar, dari Kota Batusangkar + 14 Km.', 'sejarah-2', 'Pariangan, Kecamatan pariangan, kabupaten Tanah Datar', 'Senin – Sabtu: 08.00-17.17.00 WIB');
(39, 1, 'Istano Basa Pagaruyung', 'sejarah', 'Istana ini usianya sudah sangat tua, dan dulunya digunakan sebagai kediaman bagi keluarga kerajaan Pagaruyung. Bangunan ini terdiri dari 11 gonjong, 72 tonggak dan 3 lantai. Objek wisata ini dilengkapi dengan surau, tabuah Rangkiang Patah Sambilan, serta fisik bangunan Istano Basa Pagaruyung dilengkapi dengan beragam ukiran yang tiap-tiap bentuk dan warna ukiran mempunyai falsafah, sejarah dan budaya Minangkabau. Buat para pengunjung yang datang disediakan tempat untuk menyewa pakaian adat Minangkabau yang bisa digunakan untuk foto – foto.', 'sejarah-3', 'Jalan Sutan Alam Bagagarsyah, Pagaruyung, Kecamatan Tanjung Emas, Kabupaten Tanah Datar, Sumbar.', 'Senin-Minggu : 08.00 - 16.00 WIB');
(40, 1, 'Rumah Adat Kampai Nan Panjang', 'sejarah', 'Tempat ini juga masuk ke dalam daftar wisata sejarah Minangkabau yang usianya bahkan sudah mencapai 300 tahun lalu. Meski usianya sudah sangat tua, namun konstruksi bangunannya hingga saat ini belum mengalami perubahan dan masih berdiri kokoh. Bangunan ini didirikan oleh Datuk Penghulu yang mengusung gaya arsitektur Khas Minang dan menggunakan bahan utama berupa kayu berwarna hitam pada bagian luarnya. Bangunan ini terdiri dari enam buah biliak (kamar) dengan bentuk pintu oval dengan ukuran kecil. Rumah ini telah berumur + 350 tahun, dan keunikan lain bangunan ini dibuat tanpa menggunakan paku besi, terletak + 13 km dari kota Batusangkar', 'sejarah-4', 'Belimbing, Kecamatan rambatan, kabupaten Tanah Datar, Sumbar.', 'Senin-Minggu : 08.00 - 16.00 WIB');
(41, 1, 'Balairung Sari Tabek', 'sejarah', 'Tempat ini memiliki bentuk seperti balai pertemuan tanpa dinding, karena memang dulunya digunakan sebagai tempat pertemuan untuk menyelesaikan masalah.  bangunannya terbuat dari kayu dan atap ijuk yang dibangun oleh arsitektur Minangkabau Datuak Tantejo Gurhano sebagai tempat musyawarah adat dan sebagai bukti sejarah yang telah berumur 450 tahun. Disamping Balairung Sari terdapat juga Medan Nan Bapaneh (tempat bersenda gurau masa dulunya) dan bukti sejarah lainnya.', 'sejarah-5', 'Jorong Tabek, Nagari Tabek, Kecamatan Pariangan, Kab. Tanah.', 'Senin-Minggu : 08.00 - 17.00 WIB');
(42, 1, 'Benteng Van Der Capellen', 'sejarah', 'Benteng ini merupakan peninggalan Belanda di kota Batusangkar. Benteng ini tercipta akibat adanya perang Padri pada tahun 1821 yang merupakan perang antara kaum agama dan adat. Pemberian nama benteng diambil dari nama Gubernur Jenderal Belanda yang menjabat saat itu. Keutuhan benteng hingga kini terus dijaga dan dilestarikan sebagai salah satu warisan sejarah kota Minangkabau. Selain itu terdapat benda – benda peninggalan Belanda lainnya di dekat benteng yaitu dua buah meriam belanda yang bertuliskan VOC.', 'sejarah-6', 'Baringin, Kecamatan Lima kaum, Kabupaten Tanah Datar', 'Senin-Sabtu : 09.30 - 17.30 WIB');
(43, 1, 'Cagar Budaya Batikam', 'sejarah', 'Tempat ini merupakan salah satu cagar budaya yang dilindungi dan dilestarikan karena juga merupakan salah satu lokasi bersejarah. Di dalam lokasi wisata terdapat batu dengan bekas tusukan di tengah maka dari itu banyak yang menyebutnya sebagai batu yang tertusuk. Menurut sejarah adanya tusukan pada batu tersebut bukan begitu saja terjadi, namun berasal dari bekas tusukan keris Datuak Parpatiah nan Sebatang. Adanya batu tersebut juga menjadi salah satu bukti bahwa pada zaman Neolitikum, kerajaan Minangkabau pernah berkuasa.', 'sejarah-7', 'Jorong Dusun Tuo, Kecamatan Nagari Lima Kaum, Kabupaten Tanah Datar, Sumbar', 'Senin - Minggu : 09.00 - 17.00 WIB');
(44, 1, 'Masjid Raya Rao-Rao', 'sejarah', 'Bangunan Cagar Budaya Masjid Raya Rao-Rao berada pada ketinggian 750 m di atas permukaan laut dan dibangun pada tahun 1918. Bangunan Masjid Raya yang berdenah bujur sangkar ini terletak seperti di celah tebing yang terbuat dari dinding tembok tebal. Gaya arsitektur Masjid Raya Rao-Rao merupakan perpaduan dari beberapa gaya bangunan. Menurut Wali Nagari Rao-Rao, bangunan ini memiliki keunikan gaya arsitektur yang memadukan langgam rupa bangunan yang kental dengan corak arsitektural dari tiga bangsa (eklektisisme): Melayu (Minangkabau), Eropa (Italia dan Belanda), dan Timur Tengah (Persia).. Bangunan utamanya terbagi menjadi dua bagian, yaitu ruang utama dan serambi atau teras masjid. Serambi melingkupi seluruh sisi bangunan masjid, bagian paling luas berdenah bujur sangkar terdapat pada bagian depan.', 'sejarah-8','Jl. Raya Batusangkar Bukittinggi No.20, Rao Rao, Sungai Tarab, Kabupaten Tanah Datar.', '24 Jam');
(45, 1, 'Jam Gadang Bukittinggi', 'sejarah', 'Jam Gadang adalah menara jam yang menjadi penanda Kota Bukittinggi, Sumatra Barat, Indonesia. Menara jam ini memiliki jam dengan ukuran besar di empat sisinya sehingga dinamakan Jam Gadang, sebutan bahasa Minangkabau yang berarti "jam besar". Jam Gadang telah dijadikan sebagai objek wisata dengan diperluasnya taman di sekitarnya. Taman tersebut menjadi ruang interaksi masyarakat baik pada hari kerja maupun pada hari libur. Acara-acara yang sifatnya umum biasanya diselenggarakan di sini.', 'sejarah-9', 'Jl. Raya Bukittinggi - Payakumbuh, Benteng Ps. Atas, Kec. Guguk Panjang, Kota Bukittinggi, Sumatera Barat 26136.', 'Senin-Minggu : 08.00 - 16.00 WIB');
(46, 1, 'Lobang Jepang', 'sejarah', 'Tempat ini adalah sebuah lubang dengan panjang 1.470 meter. Lokasinya berada tidak jauh dari Ngarai Sianok, yaitu sekitar 40 meter di bawahnya. Yang unik dari Lobang Jepang adalah terdapat terowongan berjumlah 21 buah. Fungsi ke-21 terowongan itu bermacam-macam, sebagai tempat tinggal, ruang tahanan, hingga ruang penyiksaan.', 'sejarah-10', 'Jl. Panorama, Bukit Cangang Kayu Ramang, Guguk Panjang, Bukittinggi', 'Senin-Minggu : 08.00 - 18.00 WIB');
(47, 1, 'Benteng Fort de Kock', 'sejarah', 'Menurut informasi, Fort de Kock didirikan oleh Kapten Bouer di tahun 1825. Benteng ini merupakan salah satu saksi bisu sejarah perlawanan rakyat Minangkabau melawan Belanda pada perang Paderi.', 'sejarah-11', 'Jl. Yos Sudarso, Benteng Ps. Atas, Guguk Panjang, Kota Bukittinggi.', 'Senin-Minggu : 07.30 - 22.00 WIB');
(48, 1, 'Jembatan Limpapeh', 'sejarah', 'Jembatan baja ini menghubungkan Benteng Fort de Kock dengan Taman Margasatwa dan Budaya Kinantan. Menariknya, saat melewati jembatan ini anda akan merasa getaran dan goyangan yang memicu adrenalin. Dari jembatan ini juga anda dapat menikmati pemandangan indah Kota Bukittinggi dari atas. Akan terlihat pula kawasan perbukitan serta Gunung Marapi di sekeliling.', 'sejarah-12', 'Jl. Yos Sudarso, Benteng Ps. Atas, Guguk Panjang, Kota Bukittinggi.', 'Senin-Minggu : 09.00 - 16.00 WIB');
(49, 1, 'Museum Bung Hatta', 'sejarah', 'Museum ini dahulunya adalah rumah yang menjadi rumah kelahiran Bung Hatta. Karena jasanya, rumah dari salah satu tokoh penting bangsa ini dirawat dan dijadikan sebuah museum. Kawasan museum sendiri luasnya mencapai 1.000 m2. Keseluruhan aset berupa tanah dan rumah  ditangani langsung oleh Dinas Pariwisata, Seni, dan Budaya kota Bukittinggi.', 'sejarah-13', 'Jl. Soekarno Hatta No.37, Campago Ipuh, Mandiangin Koto Selayan, Kota Bukittinggi.', 'Senin-Minggu : 09.00 - 16.00 WIB');
(50, 1, 'Candi Padang Roco', 'sejarah', 'Candi ini adalah bangunan peninggalan kerajaan Melayu yang dijadikan sebagai tempat ibadah para raja. Candi Padang Roco ini memiliki 4 candi, namun baru ada 3 candi yang sudah dipugar. Candi Padang Roco I, tingginya 118 meter dari permukaan laut. Candi Padang Roco II, tingginya 113 meter dari permukaan laut dan memiliki tangga dengan lebar 3,55 meter di empat sisinya. Candi Padang Roco III, tingginya 123 meter dari permukaan laut, berbentuk persegi Panjang dan bagian tengahnya merupakan ruang kosong.', 'sejarah-14', 'Jorong Padang Roco Nagari Siguntur, Kecamatan Sitiung, Kabupaten Dharmasraya, Sumatera Barat.', 'Senin-Minggu : 08.00-18.00 WIB');
(51, 1, 'Rumah Gadang Siguntur', 'sejarah', 'Rumah Gadang Siguntur adalah salah satu peninggalan dari kerajaan Siguntur, yaitu kerajaan yang terbentuk setelah runtuhnya Kerajaan Melayu Dharmasraya. Rumah Gadang ini dahulunya adalah pusat pemerintahan kerajaan. Dan kini, tempat ini juga masih menjadi pusat pertemuan para pewaris tahta kerajaan Siguntur. Jika ke tempat ini, kita dapat beramah tamah dan mengeksplor cerita Bersama pewaris tahta kerajaan yang masih hidup di masa kini.', 'sejarah-15', 'Siguntur, Dharmasraya', 'Senin-Jumat : 08.00-18.00 WIB');
(52, 1, 'Rumah Gadang Talu atau Tuanku Bosa XIV', 'sejarah', 'lokasi objek wisata dekat dari Kota Simpang Empat, hanya 35 km dengan waktu tempuh 30 menit, sebelum sampai ke lokasi nantinya sepanjang jalan di Kecamatan Talamau. Fasilitas yang ada di dalam Rumah Gadang Tuanku Bosa cukup lengkap antara lain, taman, museum, ruang shalat, perpustakaan, gedung pertemuan kapasitas 200 orang.', 'sejarah-16', 'Koto Dalam Kenagarian Talu, Kecamatan Talamau, Kabupaten Pasaman Barat.', 'Senin-Jumat : 08.00-17.00 WIB');
(53, 1, 'Museum Tambang Ombilin', 'sejarah', 'Museum Tambang Ombilin merupakan tujuan wisata Sawahlunto yang pertama. Museum ini menjadi penanda bahwa Sawahlunto pernah berjaya di sektor pertambangan. mengunjungi objek wisata di Sawahlunto ini, kita bisa mengetahui awal mula pertambangan batubara di Sawahlunto hingga kapan era tersebut berakhir. Di objek wisata sejarah Sawahlunto ini juga tersimpan peralatan tambang yang digunakan pada masa kolonial tersebut. Aktivitas pertambangan di Sawahlunto sendiri bermula sejak tahun 1891 dan berhenti pada tahun 1970-an karena produksinya semakin menurun.Bangunan museum tambang Ombilin juga punya kaitan dengan sejarah indonesia. Sebab, sebelum beralih fungsi menjadi museum, bangunan tersebut merupakan rumah peristirahatan Presiden RI Kedua Soeharto.', 'sejarah-17', 'Jl. Ahmad Yani, Teleng, Pasar, Kec. Lembah Segar, Kota Sawah Lunto.', 'Senin-Jumat : 08.00-17.00 WIB');
(54, 1, 'Loebang Mbah Soero', 'sejarah', 'Siapa sangka jika di bawah Kota Sawahlunto terdapat terowongan sepanjang 1,5 kilometer? Terowongan ini merupakan salah satu objek wisata andalan Sawahlunto, namanya Lubang Mbah Soero. Lubang ini dulunya merupakan salah satu fasilitas untuk penambangan batu bara. Nama Soero diambil dari nama mandor tambang batubara kala itu.Untuk bisa masuk ke sini kamu wajib mengenakan helm pengaman serta safety shoes ya. Kamu bisa mendengar langsung cerita lengkap sejarah lubang Mbah Soero ini dari pemandu yang akan menemani sepanjang perjalanan menyusuri terowongan. Meski suasana di dalam terowongan agak seram, dijamin tidak rugi deh datang kemari.', 'sejarah-18', 'Jl. Abdurrahman Hakim, Tanah Lapang, Kec. Lembah Segar, Kota Sawah Lunto.', 'Senin - Minggu : 9.00-17.30 WIB');





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
