<?php
$sisiA = 5;
$sisiB = 10;
$sisiC = 35;
if ($sisiA == $sisiB && $sisiB == $sisiC) {
      echo "Sisi A = $sisiA " . " Sisi B = $sisiB " . "Sisi C = $sisiC" . "<br>";
      echo "Segitiga Sama Sisi" . PHP_EOL; //PHP_EOL, Fungsinya: Simbol 'End Of Line' yang benar untuk platform ini
} else {
    if ($sisiA == $sisiB || $sisiB == $sisiC || $sisiA == $sisiC) {
      echo "Sisi A = $sisiA " . " Sisi B = $sisiB " . "Sisi C = $sisiC" . "<br>";
      echo "Segitiga Sama Kaki" . PHP_EOL;
    } else {
      echo "Sisi A = $sisiA " . " Sisi B = $sisiB " . "Sisi C = $sisiC" . "<br>";
      echo "Segitiga Sembarang" . PHP_EOL;
    }
  }
?>