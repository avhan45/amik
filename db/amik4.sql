-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 15 Sep 2022 pada 05.32
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amik4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Sosialisasi SMAN 1 Wawonii Tengah', 'Sosialisasi SMA Negeri 1 Wawonii Tengah', 'berita/dc1hUa1QkjBKR4PardFgag4vPz6zBFOTsBnjYjrb.jpg', '2022-09-14 01:25:34', '2022-09-14 01:49:27'),
(2, 'Sosialisasi SMAN 1 Wawonii Barat', 'Sosialisasi SMAN 1 Wawonii Barat', 'berita/Ex8SrGLWKLc4OJHirqZzDUeTLpjVmuKqOgcf9xgj.jpg', '2022-09-14 01:49:07', '2022-09-14 01:49:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Wisuda Angkatan 2016', 'gallery/7Rdvsj9gG2NJSIxreVir5Ui7yKNoKlNNCS1bevhf.jpg', '2022-09-14 01:20:52', '2022-09-14 01:20:52'),
(2, 'Wisuda', 'gallery/sPeXfmmu5DIjQaE1dJWKVPemUXhsG2gNnalTclPG.jpg', '2022-09-14 01:21:15', '2022-09-14 01:21:15'),
(5, 'Wisuda', 'gallery/TK7V8CaexyroiHTuiJUFihdmOHC8G0VXG289bZj0.jpg', '2022-09-14 01:22:12', '2022-09-14 01:22:12'),
(6, '1', 'gallery/fMaozHA19YFVqmguoZmsGzFd4EykcKK32nPcAKYR.jpg', '2022-09-14 01:22:23', '2022-09-14 01:22:23'),
(7, '2', 'gallery/IZbIb7LlOOqnoY15T99MeFDHOQrI9BSo3RiI9F2R.jpg', '2022-09-14 01:22:40', '2022-09-14 01:22:40'),
(8, 'Sosialisasi', 'gallery/j3WJPcjbFJLmszAgfGj3Uy0WUk4SA08vLuQUetvU.jpg', '2022-09-14 01:22:59', '2022-09-14 01:22:59'),
(9, 'Sosialisasi', 'gallery/o0WuvHAm5jtCteq6WUetxMNDGQvABbqjmbrBr5Np.jpg', '2022-09-14 01:23:09', '2022-09-14 01:23:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(48, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(49, '2022_08_20_123652_create_user_table', 1),
(50, '2022_08_21_040502_create_slider_table', 1),
(51, '2022_08_21_062505_create_profile_table', 1),
(52, '2022_08_21_063218_create_setting_table', 1),
(53, '2022_08_21_071721_create_pendidikan_table', 1),
(54, '2022_08_21_075357_create_berita_table', 1),
(55, '2022_08_21_090239_create_pengumuman_table', 1),
(56, '2022_08_21_183230_create_gallery_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_pendidikan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `kd_pendidikan`, `jurusan`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'MI', 'Manajemen Informatika', 'pendidikan/ualzyR8ZircslEVNGjaK4DkEVqU9yHCr1ZwM9ykB.jpg', '2022-09-14 01:17:06', '2022-09-14 01:17:06'),
(2, 'KA', 'Komputer Akuntansi', 'pendidikan/eXYGsg0OuMdcUCyno46V1veubPVBFrYTn7inQ50U.jpg', '2022-09-14 01:18:42', '2022-09-14 01:18:42'),
(3, 'TK', 'Teknik Komputer', 'pendidikan/i6FAfygIpu0DEmUWPpkh8m8kBrCZYdql3dPCqICf.jpg', '2022-09-14 01:20:08', '2022-09-14 01:20:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Stuktur Organisasi', '1. Ketua Yayasan Global SDM\r\n    2. Direktur \r\n    3. Pembantu Direktur \r\n    4. Ketua Jurusan Manajemen Informatika \r\n    5. Lembaga Penjamin Mutu \r\n    6. Kepala Laboratorium \r\n    7. Kepaka Perpustakaan \r\n    8. Administrasi dan Keuangan', 'pengumuman/6Tbk4AfexKMayIcjKk2u0URxQIyEJCUPT1yXEiFg.png', '2022-09-14 01:51:47', '2022-09-14 01:51:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Visi', '<p>Menjadi perusahaan yang terdepan di bidang teknologi informasi dan komunikasi yang berpengalaman dan berkualitas.</p>', NULL, NULL),
(2, 'Misi', '<p>Menjadi perusahaan yang terdepan di bidang teknologi informasi dan komunikasi yang berpengalaman dan berkualitas.</p>', NULL, NULL),
(3, 'Sejarah', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Akademi Manajemen Informatika dan Komputer (AMIK) Global Kendari yang beralamat di Jl. Antero Hamra Kec. Kadia Provinsi Sulawesi Tenggara adalah pendidikan tinggi yang menyelenggarakan profesional jenjang Diploma Tiga (D3) dengan gelar Ahli Madya (A.Md). Akadaemi Manajemen Informatika dan Komputer (AMIK) Global Kendari mendapatkan status terdaftar melalui Surat Keputusan Menteri Pendidikan dan Kebudayaan Nomor 046/D/O/1999 dengan nama lengkap Akademi Manajemen Informatika dan Komputer Global Kendari.&nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Akademi Manajemen Informatika dan Komputer Global Kendari memiliki 3 (tiga) jurusan yaitu :&nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">1. Manajemen Informatika</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">2. Komputer Akuntansi</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">3. Teknik Komputer</span></div>', NULL, '2022-09-14 01:15:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_situs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `nama_situs`, `lengkap`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'AMIK GLOBAL', 'Akademi Manajemen Informatika & Komputer Global Kendari', 'logo/dtU8k8xxzZZffm4HbHtJdOvPhyddqzcxiNUjACp3.png', NULL, '2022-08-21 12:22:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `judul`, `gambar`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, 'Wisuda 2019', 'slider/weotfvVQeWJJ21dyAHc0G1WMGVj3SqdIW5sCLSwh.jpg', 'Senat Terbuka', '2022-09-14 01:06:05', '2022-09-14 01:59:01'),
(5, 'Wisuda', 'slider/A8mqK42TAsghvj7N1xHXaUCOXdhD1G6fNW8BOHCu.jpg', 'Wisuda AMIK GLOBAL angkatan 2016', '2022-09-14 01:08:06', '2022-09-14 01:08:06'),
(6, 'Senat Terbuka', 'slider/SBpxo4ciFDH4v6v0ehLtEtwfGNOQbEbyfgUp6Wrk.jpg', 'Wisuda AMIK GLobal Angkatan 2016', '2022-09-14 01:09:44', '2022-09-14 01:09:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$TUlDBdiuKBrR7gMdEuBYH.JMzr9EFlq9kLgAALHrW9hMc.cO6LMFC', '2022-08-21 12:18:21', '2022-08-21 13:06:24'),
(2, 'user', '$2y$10$d5mB4J8OXTyG9DsOHmfci./fKFd1XGTIdDeYYk4GrdN2gsxSl/m5C', NULL, '2022-08-21 13:45:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pendidikan_kd_pendidikan_unique` (`kd_pendidikan`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
