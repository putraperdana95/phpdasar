<?php
    $mahasiswa = [
        ["Putra Perdana", "20120140027", "Teknik informatika", "putra.perdana7@gmail.com"],
        ["Nita Putri Ana", "20120140028", "Teknik informatika", "nita7@gmail.com"],
        ["Hiya Khaira", "20120140029", "Teknik informatika", "hiya.khaira@gmail.com"]
        ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li><?= $mhs[0]; ?></li>
        <li><?= $mhs[1]; ?></li>
        <li><?= $mhs[2]; ?></li>
        <li><?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>