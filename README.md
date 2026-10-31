# MJAPHONESTORE - Katalog Web

## 1. Identitas
- **Nama:** Muhammad Jundi Assalam
- **NIM:** 025A00200015
- **Matakuliah:** Pemrograman Web

## 2. Deskripsi Singkat
Proyek ini adalah sebuah website sederhana bernama MJAPHONESTORE yang berfokus pada penjualan dan tukar tambah smartphone baru maupun bekas. Sistem ini menampilkan profil toko serta katalog produk dinamis yang merender data spesifikasi, harga, dan ketersediaan stok secara otomatis dari data array PHP.

## 3. Cara Menjalankan di Localhost
1. Pastikan aplikasi web server lokal seperti XAMPP atau Laragon sudah terpasang dan service Apache berjalan.
2. Simpan atau kloning folder proyek ini ke dalam direktori root server (`htdocs` untuk XAMPP atau `www` untuk Laragon).
3. Buka web browser dan akses URL: `http://localhost/uts-pemweb-025a00200015/index.php`

## 4. Daftar Fitur beserta File dan Fungsi
- **Navigasi & Tampilan Profil Toko:** Ditangani oleh `index.php` dan `style.css` untuk tata letak visualnya.
- **Katalog Produk Dinamis:** Ditangani oleh `katalog.php` dengan merender array `$daftarProduk` dari `data.php`.
- **Filter Kondisi Smartphone (Semua/Baru/Bekas):** Ditangani oleh antarmuka di `katalog.php` yang memanggil fungsi `filterKondisi()` di `functions.php`.
- **Indikator Status Stok (Habis/Menipis/Tersedia):** Ditangani oleh fungsi `statusStok()` dan diwarnai dengan fungsi `kelasBadge()` di `functions.php`.
- **Kalkulasi Total Aset Stok:** Ditangani oleh fungsi `hitungNilaiStok()` di `functions.php` yang mengalikan harga dan stok.
- **Keamanan XSS & Format Uang:** Ditangani oleh fungsi `e()` (pembungkus htmlspecialchars) dan `formatRupiah()` di `functions.php`.

## 5. Daftar Fungsi Array Bawaan yang Dipakai
- `in_array()`: Digunakan di `katalog.php` untuk memvalidasi apakah input *query string* kondisi dari URL benar-benar ada di dalam array `$daftarKondisi` yang diizinkan.
- `array_filter()`: Digunakan ganda; di `functions.php` untuk menyaring produk berdasarkan kondisi (Baru/Bekas), dan di `katalog.php` untuk mencari produk yang stoknya bernilai 0.
- `count()`: Digunakan di `katalog.php` untuk menghitung total keseluruhan produk di dalam katalog dan menghitung jumlah item produk yang stoknya habis.

## 6. Tangkapan Layar
### Halaman Profil Utama
![Halaman Profil](Profil.png)

### Halaman Katalog Smartphone
![Halaman Katalog](Katalog.png)

## 7. Sumber Referensi dan Catatan Pemakaian AI
- **Sumber Referensi:** Dokumentasi resmi PHP (php.net) dan panduan CSS modern.
- **Catatan Pemakaian AI:** Saya menggunakan AI (Google Gemini) untuk membantu menyempurnakan tata letak CSS dan mencari letak syntax error pada pemanggilan gambar. Saya memeriksa kode yang dihasilkan dengan mengujinya di localhost, mereview alur data pada blok foreach, dan memodifikasi sendiri nilai parameter pada fungsi match() agar sesuai dengan standar status stok toko saya.