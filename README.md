# MJAPHONESTORE - Katalog Smartphone Dinamis

**1. Identitas**
* Nama: Muhammad Jundi Assalam
* NIM: 025a00200015
* Mata Kuliah: Pemgrograman Web

**2. Deskripsi Proyek**
Proyek ini adalah Website Profil & Katalog Smartphone Dinamis berbasis PHP untuk memenuhi UTS Pemrograman Web[cite: 4]. MJAPHONESTORE menampilkan inventaris smartphone dengan fitur filter kondisi produk, perhitungan nilai aset, dan penentuan status ketersediaan stok secara otomatis.

**3. Cara Menjalankan di Localhost**
1. Salin atau *clone* folder repositori ini ke dalam folder `www/`.
2. Nyalakan modul Apache pada Laragon.
3. Buka peramban (browser) dan akses URL: `http://localhost/uts-pemweb-025a00200015/index.php`

**4. Daftar Fitur dan Penanganannya**
* **Filter Kondisi HP**: Ditangani oleh halaman `katalog.php` dengan memanggil fungsi buatan `filterKondisi()` yang berada di file `functions.php`.
* **Penentuan Status Stok otomatis**: Ditangani oleh fungsi buatan `statusStok()` menggunakan `match(true)` di file `functions.php`.
* **Pewarnaan Badge CSS Dinamis**: Ditangani oleh fungsi buatan `kelasBadge()` di file `functions.php`.
* **Perhitungan Total Nilai Aset**: Ditangani oleh fungsi buatan `hitungNilaiStok()` menggunakan iterasi di file `functions.php`.
* **Keamanan Render HTML**: Ditangani oleh fungsi pembungkus `e()` (implementasi `htmlspecialchars`) di `functions.php` untuk mencegah XSS.

**5. Daftar Fungsi Array Bawaan yang Dipakai**
* `in_array()`: Digunakan untuk memvalidasi parameter kategori dari URL dengan daftar putih (whitelist) untuk mencegah input data yang ilegal.
* `array_filter()`: Digunakan untuk menyaring data inventaris berdasarkan kondisi smartphone, serta untuk menghitung jumlah item yang stoknya habis.
* `count()`: Digunakan untuk menghitung total seluruh produk di data awal, total produk setelah difilter, dan mengecek apakah array kosong untuk menampilkan pesan peringatan.

**6. Tangkapan Layar**
*(Pastikan gambar sudah ada di dalam folder screenshots/)*
![Halaman Profil](screenshots/profil.png)
![Halaman Katalog](screenshots/katalog.png)

**7. Referensi dan Catatan Pemakaian AI**
* **Referensi**: Modul Hands-on Pertemuan 7 Pemrograman Web (penerapan *Clean Code*, fungsi `match(true)`, dan pemisahan array multi-dimensi).
* **Bantuan AI**: Menggunakan AI untuk merombak struktur awal agar 100% mematuhi kaidah *Clean Code* dari Modul Hands-on Pertemuan 7 serta menyusun pemisahan file logika bisnis ke `functions.php`. Seluruh baris kode telah dipelajari, dipahami, dan siap untuk diuji pada sesi demo.