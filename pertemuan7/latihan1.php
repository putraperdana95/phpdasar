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
                ["nama" => "Putra Perdana", 
                "nim" => "20120140027",
                "jurusan" => "Teknik Informatika",
                "email" => "putra.perdana7@gmail.com",
                "gambar" => "1.png"],

                ["nama" => "Perdana", 
                "nim" => "20120140029",
                "jurusan" => "Teknik Informatika",
                "email" => "perdana@gmail.com",
                "gambar" => "2.png"],

                ["nama" => "Adi", 
                "nim" => "20120140031",
                "jurusan" => "Teknik Informatika",
                "email" => "adi@gmail.com",
                "gambar" => "3.png"],

                ["nama" => "Ridho", 
                "nim" => "20120140033",
                "jurusan" => "Teknik Informatika",
                "email" => "ridho@gmail.com",
                "gambar" => "4.png"]
            
            ];
var_dump($_GET);
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
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?php echo $mhs ["gambar"]; ?>" alt="profil">
        </li>
        <li>Nama :<?= $mhs["nama"]; ?></li>
        <li>NIM :<?= $mhs["nim"]; ?></li>
        <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
        <li>Email :<?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>