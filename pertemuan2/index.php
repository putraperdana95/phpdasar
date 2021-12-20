<?php 
// ini adalah komentar satu baris

/* ini komentar untuk banyak baris
seperti ini*/


// Pertemuan 2 PHP
// Syntak PHP

// Standart Output
// echo, print
// print_r (mencetak isis array)
//  var_dump (melihat isi dari variabel)

// penulisan syntak php
// 1. PHP didalam html
// 2. HTML didalam PHP

// Variabel dan tipe data
// variabel (tidak boleh diawali angka)
// $nama = "Putra Perdana";

// operator
// aritmatika
// kabataku %

// $x = 10;
// $y = 20;

// echo $x * $y;

// // Penggabung String / concat
// // .

// $nama_depan = "Putra";
// $Nama_belakang = "Perdana";

// echo $nama_depan . " " . $Nama_belakang

// Assigment
// =, +=, -+, *=, %=, .=, /=

$nama = "Putra";
$nama .= " ";
$nama .= "Perdana";

echo $nama

// Perbandingan
// >, <, <=, >=, ==

// var_dump(1 > 5);


// Idendtitas
// ===, !==
// var_dump(1 === "1");


// Logic
// &&, ||, !
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Selamat Datang <?php echo $nama; ?> </h1>
    <p> <?php echo "ini adalah pragarf"; ?> </p>


    <?php
        echo "<h2> ini sub judul </h2>";
    ?>
</body>
</html>