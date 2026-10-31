<?php
declare(strict_types=1);

require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

$daftarKondisi = ["Semua", "Baru", "Bekas"];
$kondisiDipilih = $_GET["kondisi"] ?? "Semua";

if (!in_array($kondisiDipilih, $daftarKondisi, true)) {
    $kondisiDipilih = "Semua"; // Tolak dari URL tidak valid
}

$produkTampil = filterKondisi($daftarProduk, $kondisiDipilih);
$jumlahHabis = count(array_filter($daftarProduk, fn(array $p): bool => $p["stok"] === 0));
$nilaiStok = hitungNilaiStok($daftarProduk);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog - <?= e($namaToko) ?></title>
    
    <!-- Mengambil font modern dari Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="kepala">
        <div class="wadah-judul">
            <img src="assets/logo.png" alt="Logo MJAPHONESTORE" class="logo" onerror="this.style.display='none'">
            <h1>Katalog <?= e($namaToko) ?></h1>
        </div>
        
        <!-- Informasi aset dibuat lebih elegan -->
        <div class="ringkasan-katalog">
            <div class="chip-info">
                <span>📦 <?= count($daftarProduk) ?> Produk (<?= $jumlahHabis ?> Habis)</span>
            </div>
            <div class="chip-info aset">
                <span>💰 Nilai Aset Stok: <strong><?= formatRupiah($nilaiStok) ?></strong></span>
            </div>
        </div>
        
        <nav class="filter">
            <a href="index.php">Profil</a>
            <?php foreach ($daftarKondisi as $kond): ?>
                <a href="?kondisi=<?= urlencode($kond) ?>"
                   class="<?= $kond === $kondisiDipilih ? 'aktif' : '' ?>">
                   <?= e($kond) ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </header>

    <main class="grid">
        <?php if (count($produkTampil) === 0): ?>
            <div class="kosong">
                <p>Oops! Belum ada smartphone di kondisi ini.</p>
            </div>
        <?php endif; ?>

        <?php foreach ($produkTampil as $produk): ?>
            <?php $status = statusStok($produk["stok"]); ?>
            <article class="kartu">
                <!-- Header Kartu: Memisahkan Badge Status & SKU -->
                <div class="header-kartu-produk">
                    <span class="badge <?= kelasBadge($status) ?>"><?= $status ?></span>
                    <span class="sku">#<?= e($produk["kode"]) ?></span>
                </div>
                
                <!-- BAGIAN YANG DITAMBAHKAN: Tag Gambar Produk -->
                <!-- Jika "gambar" belum diisi di data.php, otomatis pakai placeholder -->
                <img src="<?= e($produk["gambar"] ?? 'Gambar/placeholder.png') ?>" 
                     alt="<?= e($produk["merk"] . ' ' . $produk["tipe"]) ?>" 
                     class="gambar-produk" 
                     onerror="this.src='Gambar/placeholder.png'">
                
                <h2><?= e($produk["merk"] . " " . $produk["tipe"]) ?></h2>
                
                <p class="kategori">
                    Kondisi: <span class="highlight-kondisi"><?= e($produk["kondisi"]) ?></span> | 
                    Status: <span class="highlight-kondisi"><?= e($produk["Status"]) ?></span>
                </p>
                
                <p class="harga"><?= formatRupiah($produk["harga"]) ?></p>
                
                <!-- Footer Kartu -->
                <div class="footer-kartu-produk">
                    <p class="stok">Tersedia: <strong><?= $produk["stok"] ?></strong> unit</p>
                </div>
            </article>
        <?php endforeach; ?>
    </main>

    <footer class="kaki">
        <p>&copy; <?= date("Y") ?> MJAPHONESTORE. All rights reserved.</p>
    </footer>
</body>
</html>