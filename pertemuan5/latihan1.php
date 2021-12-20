<?php
// Array = sebuah variabel yg bisa menampung lebih dari 1 nilai
// elemen pada array boleh memiliki tipe data yang berbeda

$bulan = ["Januari", "Februari", "Maret"];


// menampilkan array
// var_dump(), Print_r()

// var_dump($bulan);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $bulan[2];

// menambahkan elemen baru pad array
var_dump($bulan);
$bulan[] = "Kamis";

echo "<br>";
var_dump($bulan);
?>