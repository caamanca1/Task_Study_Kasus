<?php
$angka = array();
for ($i = 0; $i <= 100; $i++) {
  $angka[] = $i;
}

$angkaterbesar = max($angka);

echo "Angka Terbesar Dari  Bilangan Adalah:  " . $angkaterbesar;
?>