-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 12:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `v2diverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id_category`, `category`) VALUES
(1, 'Box'),
(2, 'Pembersih lantai'),
(3, 'Sabun Cair'),
(4, 'Sabun Mandi\r\n'),
(5, 'Shampoo'),
(6, 'Pelembut Pakaian'),
(7, 'Cat Tembok'),
(8, 'Tisu Toilet'),
(9, 'Kapas'),
(10, 'Sabun Cuci Piring'),
(11, 'Sabun Mandi Pria'),
(12, 'Karbol'),
(13, 'Wrap'),
(14, 'Sabun Pencuci Tangan'),
(15, 'Sabun Pencuci Piring'),
(16, 'Hand Sanitizer'),
(17, 'Tisu Dapur'),
(18, 'Tisu Wajah'),
(19, 'Pocket Tissue Wajah'),
(20, 'Pembersih Toilet\r\n'),
(21, 'Larutan Disenfektan'),
(22, 'Pasta Gigi'),
(23, 'Detergent'),
(24, 'Pengharum Ruangan '),
(25, 'Sabun Wajah'),
(26, 'Pembersih Dapur'),
(27, 'Tissue'),
(28, 'Sikat Gigi\r\n'),
(29, 'Pembalut Cup');

-- --------------------------------------------------------

--
-- Table structure for table `tb_indication`
--

CREATE TABLE `tb_indication` (
  `id_indication` int(11) NOT NULL,
  `indication` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_indication`
--

INSERT INTO `tb_indication` (`id_indication`, `indication`) VALUES
(1, 'Eco Friendly Certified'),
(2, 'Not Eco Friendly Certified');

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment`
--

CREATE TABLE `tb_payment` (
  `id_payment` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `pay_address` varchar(255) NOT NULL,
  `pay_option` varchar(25) NOT NULL,
  `pay_picture` varchar(100) NOT NULL,
  `pay_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_payment`
--

INSERT INTO `tb_payment` (`id_payment`, `product`, `user`, `pay_address`, `pay_option`, `pay_picture`, `pay_status`) VALUES
(6, 2, 3, 'jl. Sariasih II rt13 rw14', 'Transfer Bank', '26112021030019me.jpeg', 'Waiting For Confirmation'),
(7, 82, 3, 'jl. Sariasih II', 'Transfer Bank', '26112021074804tumblr_f4d510d18f23a6d812377cfe5a14687f_40589691_500.gif', 'Waiting For Confirmation');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `company` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `product_decs` varchar(255) NOT NULL,
  `prdct_pos` varchar(255) NOT NULL,
  `prdct_nev` varchar(100) NOT NULL,
  `indication` int(11) NOT NULL,
  `qr_product` varchar(100) NOT NULL,
  `product_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `category`, `product_name`, `product_price`, `company`, `location`, `product_decs`, `prdct_pos`, `prdct_nev`, `indication`, `qr_product`, `product_picture`) VALUES
(1, 6, 'So Klin Softener', '20.300/800ml', 'Wingscare', 'Jakarta,Indonesia', 'Pelembut pakaian sekali bilas', '-', '-DHTDMAC (Dihydrogenated amonium klorida)\r\n-PDMS (polydimethylsiloxane)', 2, '1.png', '1.png'),
(2, 4, 'Sabun Wortel Alpukat', '45.000/120gram', 'Demi Bumi', 'Jakarta,Indonesia', 'Sabun terbuat dari bahan alami tanpa zat berbahaya', '-Wortel dan Alpukat\r\n-Tanpa pewangi\r\n-Kemasan bioplastik dari rumput laut', '-', 1, '1.png', '1.png'),
(3, 5, 'Coconut Shampoo', '90.000/500gram', 'RØNNE', 'Jakarta,Indonesia', 'Shampoo with honey bar soap', '-Paraben Free\r\n-Botol shampoo terbuat dari sabun batangan\r\n-Terbuat dari kelapa dan madu alami', '-', 1, '1.png', '1.png'),
(4, 2, 'Super Pell Himalayan Berries', '29.200/700ml', 'Unilever', 'Jakarta,indonesia', 'Lantai bersih tanpa kuman ', '-', '-Triclosan (kandungan beracun)\r\n-Sodium Laureth Sulfate', 2, '1.png', '1.png'),
(6, 3, 'Dettol Cairan Antiseptic', '113.900/1liter', 'Dettol', 'Jakarta,Indonesia', 'Antiseptic nomor 1 di Indonesia', '-', '-Triclosan (kandungan beracun)', 2, '1.png', '1.png'),
(7, 6, 'Downy Pewangi', '35.800/900ml', 'P&G', 'Jakarta,indonesia', 'Cairan pelembut pakaian dengan keharuman tahan lama', '-DHTDMAC (Dihydrogenated amonium klorida)\r\n-PDMS (polydimethylsiloxane)', '-', 2, '1.png', '1.png'),
(8, 7, 'Propan Decorshield White', '280.000/2,5liter', 'Propan', 'Jakarta,Indonesia', 'Cat tembok kuat tahan lama anti air, badai, dan jamur', 'Memiliki kadar VOC yang sudah sesuai standar dan telah tersertifikasi.', '-', 1, '1.png', '1.png'),
(9, 8, 'Paseo Elegant ', '44.000/8roll', 'Paseo', 'Jakarta,Indonesia', 'Paseo Roll Ekstra Panjang dengan 360 lembar yang memberikan kenyamanan ekstra untuk penggantian gulungan yang lebih sedikit.', '-', 'Menggunakan kayu sebagai bahan dasar pembuatan tisu', 2, '1.png', '1.png\r\n'),
(10, 9, 'Reuseable Cotton Pad', '50.000/10pcs', 'Demi Bumi', 'Jakarta, Indonesia', 'Kapas kain bisa digunakan berkali-kali, dapat menghemat biaya dengan kualitas mutu yang baik.', '-Kapas tidak terbuat dari kapas hasil pestisida\r\n-Berbahan dasar kain yang dapat digunakan ulang\r\n', '-', 1, '1.png', '1.png'),
(11, 10, 'Sabun Cuci Piring', '40.000/5liter', 'Sebersih', 'Jakarta, Indonesia', 'Membersihkan noda minyak sekali bilas, hemat pemakaian cukup sekali tetes.', '-Plant based\r\n-Menggunakan natural engredients', '-', 1, '1.png', '1.png'),
(12, 11, 'Gentle Soap Coco Nella', '119.000/500ml', 'Miels', 'Jakarta, Indonesia', 'Sabun mandi khusus pria dengan keharuman alami dari bahan pilihan.', 'Menggunakan minyak kelapa yang dikombinasikan dengan minyak atsiri serai', '-', 1, '1.png', '1.png'),
(13, 5, 'Hari Shampoo Premium', '70.000/1000ml', 'PROKLEEN', 'Jakarta,Indonesia', 'Shampoo dengan kandungan kansetrat rambut anti kasar ', 'Shampoo yang menggunakan bahan berupa kansetrat karena memiliki kandungan serta kasar yang rendah', '-', 1, '1.png', '1.png'),
(14, 23, 'Detergent Bubuk Bunga', '41.700/2,7kg', 'Daia', 'Jakarta,Indonesia', 'Detergent bubuk dengan aroma wangi bunga, keharuman tahan lama.', '-', 'Mengandung zat kationik ataupun gara ammonium', 2, '1.png', '1.png'),
(15, 12, 'Wipol Karbol Pouch', '23.100/780ml', 'Unilever', 'Jakarta,Indonesia', 'Pembersih karbol ukuran pouch classic pine membunuh kuman ', '-', '-Alcohol ethoxy late natrium lauril eter sulfat\r\n-cresey lic acid ', 2, '1.png', '1.png'),
(16, 2, 'Pembersih Lantai Lemon', '80.000/5liter', 'Sebersih', 'Jakarta, Indonesia', 'Pembersih lantai antibacterial yang menjaga permukaan lantai selalu bersih dan berkilau.', '-Plant based\r\n-Bio Degradable', '-', 1, '1.png', '1.png'),
(17, 13, 'Paper Bubble Wrap ', '40.000/1pack', 'Demi Bumi x Papel Pack', 'Jakarta, Indonesia', 'Sebuah produk terbaru hasil kolaborasi Demibumi dan papelpack.id. Kertas berpola heksagonal yang didesain untuk menahan benturan sebagai solusi pengemasan.', 'Produk yang terbuat dari 90% virgin plup yang terbuat dari sumber kayu berkelanjutan.', '-', 1, '1.png', '1.png'),
(18, 14, 'Lifebouy Handwash', '17.500/200ml', 'Unilever', 'Jakarta, Indonesia', 'handwash mengandung perlindungan kuman tingkat lanjut dengan Activ Silver Formula , dan memberikan perlindungan kuman 99,9% hanya dalam 10 detik. ', '-', '-Alky ibenzene sulfonat\r\n-Ticlosan', 2, '1.png', '1.png'),
(19, 10, 'Mama Lemon', '16.400/800ml', 'Lion Wings', 'Jakarta, Indonesia', 'airan pencuci piring dengan formula baru Mineral Anti Lemak, dahsyat mengangkat lemak dan efektif menghilangkan bau.', '-', 'ABS', 2, '1.png', '1.png'),
(20, 5, 'Shampoo Mint Kelapa', '45.000/80gr', 'Demi Bumi', 'Jakarta, Indonesia', 'Sebuah produk sampo alami terbaru Demibumi yang diperuntukkan bagi tipe rambut normal. Terbuat dari sari kelapa dan daun mint', 'Based plant', '-', 1, '1.png', '1.png'),
(21, 16, 'Dettol Hand Sanitizer', '25.900/200ml', 'Dettol', 'Jakarta, Indonesia', 'Dettol tepercaya Anda menawarkan pembersih tangan kekuatan klinis dettol yang baru dan lebih baik yang membunuh 99. 99% Kuman tanpa menggunakan sabun dan air.', '-', 'Triclosan (kandungan beracun)', 2, '1.png', '1.png'),
(22, 8, 'Bamboo Toilet Paper', '39.000/400gram ', 'Rumahbumi', 'Jakarta,Indonesia', '100% Bio-degradable dapat sepenuhnya hancur kembali ke bumi 7.\r\n', 'Tisu bambu 100% tanpa kemasan plastik bersifat hypo-allergenic, anti jamur dan anti bakteri ', '-', 1, '1.png', '1.png'),
(23, 17, 'Tisu Bambu - Kitchen', '40.800/500gram', 'Wateru', 'Jakarta,Indonesia', 'Wateru premium bamboo tissue adalah kertas tissu pertama di Indonesia dibuat dari 100% virgin dan 100% serta bambu alami tanpa pemutih.', 'dibuat dengan 100% virgin dan 100% serta bambu alami tanpa pemutih', '-', 1, '1.png', '1.png'),
(24, 18, 'Facial Tissue', '16.800/250gram', 'Wateru', 'Jakarta,Indonesia', 'Tissu wajah alami terbuat dari serat bambu tanpa pemutih ', 'terbuat dari 100% serat bambu tanpa pemutih', '-', 1, '1.png', '1.png'),
(25, 18, 'Pocket Tissue', '8.900/200gram', 'Wateru', 'Jakarta,Indonesia', 'Tissue wajah pocket yang mudah dibawa kemana-mana cocok untuk traveliing ', 'terbuat dari 100% serat bambu alami tanpa pemutih ', '-', 1, '1.png', '1.png'),
(26, 23, 'SOKLIN Detergent Cair', '30.800./1600ml', 'Wingscare', 'Jakarta,Indonesia', 'Sabun cuci cair dengan Formula anti bakteri membuat pakaian tidak berbau meskipun direndam dalam waktu lama dan melindungi pakaian dari bau apek', '-', 'Total surfkatan & aditif 25%, Triciosan (antibacterial agent)', 2, '1.png', '1.png'),
(27, 6, 'Kispray Pouch Refill Violet', '5.300/300ml', 'Enesisof Ficialshop', 'Jakarta,Indonesia', 'Kispray mengandung antiseptik aktif yang disebut alkil dimetil benzil amonium klorida , yang efektif membunuh kuman penyebab bau busuk pada kain dan mencegah zat parasit pada pakaian.', '-', 'Alkyl dimenthylbenxyl ammonium chloride 0.1%', 2, '1.png', '1.png'),
(28, 4, 'Cocolemongrass Face & Body Soap', '30.000/100ml', 'Miels.id', 'Jakarta,Indonesia', 'Sabun mandi dan muka dengan perpaduan bahan dari minyak kelapa', 'Bahan perpaduan dari minyak kelapa', '-', 1, '1.png', '1.png'),
(29, 4, 'Cocolav Face & Body Soap', '135.000/500ml', 'Miels.id', 'Jakarta,Indonesia', 'Sabun mandi dan wajah dengan perpaduan coconut dan lavender dengan natural ingredients cocok dengan berbagai jenis kulit ', 'Bahan menggunakan coconut, lavender dan lav andin essential oil, all natural and safe for all skin', '-', 1, '1.png', '1.png'),
(30, 5, 'Sunsilk Black Shine', '20.200/170ml', 'Unilever', 'Jakarta,Indonesia', 'Shampoo untuk membuat rambut terlihat bercahaya dan lembut', '-', 'Sodium Laureth Sulfate', 2, '1.png', '1.png'),
(31, 3, 'Biore Beauty Body Foam Relaxing', '24.500/450ml', 'Kao Official ', 'Jakarta,Indonesia', 'Sabun mandi cair dengan sensasi relaxing', '-', 'Sodium Laureth Sulfate', 2, '1.png', '1.png'),
(32, 23, 'Rinso + Molto Anti Noda', '23.000/770g', 'Unilever', 'Jakarta,Indonesia', 'Perpaduan dergent dengan pewangi untuk menghilangkan noda membandel di pakaian dan memberikan keharuman. ', '-', '22% natrium alkilbenzena Sulfonate', 2, '1.png', '1.png'),
(33, 20, 'Vixal', '21.200/780ml', 'Unilever', 'Jakarta, Indonesia', 'Pembersih toilet dapat membunuh kuman dan membersihkan kamar mandi seperti baru', '-', '17% HCI', 2, '1.png', '1.png'),
(34, 5, 'Dove Shampoo Rambut Rusak', '24.750/130ml', 'Unilever', 'Jakarta, Indonesia', 'Shampoo untuk perawatan rambut rusak ', '-', 'SLS', 2, '1.png', '1.png'),
(35, 10, 'SUNLIGHT Jeruk Nipis', '16.000/755ml', 'Unilever', 'Jakarta, Indonesia', 'Sabun pencuci piring dengan kandungan jeruk nipis untuk membersihkan dari lemak dan noda.', '-', 'ABS', 2, '1.png', '1.png'),
(36, 21, 'BAYCLIN', '14.000/500ml', 'SC Johnson', 'Jakarta, Indonesia', 'Larutan desinfektan untuk membersihkan noda  dan membunuh bakteri', '-', 'Klorin', 2, '1.png', '1.png'),
(37, 10, 'PURO Premium ', '23.000/500ml', 'Puro ID', 'Jakarta, Indonesia', 'Sabun cuci piring Non SLS dan Non Phosphate', 'Non SLS dan Non Phosphate', '-', 1, '1.png', '1.png'),
(38, 21, 'Puro Desinfektan', '65.000/500ml', 'Puro ID', 'Jakarta, Indonesia ', 'Puro Premium Desinfektan berbahan biodegradable dan food contact sehinggan aman untuk digunakan.', 'Biodegradable, Non Klorin', '-', 1, '1.png', '1.png'),
(39, 23, 'PURO Liquid Detergent', '20.000/1000ml', 'Puro ID', 'Jakarta, Indonesia ', 'Sabun cair yang ramah lingkungan. Sabun bersifat Low Foam sehingga mudah dibilas, hemat air dan bersih. Bahan Konsentrat.', 'Low Foam', '-', 1, '1.png', '1.png'),
(40, 5, 'Anti-Dandruff Care Shampoo', '56.300/180ml', 'Good Virtues Co', 'Jakarta, Indonesia', 'Good Virtues Co. Happy & Heavenly Anti-Dandruff Care Shampoo merupakan shampoo dengan kandungan Organic Habbatus Sauda Oil (Organic Black Seed Oil)', 'Non SLS, Non ALS', '-', 1, '1.png', '1.png'),
(51, 14, 'Zerowaste Handsoap Bar', '27.500/70gr', 'Zerowaste.id', 'Jakarta,Indonesia', 'Sabun cuci tangan yang lembut untuk kulit hadir dengan ukuran 70 gram. Menghidrasi dan tidak mengiritasi.', 'Non Sulfat, paraben, phthalates', '-', 1, '1.png', '1.png'),
(52, 15, 'Snap Clean ', '35.000/4liter', 'Snap One', 'Jakarta,Indonesia', 'Snap Clean Dishwashing adalah Sabun Cair untuk mencuci piring dengan formula minim busa yang ramah lingkungan tapi cepat kesat menghilangkan noda minyak di piring yang kotor', 'Tidak mengandung fosfat dan bebas pemutih ', '-', 1, '1.png ', '1.png'),
(53, 6, 'Green Wash', '29.000/500ml', 'HNI', 'Jakarta, Indonesia', 'Green Wash Softener Pewangi dan pelembut pakaian yang digunakan pada saat proses pembilasan dengan aroma mewah dan eksklusif.', 'Terbuat dari bahan baku yang zat aktifnya berasal dari tumbuhan/nabati (coconut)', '-', 1, '1.png', '1.png'),
(54, 22, 'Pasta Gigi Enzim', '26.000/160gr', 'Enzim', 'Jakarta, Indonesia', 'Pasta gigi dengan enzim, fluoride dan tanpa deterjen (sodium laurylsulphate) dapat membantu mencegah serta melindungi gigi dan gusi pada usia tua.', 'Bebas detergen, mengandung sorbitol', '-', 1, '1.png', '1.png'),
(55, 5, 'Shampoo Tresemme Keratin', '70.000/670ml', 'Unilever', 'Jakarta, Indonesia', 'hampoo kualitas salon dengan Hydrolyzed Keratin yang dapat memberikan rambut lembut dan tahan lama. Rasakan perawatan rambut ala shampoo salon.', '-', 'Mengandung sodium laureth sulfate', 2, '1.png', '1.png'),
(56, 23, 'Rinso Detergent Cair', '66.100/5liter', 'Unilever', 'Jakarta, Indonesia', 'Detergent merek pertama di Indonesia', '-', 'Mengandung 22% natrium alkibenzena sulfonate', 2, '1.png', '1.png'),
(57, 4, 'Sabun Natural Alami ', '35.000/60gr', 'Produk Hijau', 'Jakarta, Indonesia', 'Sabun natural dari bahan alami bebas bahan kimia yang ramah lingkungan', 'Bebas dari zat kimia sintetik, toxin dan mengandung Ph:7', '-', 1, '1.png', '1.png'),
(58, 18, 'Wateru Bamboo Facial Tissue', '20.000/150lembar', 'Pepermint', 'Jakarta, Indonesia ', 'Tissue dari bahan alami menggunakan serat bambu bebas dari bahan kimia ', 'Bebas dari bahan kimia berbahaya seperi BPA, formaldenhyde, klorin pewangi atau bahan penghilang tinta.', '-', 1, '1.png', '1.png'),
(59, 2, 'Wipol pembersih lantai', '17.000/780ml', 'Unilever', 'Jakarta, Indonesia', 'Wipol cairan pembersih lantai untuk membersihkan lantai dari kuman dan bakteri ', '-', 'Mengandung benzalkonium chloride 1,25%', 2, '1.png', '1.png'),
(60, 20, 'Harpic Original Blue', '22.000/450ml', 'Unilever', 'Jakarta, Indonesia', 'Cairan pembersih toilet untuk membersihkan dan membunuh bakteri dan kuman', '-', 'HCL', 2, '1.png', '1.png'),
(61, 15, 'Sabun Cuci Piring DB Klin', '7.000/450ml', 'DB Klin', 'Jakarta,Indonesia', 'Sabun pencuci piring terbuat dari bahan alami bebas bahan kimia dan ramah lingkungan.', 'Mengandung pewarna makanan dan tidak mengandung bahan kimia berbahaya', '-', 1, '1.png', '1.png'),
(62, 5, 'Head & Shoulders Cool Menthol Lemon', '163.660/850ml', 'P&G', 'Jakarta,Indonesia', 'Dengan wangi Lemon segar, rambut indahmu sekarang menjadi segar dan bebas minyak! Dengan formula Lemon, Head & Shoulders Lemon Segar membersihkan ', '-', 'Sulfates, Zinc Pyriothione, Selenium Sulfide', 2, '1.png', '1.png'),
(63, 5, 'Shampoo Aussie Miracle Moist', '179.900/360ml', 'P&G', 'Jakarta,Indonesia', 'Aussie Moist Shampoo adalah shampoo yang akan melembabkan dan menutrisi rambut. Diformulasikan dengan Australian Aloe dan minyak biji Jojoba.', '-', 'Silicon', 2, '1.png', '1.png'),
(64, 22, 'Pepsodent Center Fresh ', '21.150/160gr', 'Unilever', 'Jakarta,Indonesia', 'Di dalam lapisan dalam terdapat gel dengan mothwash yang membantu melawan bakteri', '-', 'Flouride', 2, '1.png', '1.png'),
(65, 4, 'Lifebouy Antibacterial Body Wash', '33.900/900ml', 'Unilever', 'Jakarta,Indonesia', 'Busa yang kaya dan lembut dalam sabun mandi  mencapai jauh ke dalam pori-pori, membersihkan secara mendalam dan menghilangkan 10 masalah penyebab kuman, membuat kulit Anda terasa bersih dan segar.', '-', 'Triclosan ', 2, '1.png', '1.png'),
(66, 26, 'Multi Purpose Cleaner', '95.000/300gr', 'Hikari Home', 'Jakarta,Indonesia', 'Pembersih dapur untuk menghidari kuman dan bakteri ', 'Lemon Essential Oil', '-', 1, '1.png', '1.png'),
(67, 25, 'Avoskin Natural Sublime Facial Cleanser', '120.000/100ml', 'Avoskin', 'Jakarta,Indonesia', 'Avoskin Natural Sublime Facial Cleanser hadir dengan formulasi ulang bahan-bahan dari Aloe Vera Facial Wash . Produk ini adalah Pembersih pH Rendah', '2% Niacinamide, Hyaluronic Acid, Marula Oil, Ekstrak Kale, Ekstrak Kaktus, Ekstrak Mawar dan Pentavitin', '-', 1, '1.png', '1.png'),
(74, 27, 'Tissue Wypal Lap Ajaib', '10.000/100gr', 'Soebi Antique', 'Jakarta,Indonesia', 'Lap Ajaib Reusable Tissue dengan harga murah ', '80% Pulp, 20% Polypropylene', '-', 1, '1.png', '1.png'),
(75, 28, 'Bamboo Toothbrush ', '18.000/1pcs', 'Soebi Antique', 'Jakarta,Indonesia', 'Sikat gigi menggunakan 100% Bamboo Handmade ', '100% Bamboo Handmade', '-', 1, '1.png', '1.png'),
(76, 5, 'Shampoo Bar Go Away Itchy', '65.000/50gr', 'Jinawi', 'Jakarta,Indonesia', 'JINAWI Shampoo bar buatan sendiri dan alami. Mereka diformulasikan untuk memberikan nutrisi yang baik untuk rambut. Bar Sampo Rumah .', 'Coconut-based surfalant, coco betaine, theobroma cacao butter, cera alba, ekstrak buah citrus medica, limonum, minyak biji moringa oleifera, panthenol, bubuk daun apium graveolens, bubuk daun mentha piperita, mentha piperita essential oil, melalueca alter', '-', 1, '1.png', '1.png'),
(77, 28, 'Bamboo Toothbrush ', '18.000/1pcs', 'Soebi Antique', 'Jakarta,Indonesia', 'Sikat gigi menggunakan 100% Bamboo Handmade ', '100% Bamboo Handmade', '-', 1, '1.png', '1.png'),
(78, 5, 'Shampoo Bar Go Away Itchy', '65.000/50gr', 'Jinawi', 'Jakarta,Indonesia', 'JINAWI Shampoo bar buatan sendiri dan alami. Mereka diformulasikan untuk memberikan nutrisi yang baik untuk rambut. Bar Sampo Rumah .', 'Coconut-based surfalant, coco betaine, theobroma cacao butter, cera alba, ekstrak buah citrus medica, food coloring dan sebagainya.', '-', 1, '1.png', '1.png'),
(79, 29, 'Organicup Menstrual Cup', '319.200/17-30ml', 'Organicup', 'Jakarta,Indonesia', 'Pembalut cup dengan tampungan 17-30ml menggunakan bahan silicon medical grade', '100% Medical grade silicon dan BPA free, OrganiCup bersertifikat FDA, Vegan dan Bebas alergi ', '-', 1, '1.png', '1.png'),
(80, 4, 'Sabun Mandi Alami Lavender', '15.000/20gr', 'Eliv', 'Jakarta,Indonesia', 'Sabun mandi dengan kandungan bahan alami', 'Viegin coconut oil, coconut oil, castor oil, olive oil, canola oil, fragnance, colorant, estrak herbal, sodium hydroxide, disfilled water', '-', 1, '1.png', '1.png'),
(81, 21, 'Wipol Sray Disinfektan ', '66.700/500ml', 'Unilever', 'Jakarta,Indonesia', 'Larutan Disenfektan untuk membersihkan dari bakteri, virus dan kuman ', '-', 'Benzalkonium chloride & Ethoxy lated alcohol', 2, '1.png', '1.png'),
(82, 24, 'Glade Aerosol Ocean Escape ', '27.600/400ml', 'Scjohnson', 'Jakarta,Indonesia', 'Pengharum ruangan dengan kesegaran tahan lama', '-', 'Formaldehy de', 2, '1.png', '1.png'),
(83, 22, 'Closeup Toothpaste ', '19.100/160gr', 'Unilever', 'Jakarta,Indonesia', 'Menampilkan gigi bersih dan nafas segar yang tahan lebih lama. Memberikan nafas lebih segar & gigi putih. Komposisi formula obat kumur antibakteri yang membersihkan setiap sudut mulut. ', '-', 'Sodium laury I Sulfate (SLS)', 2, '1.png', '1.png'),
(84, 20, 'VIxal Pembersih Porselen', '23.800/780ml', 'Unilever', 'Jakarta,Indonesia', 'Cairan pembersih porselen yang menghilangkan dengan cepat segala noda pada toilet, permukaan porcelen keramik, mosaik dan sejenisnya', '-', 'Alkyl I Benzene Sulfonates (ABS)', 2, '1.png', '1.png'),
(85, 23, 'LF650 Detergent ', '38.000/1,2kg', 'KAO', 'Jakarta, Indonesia', 'Deterjen berkualitas yang memiliki daya bersih tinggi dan selalu berinovasi. Varian-variannya mempunyai kemampuan lebih untuk memenuhi kebutuhan ibu rumah tangga', '-', 'Sufkantan utama 20% & Builder 38%', 2, '1.png', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_question`
--

CREATE TABLE `tb_question` (
  `id_question` int(11) NOT NULL,
  `userguest` varchar(25) NOT NULL,
  `emailguest` varchar(25) NOT NULL,
  `phoneguest` varchar(14) NOT NULL,
  `message` varchar(255) NOT NULL,
  `answere` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_question`
--

INSERT INTO `tb_question` (`id_question`, `userguest`, `emailguest`, `phoneguest`, `message`, `answere`, `tanggal`) VALUES
(1, 'rayhanyudalesmana', 'rayhanyuda13@gmail.com', '085282205728', 'Test Doang ini mah kk', '.', '2021-11-26 09:35:16'),
(2, 'rayhanyudalesmana', 'rayhanyuda13@gmail.com', '085282205728', 'Test Lagi ini mah kk', '.', '2021-11-26 09:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `name_user`, `email`, `phone`, `address`, `role`) VALUES
(1, 'admin', '123', 'Jefri Nanda I', 'jefri.nanda@gmail.com', '82112440715', 'Jalan Ir. H. Juanda, Bogor Tengah; Bogor, West Java, Indonesia', 'admin'),
(2, 'rayhan', '123', 'Rayhan Yuda Lesmana', 'Rayhanyuda13@gmail.com', '82112440715', 'Jl. Banda No. 30 (Jl. R.E. Martadinata) Bandung West Java 40115 Indonesia', 'user'),
(3, 'rayhanyl', '123', 'Yuda Lesmana', 'yuda13@gmail.com', '82112440715', 'Babakan Cilandak No264 sukasari, pesona pasteur', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tb_indication`
--
ALTER TABLE `tb_indication`
  ADD PRIMARY KEY (`id_indication`);

--
-- Indexes for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `user` (`user`),
  ADD KEY `product` (`product`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `category` (`category`),
  ADD KEY `indication` (`indication`);

--
-- Indexes for table `tb_question`
--
ALTER TABLE `tb_question`
  ADD PRIMARY KEY (`id_question`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_indication`
--
ALTER TABLE `tb_indication`
  MODIFY `id_indication` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_payment`
--
ALTER TABLE `tb_payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tb_question`
--
ALTER TABLE `tb_question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD CONSTRAINT `tb_payment_ibfk_1` FOREIGN KEY (`user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_payment_ibfk_2` FOREIGN KEY (`product`) REFERENCES `tb_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `tb_product_ibfk_1` FOREIGN KEY (`category`) REFERENCES `tb_category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_product_ibfk_2` FOREIGN KEY (`indication`) REFERENCES `tb_indication` (`id_indication`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
