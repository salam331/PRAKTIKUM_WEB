<?php
// 1. Segitiga Sama Sisi
echo "1. Segitiga Sama Sisi\n";
$tinggi = 5; // Ubah tinggi segitiga sesuai kebutuhan
for ($i = 1; $i <= $tinggi; $i++) {
  // Hitung spasi di awal baris
  $spasi = $tinggi - $i;
  for ($j = 1; $j <= $spasi; $j++) {
    echo " ";
  }
  // Cetak bintang pada baris ke-i
  for ($k = 1; $k <= 2 * $i - 1; $k++) {
    echo "*";
  }
  echo "\n";
}
// 2. Segitiga Sama Sisi Terbalik
echo "\n2. Segitiga Sama Sisi Terbalik\n";
for ($i = $tinggi; $i >= 1; $i--) {
  // Hitung spasi di awal baris
  $spasi = $tinggi - $i;
  for ($j = 1; $j <= $spasi; $j++) {
    echo " ";
  }
  // Cetak bintang pada baris ke-i
  for ($k = 1; $k <= 2 * $i - 1; $k++) {
    echo "*";
  }
  echo "\n";
}
?>
