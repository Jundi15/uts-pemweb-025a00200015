<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - MJAPHONESTORE</title>
    
    <!-- Mengambil font modern dari Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="kepala">
        <div class="wadah-judul">
            <!-- Tag gambar diperbaiki dan dipindah ke dalam header -->
            <img src="assets/logo.png" alt="Logo MJAPHONESTORE" class="logo" onerror="this.style.display='none'">
            <h1>MJAPHONESTORE</h1>
        </div>
        <nav class="filter">
            <a href="index.php" class="aktif">Profil</a>
            <a href="katalog.php">Katalog Smartphone</a>
        </nav>
    </header>

    <main class="grid-profil">
        <section class="box-profil">
            
            <div class="kartu-profil">
                <div class="header-kartu">
                    <h2>Tentang Kami</h2>
                </div>
                <div class="isi-kartu">
                    <p><strong>MJAPHONESTORE</strong> melayani Jual/Beli, Tukar Tambah, dan Tukar Turah Android ataupun iPhone Kamu. Kami memastikan setiap perangkat, mulai dari unit baru hingga unit bekas, melewati tahap <em>Quality Control</em> yang ketat.</p>
                </div>
            </div>

            <div class="kartu-profil">
                <div class="header-kartu">
                    <h2>Profil Pengembang</h2>
                </div>
                <div class="isi-kartu list-biodata">
                    <div class="baris-data">
                        <span class="label">Nama</span>
                        <span class="nilai">Muhammad Jundi Assalam</span>
                    </div>
                    <div class="baris-data">
                        <span class="label">NIM</span>
                        <span class="nilai">025A00200015</span>
                    </div>
                    <div class="baris-data">
                        <span class="label">Program Studi</span>
                        <span class="nilai">Informatika</span>
                    </div>
                    <div class="baris-data">
                        <span class="label">Fakultas</span>
                        <span class="nilai">Teknik</span>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <footer class="kaki">
        <p>&copy; <?= date("Y") ?> MJAPHONESTORE. All rights reserved.</p>
    </footer>
</body>
</html>