<?php

$nilai1 = 10;
$nilai2 = 70;
$nilai3 = 98;
$nilai4 = 76;
if ($nilai1 > $nilai2) {
    if ($nilai1 > $nilai3) {
        if ($nilai1 > $nilai4) {
            echo $nilai1 . " Nilai1 AngkaTerbesar";
        } else {
            echo $nilai4 . " Nilai4 AngkaTerbesar";
        }
    } else {
        if ($nilai3 > $nilai4) {
            echo $nilai3 . " Nilai3 AngkaTerbesar";
        } else {
            echo $nilai4 . " Nilai4 AngkaTerbesar";
        }
    }
} else {
    if ($nilai2 > $nilai3) {
        if ($nilai2 > $nilai4) {
            echo $nilai2 . " Nilai2 AngkaTerbesar";
        } else {
            echo $nilai4 . " Nilai4 AngkaTerbesar";
        }
    } else {
        echo $nilai3 . " Nilai3 AngkaTerbesar";
    }
}
?>