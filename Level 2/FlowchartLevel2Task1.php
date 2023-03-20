<?php
$angka = array();
for ($i = 51; $i <= 150; $i++) {
  $angka[] = $i;
}

$angkaterbesar = max($angka);


echo "Angka Terbesar Dari  Bilangan Adalah:  " . $angkaterbesar;
?>