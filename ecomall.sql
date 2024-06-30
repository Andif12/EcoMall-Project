-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2024 pada 11.30
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomall`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `addresses`
--

INSERT INTO `addresses` (`id`, `address`, `city`, `province`, `postal_code`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Jl. Balaikota No.1, Bumi Harapan, Kec. Bacukiki Bar., Kota Parepare, Sulawesi Selatan 91122', 'parepare', 'Sulawesi Selatan', '91122', 8, '2024-06-26 06:08:19', '2024-06-26 06:10:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pakaian dan Aksesoris', 'Produk aksesoris ramah lingkungan seperti jam tangan semen, anting-anting dari tutup botol, cincin, dompet, gantungan kunci, gelang, gitar, kalung dari tutup kaleng soda, dan topi dari kertas.', '2024-06-27 00:46:10', '2024-06-27 00:46:10'),
(2, 'Peralatan Rumah Tangga', 'Produk peralatan rumah tangga yang terbuat dari bahan daur ulang seperti aquarium, cermin, hanger baju, jam dinding, karpet, keranjang pakaian, kostum adat, dan lampu hias.', '2024-06-27 00:46:10', '2024-06-27 00:46:10'),
(3, 'Perawatan Diri & Kecantikan', 'Produk-produk perawatan diri dan kecantikan yang mendukung gaya hidup sehat dan ramah lingkungan.', '2024-06-27 00:58:43', '2024-06-27 00:58:43'),
(4, 'Elektronik dan Gadget', 'Berbagai macam produk elektronik dan gadget yang ramah lingkungan dan hemat energi.', '2024-06-27 00:58:43', '2024-06-27 00:58:43'),
(5, 'Kantor dan Sekolah', 'Perlengkapan kantor dan sekolah yang terbuat dari bahan daur ulang dan ramah lingkungan.', '2024-06-27 00:58:43', '2024-06-27 00:58:43'),
(6, 'Olahraga dan Aktivitas Luar Ruangan', 'Produk-produk untuk aktivitas olahraga dan luar ruangan yang mendukung gaya hidup sehat dan berkelanjutan.', '2024-06-27 00:58:43', '2024-06-27 00:58:43'),
(7, 'Makanan dan Minuman', 'Makanan dan minuman sehat yang diproduksi dengan cara yang ramah lingkungan dan berkelanjutan.', '2024-06-27 00:58:43', '2024-06-27 00:58:43'),
(8, 'Berkebun dan Pertanian', 'Perlengkapan dan alat berkebun serta pertanian yang mendukung praktik ramah lingkungan.', '2024-06-27 00:58:43', '2024-06-27 00:58:43'),
(9, 'Produk Anak-anak', 'Produk-produk ramah lingkungan untuk anak-anak, mulai dari mainan hingga perlengkapan lainnya.', '2024-06-27 00:58:43', '2024-06-27 00:58:43'),
(10, 'Transportasi dan Mobilitas', 'Produk-produk untuk transportasi dan mobilitas yang ramah lingkungan dan hemat energi.', '2024-06-27 00:58:43', '2024-06-27 00:58:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_pengguna`
--

INSERT INTO `data_pengguna` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `email`, `no_telpon`, `password`, `username`) VALUES
(1, 'Andi Magfirah Maqbul', 'Bone', '2005-02-18', 'P', 'Andifff12@gmail.com', '085255196113', '$2y$10$x1H1dAkZ5K5I14oPHfP2muCgPj1DJOA1FmeJm965MZpTrC99Z/1P6', 'andif'),
(3, 'arif', 'ndatau', '2002-05-28', 'L', 'dfghjk@gmail.com', '09876', '$2y$10$d5ErO3.ICtdgvoX5uLqC2OOX73CvUyt7bHqqrlc7ctEml/tllG1la', 'arif'),
(5, 'apalah', 'ndatau', '2045-06-10', '', 'tes@gmail.com', '', '$2y$10$hhfpESB9a6YmThu3g24c2.030TyjSbuCT4W3wIgRb5iJ7Q3tq5CBu', 'apaajalah'),
(6, 'def', 'ndatau', '2045-06-10', 'P', 'def@gmail.com', '', '$2y$10$t5c.XyCf6hDGDP1k75EzVe2wMA0xfX62S7vjEDmo/YO7NVX4/yfce', 'def'),
(7, 'hmm', 'Pinrang', '2024-05-25', 'L', 'hmm@gmail.com', '082101238979', '$2y$10$alWurZ3nYAWnVn2bOiP31.iFL3hApm4lpFu40ZqwZFx6CFEUy0whS', 'hmm'),
(8, 'andif lagi', 'Pinrang', '2024-05-25', 'L', 'yey@gmail.com', '089678924666', '$2y$10$kVVPGvLkX5KR2q1UpQZTceq45qG8wvqYb875B.mNd/maaNmekyloy', 'andif2'),
(9, 'dike', 'bojo', '2024-05-08', 'P', 'dike@gmail.com', '089683923729', '$2y$10$Yk1pFrjWELZa8NR7kH8bM.TwTPcjuIKR7v.bHa.K/4Q7ILrGQSIo6', 'dike');

-- --------------------------------------------------------

--
-- Struktur dari tabel `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discount_code` varchar(255) NOT NULL,
  `discount_amount` decimal(10,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `flash_sale_products`
--

CREATE TABLE `flash_sale_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount_price` decimal(8,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `flash_sale_products`
--

INSERT INTO `flash_sale_products` (`id`, `name`, `description`, `price`, `discount_price`, `image`, `created_at`, `updated_at`, `category`) VALUES
(1, 'Jam Tangan', 'Jam tangan ini terbuat dari bahan semen yang kokoh dan tahan lama, memberikan tampilan yang unik dan modern. Desainnya yang minimalis membuatnya cocok untuk digunakan dalam berbagai kesempatan, baik formal maupun santai. Dengan penggunaan bahan semen, jam tangan ini tidak hanya tampil gaya, tetapi juga mendukung upaya pelestarian lingkungan dengan mengurangi penggunaan bahan plastik.', 300000.00, 149999.00, 'jam tangan semen.jpeg', NULL, NULL, 'Pakaian dan Aksesoris'),
(2, 'Anting-Anting', 'Anting-anting ini dibuat dari tutup botol bekas yang didaur ulang, memberikan sentuhan vintage dan kreatif pada penampilan Anda. Setiap pasang anting dibuat dengan tangan, memastikan keunikan dan kualitasnya. Pilihan warna dan desain yang bervariasi membuat anting-anting ini menjadi aksesori yang menarik dan penuh karakter, sekaligus mendukung praktik daur ulang yang ramah lingkungan.', 79000.00, 30000.00, 'anting-anting.jpeg', NULL, NULL, 'Pakaian dan Aksesoris'),
(3, 'Cincin', 'Cincin ini dirancang dari bahan-bahan daur ulang seperti logam bekas dan material lainnya yang ramah lingkungan. Dengan desain yang elegan dan modern, cincin ini cocok untuk digunakan sehari-hari maupun acara spesial. Menggunakan cincin ini berarti Anda turut berkontribusi dalam menjaga kelestarian lingkungan dengan mengurangi limbah.', 99899.00, 88000.00, 'cincin.jpeg', NULL, NULL, 'Pakaian dan Aksesoris'),
(4, 'Dompet', 'Dompet ramah lingkungan ini dibuat dari bahan daur ulang seperti kain bekas, plastik, dan kertas yang telah diproses ulang. Desainnya yang praktis dan stylish membuatnya cocok untuk digunakan sehari-hari. Dengan kompartemen yang cukup untuk kartu, uang kertas, dan koin, dompet ini tidak hanya membantu Anda mengorganisir barang-barang kecil, tetapi juga mendukung upaya pengurangan limbah plastik.', 200000.00, 100000.00, 'dompet.jpg', NULL, NULL, 'Pakaian dan Aksesoris'),
(5, 'Gantungan Kunci', 'Gantungan kunci ini dibuat dari berbagai bahan daur ulang seperti kayu bekas, plastik daur ulang, dan bahan alami lainnya. Setiap gantungan kunci memiliki desain yang unik dan artistik, menjadikannya sebagai aksesori yang menarik dan berfungsi. Dengan menggunakan gantungan kunci ini, Anda menunjukkan dukungan Anda terhadap produk-produk ramah lingkungan dan kreativitas dalam mendaur ulang bahan-bahan bekas.', 50000.00, 25000.00, 'gantungan kunci.jpeg', NULL, NULL, 'Pakaian dan Aksesoris'),
(6, 'Gelang', 'Gelang ini dibuat dari bahan daur ulang seperti karet bekas dan plastik yang telah diolah kembali. Dengan desain yang stylish dan nyaman digunakan, gelang ini menjadi aksesori yang sempurna untuk melengkapi penampilan sehari-hari Anda. Menggunakan gelang ini berarti Anda turut berkontribusi dalam mengurangi limbah dan menjaga lingkungan.', 45000.00, 22000.00, 'gelang.jpeg', NULL, NULL, 'Pakaian dan Aksesoris'),
(7, 'Gitar', 'Gitar ini dibuat dari bahan daur ulang seperti kayu bekas dan logam daur ulang. Dengan suara yang jernih dan desain yang unik, gitar ini cocok untuk anak-anak maupun orang dewasa yang ingin belajar bermain gitar. Menggunakan gitar ini berarti Anda mendukung upaya pelestarian lingkungan dengan mengurangi penggunaan bahan-bahan baru.', 150000.00, 100000.00, 'gitar.jpeg', NULL, NULL, 'Pakaian dan Aksesoris'),
(8, 'Kalung', 'Kalung ini dibuat dari tutup kaleng soda yang didaur ulang menjadi aksesori yang menarik dan unik. Dengan desain yang kreatif dan artistik, kalung ini memberikan sentuhan berbeda pada penampilan Anda. Menggunakan kalung ini berarti Anda turut serta dalam mendukung praktik daur ulang dan mengurangi limbah.', 60000.00, 30000.00, 'kalung.jpeg', NULL, NULL, 'Pakaian dan Aksesoris'),
(9, 'Topi', 'Topi ini terbuat dari kertas daur ulang yang telah diproses ulang menjadi bahan yang kuat dan tahan lama. Desainnya yang stylish dan ramah lingkungan menjadikan topi ini pilihan yang tepat untuk Anda yang peduli pada lingkungan. Dengan menggunakan topi ini, Anda turut berkontribusi dalam mengurangi limbah dan menjaga kelestarian alam.', 75000.00, 40000.00, 'topi.jpeg', NULL, NULL, 'Pakaian dan Aksesoris'),
(10, 'Aquarium', 'Aquarium ini dirancang untuk mempercantik ruangan Anda dengan tampilan air dan ikan yang menenangkan. Terbuat dari kaca berkualitas tinggi dan bahan ramah lingkungan, aquarium ini mudah dibersihkan dan dirawat.', 500000.00, 250000.00, 'aquarium.jpeg', NULL, NULL, 'Peralatan Rumah Tangga'),
(11, 'Cermin', 'Cermin dengan desain modern dan elegan, cocok untuk ditempatkan di berbagai ruangan. Terbuat dari bahan ramah lingkungan, cermin ini membantu mengurangi penggunaan bahan plastik dan mendukung upaya pelestarian lingkungan.', 150000.00, 75000.00, 'cermin.jpeg', NULL, NULL, 'Peralatan Rumah Tangga'),
(12, 'Hanger Baju', 'Hanger baju ini terbuat dari bahan daur ulang yang kokoh dan tahan lama. Dengan desain yang simpel dan fungsional, hanger ini membantu menjaga pakaian Anda tetap rapi dan terorganisir.', 20000.00, 10000.00, 'hanger baju.jpeg', NULL, NULL, 'Peralatan Rumah Tangga'),
(13, 'Jam Dinding', 'Jam dinding dengan desain minimalis dan modern, terbuat dari bahan ramah lingkungan. Jam ini tidak hanya menunjukkan waktu dengan tepat tetapi juga menjadi dekorasi yang menarik di rumah Anda.', 120000.00, 60000.00, 'jam dinding.jpeg', NULL, NULL, 'Peralatan Rumah Tangga'),
(14, 'Karpet', 'Karpet ini terbuat dari bahan daur ulang yang lembut dan nyaman. Desainnya yang menarik dan berbagai pilihan warna membuat karpet ini cocok untuk berbagai jenis ruangan.', 300000.00, 150000.00, 'karpet.jpeg', NULL, NULL, 'Peralatan Rumah Tangga'),
(15, 'Keranjang Pakaian', 'Keranjang pakaian dengan desain modern dan praktis, terbuat dari bahan daur ulang. Keranjang ini membantu Anda mengorganisir pakaian kotor dengan lebih efisien.', 100000.00, 50000.00, 'keranjang pakaian.jpeg', NULL, NULL, 'Peralatan Rumah Tangga'),
(16, 'Kostum Adat', 'Kostum adat ini dibuat dengan bahan-bahan ramah lingkungan dan didesain untuk berbagai acara tradisional. Dengan detail yang indah dan kualitas tinggi, kostum ini menambah nilai budaya pada setiap penampilan.', 450000.00, 225000.00, 'kostum adat.jpeg', NULL, NULL, 'Peralatan Rumah Tangga'),
(17, 'Lampu Hias', 'Lampu hias yang terbuat dari bahan daur ulang, memberikan pencahayaan yang indah dan suasana yang nyaman di rumah Anda. Dengan desain yang unik, lampu ini menjadi tambahan dekorasi yang menarik.', 250000.00, 125000.00, 'lampu hias.jpeg', NULL, NULL, 'Peralatan Rumah Tangga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_06_24_165144_create_users_table', 1),
(2, '2024_06_24_170840_create_categories_table', 2),
(3, '2024_06_24_170840_create_products_table', 2),
(4, '2024_06_24_170841_create_orders_table', 3),
(5, '2024_06_24_170842_create_order_items_table', 3),
(6, '2024_06_24_170842_create_shopping_cart_table', 3),
(7, '2024_06_24_170843_create_cart_items_table', 3),
(8, '2024_06_24_170844_create_payments_table', 3),
(9, '2024_06_24_170844_create_shipping_table', 3),
(10, '2024_06_24_170845_create_reviews_table', 3),
(11, '2024_06_24_170845_create_wishlists_table', 3),
(12, '2024_06_24_170846_create_wishlist_items_table', 3),
(13, '2024_06_24_170847_create_discounts_table', 3),
(14, '2024_06_24_170847_create_product_images_table', 3),
(15, '2024_06_25_000232_create_cache_table', 4),
(16, '2024_06_25_000255_create_sessions_table', 5),
(17, '2024_06_26_101431_add_profile_picture_to_users_table', 5),
(18, '2024_06_26_132750_create_addresses_table', 6),
(19, '2024_06_26_170611_create_payment_options_table', 7),
(20, '2024_06_26_174021_create_flash_sale_products_table', 8),
(21, '2024_06_27_023659_create_product_details_table', 9),
(22, '2024_06_27_025945_add_image_to_product_details_table', 10),
(23, '2024_06_27_212054_stores', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_date` datetime NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment_options`
--

CREATE TABLE `payment_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_method` varchar(255) NOT NULL,
  `nomor_kartu` varchar(255) DEFAULT NULL,
  `nama_kartu` varchar(255) DEFAULT NULL,
  `tanggal_kadaluarsa` date DEFAULT NULL,
  `cvv` varchar(255) DEFAULT NULL,
  `email_paypal` varchar(255) DEFAULT NULL,
  `jenis_bank` varchar(255) DEFAULT NULL,
  `nomor_rekening` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `payment_options`
--

INSERT INTO `payment_options` (`id`, `user_id`, `order_id`, `payment_method`, `nomor_kartu`, `nama_kartu`, `tanggal_kadaluarsa`, `cvv`, `email_paypal`, `jenis_bank`, `nomor_rekening`, `created_at`, `updated_at`) VALUES
(1, 8, NULL, 'paypal', NULL, NULL, NULL, NULL, 'app@gmail.com', 'bri', NULL, '2024-06-26 09:14:09', '2024-06-26 09:14:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock_quantity`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Jam Tangan', 'Jam tangan ini terbuat dari bahan semen yang kokoh dan tahan lama, memberikan tampilan yang unik dan modern. Desainnya yang minimalis membuatnya cocok untuk digunakan dalam berbagai kesempatan, baik formal maupun santai. Dengan penggunaan bahan semen, jam tangan ini tidak hanya tampil gaya, tetapi juga mendukung upaya pelestarian lingkungan dengan mengurangi penggunaan bahan plastik.', 300000.00, 50, 1, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(2, 'Anting-Anting', 'Anting-anting ini dibuat dari tutup botol bekas yang didaur ulang, memberikan sentuhan vintage dan kreatif pada penampilan Anda. Setiap pasang anting dibuat dengan tangan, memastikan keunikan dan kualitasnya. Pilihan warna dan desain yang bervariasi membuat anting-anting ini menjadi aksesori yang menarik dan penuh karakter, sekaligus mendukung praktik daur ulang yang ramah lingkungan.', 79000.00, 100, 1, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(3, 'Cincin', 'Cincin ini dirancang dari bahan-bahan daur ulang seperti logam bekas dan material lainnya yang ramah lingkungan. Dengan desain yang elegan dan modern, cincin ini cocok untuk digunakan sehari-hari maupun acara spesial. Menggunakan cincin ini berarti Anda turut berkontribusi dalam menjaga kelestarian lingkungan dengan mengurangi limbah.', 99899.00, 75, 1, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(4, 'Dompet', 'Dompet ramah lingkungan ini dibuat dari bahan daur ulang seperti kain bekas, plastik, dan kertas yang telah diproses ulang. Desainnya yang praktis dan stylish membuatnya cocok untuk digunakan sehari-hari. Dengan kompartemen yang cukup untuk kartu, uang kertas, dan koin, dompet ini tidak hanya membantu Anda mengorganisir barang-barang kecil, tetapi juga mendukung upaya pengurangan limbah plastik.', 200000.00, 80, 1, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(5, 'Gantungan Kunci', 'Gantungan kunci ramah lingkungan ini terbuat dari bahan-bahan daur ulang seperti plastik bekas dan logam. Desainnya yang unik dan menarik membuatnya menjadi aksesori yang ideal untuk kunci rumah, mobil, atau tas Anda. Mendukung produk ini berarti mendukung lingkungan yang lebih bersih dan hijau.', 30000.00, 150, 1, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(6, 'Gelang', 'Gelang ini dibuat dari bahan-bahan daur ulang seperti kain bekas dan manik-manik ramah lingkungan. Desainnya yang stylish dan modern membuatnya cocok untuk digunakan dalam berbagai kesempatan. Setiap pembelian gelang ini berkontribusi pada pengurangan limbah dan dukungan terhadap produk ramah lingkungan.', 50000.00, 120, 1, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(7, 'Gitar', 'Gitar ramah lingkungan ini dibuat dari bahan-bahan daur ulang dan kayu berkelanjutan. Desainnya yang elegan dan suara yang berkualitas membuatnya cocok untuk para musisi yang peduli terhadap lingkungan. Dengan menggunakan gitar ini, Anda turut serta dalam pelestarian alam dan pengurangan limbah.', 1500000.00, 30, 1, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(8, 'Kalung', 'Kalung ini terbuat dari tutup kaleng soda yang didaur ulang, memberikan tampilan yang kreatif dan unik. Setiap kalung dibuat dengan tangan, memastikan kualitas dan keunikannya. Pilihan desain yang bervariasi membuat kalung ini menjadi aksesori yang menarik dan ramah lingkungan.', 60000.00, 90, 1, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(9, 'Topi', 'Topi ini dibuat dari kertas daur ulang yang diproses sedemikian rupa untuk memberikan kekuatan dan daya tahan. Desainnya yang stylish dan nyaman membuatnya cocok untuk digunakan sehari-hari. Dengan membeli topi ini, Anda mendukung praktik daur ulang dan pelestarian lingkungan.', 80000.00, 70, 1, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(10, 'Aquarium', 'Aquarium ini dirancang untuk memberikan habitat yang ideal bagi ikan hias Anda dengan menggunakan bahan-bahan yang ramah lingkungan. Desainnya yang modern dan fungsional membuatnya cocok untuk ditempatkan di berbagai ruangan. Mendukung produk ini berarti mendukung lingkungan yang lebih bersih.', 500000.00, 25, 2, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(11, 'Cermin', 'Cermin ini dibuat dengan bahan-bahan daur ulang dan ramah lingkungan. Desainnya yang elegan dan fungsional membuatnya cocok untuk berbagai keperluan, mulai dari dekorasi rumah hingga penggunaan sehari-hari. Membeli cermin ini berarti Anda turut serta dalam menjaga kelestarian lingkungan.', 150000.00, 40, 2, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(12, 'Hanger Baju', 'Hanger baju ramah lingkungan ini terbuat dari bahan-bahan daur ulang seperti plastik dan kayu bekas. Desainnya yang kokoh dan fungsional membuatnya ideal untuk menggantung berbagai jenis pakaian. Dengan menggunakan hanger ini, Anda mendukung pengurangan limbah dan pelestarian lingkungan.', 20000.00, 200, 2, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(13, 'Jam Dinding', 'Jam dinding ini terbuat dari bahan-bahan daur ulang dan ramah lingkungan, memberikan tampilan yang unik dan modern. Desainnya yang fungsional dan stylish membuatnya cocok untuk berbagai ruangan. Membeli jam dinding ini berarti Anda turut serta dalam menjaga kelestarian lingkungan.', 100000.00, 60, 2, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(14, 'Karpet', 'Karpet ini dibuat dari bahan-bahan daur ulang seperti kain bekas dan plastik. Desainnya yang nyaman dan tahan lama membuatnya ideal untuk berbagai ruangan di rumah Anda. Mendukung produk ini berarti mendukung pengurangan limbah dan pelestarian lingkungan.', 300000.00, 20, 2, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(15, 'Keranjang Pakaian', 'Keranjang pakaian ramah lingkungan ini terbuat dari bahan-bahan daur ulang dan tahan lama. Desainnya yang fungsional dan stylish membuatnya ideal untuk digunakan di kamar mandi atau ruang cuci. Dengan membeli keranjang ini, Anda mendukung pengurangan limbah dan pelestarian lingkungan.', 80000.00, 50, 2, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(16, 'Kostum Adat', 'Kostum adat ini dibuat dari bahan-bahan ramah lingkungan dan didesain untuk menghormati dan melestarikan budaya lokal. Setiap kostum dibuat dengan tangan, memastikan keunikan dan kualitasnya. Mendukung produk ini berarti mendukung pelestarian budaya dan lingkungan.', 250000.00, 15, 2, '2024-06-27 02:46:50', '2024-06-27 02:46:50'),
(17, 'Lampu Hias', 'Lampu hias ini dibuat dari bahan-bahan daur ulang dan didesain untuk memberikan pencahayaan yang indah dan ramah lingkungan. Desainnya yang kreatif dan modern membuatnya cocok untuk berbagai ruangan. Membeli lampu hias ini berarti Anda turut serta dalam menjaga kelestarian lingkungan.', 120000.00, 35, 2, '2024-06-27 02:46:50', '2024-06-27 02:46:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `rating_value` double NOT NULL,
  `rating_count` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `store_name`, `rating_value`, `rating_count`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'EcoStore', 4.5, 120, 'jam tangan semen.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(2, 2, 'GreenFashion', 4.8, 80, 'anting-anting.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(3, 3, 'RecycledJewels', 4.7, 75, 'cincin.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(4, 4, 'EcoStore', 4.6, 60, 'dompet.jpg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(5, 5, 'GreenAccessories', 4.9, 150, 'gantungan kunci.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(6, 6, 'EcoStore', 4.4, 90, 'gelang.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(7, 7, 'RecycledMusic', 4.3, 50, 'gitar.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(8, 8, 'GreenFashion', 4.7, 110, 'kalung.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(9, 9, 'EcoStore', 4.5, 80, 'topi.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(10, 10, 'HomeEssentials', 4.6, 70, 'aquarium.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(11, 11, 'EcoStore', 4.4, 55, 'cermin.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(12, 12, 'HomeEssentials', 4.8, 100, 'hanger baju.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(13, 13, 'EcoStore', 4.5, 60, 'jam dinding.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(14, 14, 'HomeEssentials', 4.7, 40, 'karpet.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(15, 15, 'EcoStore', 4.6, 85, 'keranjang pakaian.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(16, 16, 'CulturalWear', 4.9, 20, 'kostum adat.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03'),
(17, 17, 'HomeEssentials', 4.8, 50, 'lampu hias.jpeg', '2024-06-27 02:48:03', '2024-06-27 02:48:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reset_password`
--

INSERT INTO `reset_password` (`id`, `user_id`, `token`, `created_at`) VALUES
(1, 1, 'e107bf67fff6be6e45e829f8a3bbe76f98929ff6d49cc150b09c37fc006d1dfd61380b67d324699127329b5b777843172b01', '2024-06-03 17:26:08'),
(2, 1, 'aa0a3afe66b1e84ed4d4f466710256a34394925896477686051a2c5ee965b24e317d38f7163d21a73142dcc166af3d47a9d4', '2024-06-03 17:59:59'),
(3, 1, 'fb279000f9dd822b01c48f8656e07f24f377c0142e030ab9849f467171bab0c3e7b43be9a4dabb336aead8dbe767ebb9b8ac', '2024-06-03 18:00:17'),
(4, 1, '02e31103ecdb898fbd8d1a20d9d610ea762ccc62aec138b41c5b588343547d3766d24d34462c1187facfe4deda471e63f8ad', '2024-06-03 18:00:19'),
(5, 1, 'd03c202b9f54f886b3b7ad0edd0d79d21cbd742f6245731b23e4140a063bbae78eaf879f87db0081528206ef9b4f2a32ff55', '2024-06-03 18:00:20'),
(6, 1, 'ddf18ddd2e88d41c47bc775cb96db1372e8cca8c47f9da12a6184209cb76c9564533bc732ffe39ca65195db22d301e3a7c32', '2024-06-03 18:00:20'),
(7, 1, '08f0e690497b6ea9f8f423c93c2a042b962afd95b160af3b8c38684241aca39a72b59b760b4a3b9c5cc618b777ced54787e5', '2024-06-03 18:00:20'),
(8, 1, '919d51731fb4ad02bee11bda78cedf55789a80b042cfc9fb37c85702723b8003ccbd32511b2002fed67acf4c4f7828bbd594', '2024-06-03 18:00:21'),
(9, 1, 'e6596e7a83681d0acdffaa23073229e8b62c55102dd63e6c157e9255fc8cfb5b241ffe0a406a40dce1e99fe8b19b631baa85', '2024-06-03 18:00:21'),
(10, 1, 'bcbc957e57c850ba6d723db521f63f4b389d54e21bdcf50a8daab094fe8bf922c632fad110bc4be0575f069e41b41f60c2e1', '2024-06-03 18:00:21'),
(11, 1, '32992c032348ca52a183a18eef1845c23bc2f2002fec14dfc3d4cb41e760b2bfb11c575738b0c09b928de28a55ac90a6b889', '2024-06-03 18:00:21'),
(12, 1, 'b4f97c537471b1a88b5a309a4be4549b27a1560614d36662cf301afcf86bb1f63793d66697a90a4d84e1408decfd493a1c72', '2024-06-03 18:00:22'),
(13, 1, 'b1755929b4600c7ce4c7c81e2929cb29d930f93c0308ec2d48144bca424957c9f0840480e16e724bb3bb7f96ec647e7f2965', '2024-06-03 18:00:22'),
(14, 1, '286fad8954e2459c3bf2d1c8b9229e845a19f8a7b1bce7e4015cb1dbea7542e0a95c88e3ae7ffdaef3a44f7bab7a7d3cd81a', '2024-06-03 18:00:22'),
(15, 1, 'b8ccb487d2a5e2abe69fdd7d6d9375325e5636f80ce59bc5e84c6dfd39501c9554468360553a59a27321a3f611be495f260f', '2024-06-03 18:00:23'),
(16, 1, '28f6ad45c6b715d7102c422cf6ca4bf644991f72ad10bff9f921c6332b90dfdf4570da8b3f35aad2695176e4d977ebcc75f8', '2024-06-03 18:00:30'),
(17, 1, '264702c8c53a2e59a4a59071dac17950118c833adb4e52eb4e6936e08e4f491457f65a2078c145e703470382221e8a4ad385', '2024-06-03 18:00:31'),
(18, 1, '04ca0337a69b751afa5155cc66a4be09c98b74e9909110af7c3eed26ed5601f65f9fc00865b3b662cea249e2562fd2b7b490', '2024-06-03 18:00:41'),
(19, 1, '903234437985b9ae29832cc337e65ab6d4d8ba4eaf14433bee21f49ae3303bc780adda548abce9ca0e4013905c13fa849368', '2024-06-03 18:07:30'),
(20, 1, '38f0733ed2a9276185a4a8fb5b79e4ad0e90a298dbb7edb165783e127bd6e917a68cd8b187735a5cc787909ddcf43cceb740', '2024-06-03 18:07:56'),
(21, 1, '08452f3b490a211e358db93654c000aa906bd89e55d03ac15babb7853963632f23ce1f8635d232b2ba6183b448d5350d21f6', '2024-06-03 18:08:56'),
(22, 1, '7fc30e96de4d9c918af089b365ce9daf1b1466b94bfcafb9bb40edb6ad15f4bf707a5f723f04a84a83fc0aa2c46701b62b8a', '2024-06-03 18:18:41'),
(23, 1, 'e512b7d3aec235658d64a9468aa8dd07131ec116142be796e838c5779ed6ca3fbfbf42c23eb92cea075d072f96638784ddf1', '2024-06-03 18:18:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BGbX7WVVkxXpYJh1fmevaCeS4kNmZ11R5zMWcpPU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaUdhc2Vsc3RyanlnMGlvWUdFUnNnSlI1NkZVd1JTSUNsbG9TeDBrTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlIjt9fQ==', 1719566693);

-- --------------------------------------------------------

--
-- Struktur dari tabel `shipping`
--

CREATE TABLE `shipping` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_address` text NOT NULL,
  `shipping_method` varchar(255) NOT NULL,
  `shipping_cost` decimal(10,2) NOT NULL,
  `shipping_status` varchar(255) NOT NULL,
  `shipping_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `last_online` timestamp NULL DEFAULT NULL,
  `ratings` int(11) DEFAULT NULL,
  `followers` int(11) DEFAULT NULL,
  `joined` timestamp NULL DEFAULT NULL,
  `response_rate` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stores`
--

INSERT INTO `stores` (`id`, `name`, `avatar`, `last_online`, `ratings`, `followers`, `joined`, `response_rate`, `created_at`, `updated_at`) VALUES
(1, 'EcoStore', 'avatar.jpg', '2024-06-28 02:00:00', 5, 1200, '2023-01-14 16:00:00', 90, '2024-06-27 21:34:04', '2024-06-27 21:34:04'),
(2, 'GreenFashion', 'avatar.jpg', '2024-06-28 03:30:00', 5, 2800, '2022-09-04 16:00:00', 95, '2024-06-27 21:34:04', '2024-06-27 21:34:04'),
(3, 'RecycledJewels', 'avatar.jpg', '2024-06-28 01:45:00', 4, 800, '2023-07-19 16:00:00', 88, '2024-06-27 21:34:04', '2024-06-27 21:34:04'),
(4, 'GreenAccessories', 'avatar.jpg', '2024-06-28 04:15:00', 5, 1500, '2023-03-09 16:00:00', 92, '2024-06-27 21:34:04', '2024-06-27 21:34:04'),
(5, 'HomeEssentials', 'avatar.jpg', '2024-06-28 00:30:00', 5, 2000, '2022-11-17 16:00:00', 94, '2024-06-27 21:34:04', '2024-06-27 21:34:04'),
(6, 'RecycledMusic', 'avatar.jpg', '2024-06-28 02:30:00', 4, 1600, '2023-05-24 16:00:00', 89, '2024-06-27 21:34:04', '2024-06-27 21:34:04'),
(7, 'CulturalWear', 'avatar.jpg', '2024-06-28 03:00:00', 5, 300, '2023-09-11 16:00:00', 96, '2024-06-27 21:34:04', '2024-06-27 21:34:04'),
(8, 'Fashion Trend', 'avatar.jpg', '2024-06-28 02:45:00', 5, 1800, '2023-02-27 16:00:00', 91, '2024-06-27 21:34:14', '2024-06-27 21:34:14'),
(9, 'Gadget World', 'avatar.jpg', '2024-06-28 01:15:00', 5, 2500, '2022-08-14 16:00:00', 97, '2024-06-27 21:34:14', '2024-06-27 21:34:14'),
(10, 'Books Galore', 'avatar.jpg', '2024-06-28 04:30:00', 4, 1000, '2023-06-09 16:00:00', 86, '2024-06-27 21:34:14', '2024-06-27 21:34:14'),
(11, 'Home Decor Plus', 'avatar.jpg', '2024-06-28 00:00:00', 4, 1300, '2023-04-04 16:00:00', 88, '2024-06-27 21:34:14', '2024-06-27 21:34:14'),
(12, 'Sports Zone', 'avatar.jpg', '2024-06-28 03:45:00', 5, 2200, '2022-10-19 16:00:00', 93, '2024-06-27 21:34:14', '2024-06-27 21:34:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL DEFAULT 'users/default-avatar.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `birth_place`, `birth_date`, `gender`, `email`, `phone`, `password`, `profile_picture`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'Andi Magfirah Maqbul', 'andif12', 'Bone', '2005-02-18', 'Perempuan', 'andifff12@gmail.com', '085255196113', '$2y$12$4GIaQcbG8Vi0Ke6EiYqkgOzTp9VOjKf2870cSPWHNImD0KllgVafG', 'users/default-avatar.jpg', '2024-06-24 15:17:04', '2024-06-24 15:17:04', NULL),
(2, 'Andi Magfirah', 'def', 'Pinrang', '2024-05-31', 'female', 'andif@gmail.com', '085223456789', '$2y$12$6gebwSd3t.mV3bcx.4hUJ.r9DEIHhlBq6J/XEXk5Rn0/CR5j/SFfu', 'users/default-avatar.jpg', '2024-06-24 16:11:43', '2024-06-24 16:11:43', NULL),
(3, 'asdfgbh', 'aaa', 'Pinrang', '2024-06-07', 'male', 'sdfgh@gmail.com', '2345678765', '$2y$12$W9sLihL0OfRHnCF6XUfUMO9RNnyb4t7StPgWaOHOe9xU6fz1Pyxzu', 'users/default-avatar.jpg', '2024-06-24 17:57:51', '2024-06-24 17:57:51', NULL),
(4, 'User Y', 'user_y', 'Pinrang', '2024-06-05', 'male', 'user_y@gmail.com', '0854567890', '$2y$12$LDtCB3CJN0kjbkeZ6CMbnOjoYLbTE.fXtib3NIoky/vWVjOcGPCtO', 'users/default-avatar.jpg', '2024-06-25 11:18:23', '2024-06-25 11:18:23', NULL),
(7, 'wertyui', 'apadi', 'Pinrang', '2024-06-21', 'female', 'apadihh@gmail.com', '23456789876', '$2y$12$H9ya7OfBOmT969bj5AhajuSpGxl4rsOWxNCDn6RAUFZPbl11Do7Q.', 'users/default-avatar.jpg', '2024-06-25 18:56:42', '2024-06-25 18:56:42', NULL),
(8, 'apalahhh', 'app', 'Parepare', '2006-07-05', 'male', 'app@gmail.com', '0854567897999', '$2y$12$g/3i4PX6y/HsqXUItsK5/.Iq8Xok7jMrapIsBu2Co9wmhJxAcX7ZK', 'mall/img/Pengguna/avatar.jpg', '2024-06-26 01:00:55', '2024-06-26 07:26:26', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wishlist_items`
--

CREATE TABLE `wishlist_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wishlist_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_items_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `flash_sale_products`
--
ALTER TABLE `flash_sale_products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_order_id_foreign` (`order_id`);

--
-- Indeks untuk tabel `payment_options`
--
ALTER TABLE `payment_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_options_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_details_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipping_order_id_foreign` (`order_id`);

--
-- Indeks untuk tabel `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping_cart_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indeks untuk tabel `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `wishlist_items`
--
ALTER TABLE `wishlist_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlist_items_wishlist_id_foreign` (`wishlist_id`),
  ADD KEY `wishlist_items_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_pengguna`
--
ALTER TABLE `data_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `flash_sale_products`
--
ALTER TABLE `flash_sale_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `payment_options`
--
ALTER TABLE `payment_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `wishlist_items`
--
ALTER TABLE `wishlist_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `shopping_cart` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `payment_options`
--
ALTER TABLE `payment_options`
  ADD CONSTRAINT `payment_options_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `shipping_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `shopping_cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wishlist_items`
--
ALTER TABLE `wishlist_items`
  ADD CONSTRAINT `wishlist_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlist_items_wishlist_id_foreign` FOREIGN KEY (`wishlist_id`) REFERENCES `wishlists` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
