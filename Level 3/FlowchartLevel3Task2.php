<?php

$angka1 = 50;
$angka2 = 100;
$angka3 = 150;
if ($angka1 > $angka2) {
    if ($angka2 > $angka3) {
        $tengah = $angka2;
    } else {
        if ($angka1 > $angka3) {
            $tengah = $angka3;
        } else {
            $tengah = $angka1;
        }
    }
} else {
    if ($angka1 > $angka3) {
        $tengah = $angka1;
    } else {
        if ($angka2 > $angka3) {
            $tengah = $angka3;
        } else {
            $tengah = $angka2;
        }
    }
}
echo "Bilangan Tengah Dari $angka1,  $angka2, $angka3 Adalah : " . $tengah . PHP_EOL;
?>
