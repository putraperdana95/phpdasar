<?php
// variabel score / lingkup variabel
// $x = 10;

// function tampil () {
//     global $x;
//     echo $x;
// }

// tampil();

// superglobals
// $_GET
$mahasiswa = [
    [
        "nama" => "Putra Perdana",
        "nim" => "20120140027",
        "jurusan" => "Teknik Informatika",
        "email" => "putra.perdana7@gmail.com",
        "gambar" => "1.png"
    ],

    [
        "nama" => "Perdana",
        "nim" => "20120140029",
        "jurusan" => "Teknik Informatika",
        "email" => "perdana@gmail.com",
        "gambar" => "2.png"
    ],

    [
        "nama" => "Adi",
        "nim" => "20120140031",
        "jurusan" => "Teknik Informatika",
        "email" => "adi@gmail.com",
        "gambar" => "3.png"
    ],

    [
        "nama" => "Ridho",
        "nim" => "20120140033",
        "jurusan" => "Teknik Informatika",
        "email" => "ridho@gmail.com",
        "gambar" => "4.png"
    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>