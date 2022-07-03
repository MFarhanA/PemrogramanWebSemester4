<?php

$namaDepan = "Ibnu"; # pakai tanda petik dua
$namaBelakang = 'Jakaria'; # pakai tanda petik satu

# menggabungkan dua variabel dengan tanda
# petik dua
$namaLengkap = "{$namaDepan} {$namaBelakang}";

# anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

# [Tampilkan Data]
# kita bisa memasukan variabel lain jika menggunakan tanda petik dua
echo "Nama Depan: {$namaDepan} <br>";
# ada pun jika pakai tanda petik satu, kita tidak bisa memasukan variabel
# di dalam string akan tetapi menggabungkan dengan operator titik (.)
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;
?>