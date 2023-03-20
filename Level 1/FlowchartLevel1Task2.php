<?php
$nilai1 = 1;
$nilai2 = 2;
$nilai3 = 3;

if ($nilai1>$nilai2){
  if($nilai1>$nilai3){
    echo "nilai 1 adalah angka terbesar ". $nilai1;
  }
  else{
    echo "Nilai 3 adalah angka terbesar ". $nilai3;
  }
}else if($nilai2 > $nilai3){
  echo "nilai2 Angka terbesar ". $nilai2;
}else{
  echo "nilai3 angka terbesar ". $nilai3;
}
?>