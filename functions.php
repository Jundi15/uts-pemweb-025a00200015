<?php
declare(strict_types=1);

function formatRupiah(int $angka): string
{
    return "Rp " . number_format($angka, 0, ',', '.'); //[cite: 58, 60]
}

// Percabangan dengan match(true) gaya PHP 8[cite: 60, 86, 87]
function statusStok(int $stok): string
{
    return match (true) {
        $stok === 0 => "Habis",
        $stok <= 2  => "Menipis",
        default     => "Tersedia",
    };
}

// Nama kelas CSS BEM style diturunkan dari status[cite: 61, 64]
function kelasBadge(string $status): string
{
    return match ($status) {
        "Habis"   => "badge badge--habis",
        "Menipis" => "badge badge--menipis",
        default   => "badge badge--aman",
    };
}

function hitungNilaiStok(array $produk): int
{
    $total = 0;
    foreach ($produk as $item) {
        $total += $item["harga"] * $item["stok"]; //[cite: 61]
    }
    return $total;
}

// Saring data dengan fungsi bawaan array_filter dan arrow function[cite: 55, 61]
function filterKondisi(array $produk, string $kondisi): array
{
    if ($kondisi === "Semua") {
        return $produk;
    }
    return array_filter($produk, fn(array $p): bool => $p["kondisi"] === $kondisi);
}

// Keamanan cetak ke HTML[cite: 61]
function e(string $teks): string
{
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}