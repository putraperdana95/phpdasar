<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");

    echo "
    <script>
    alert('Anda berhasi login')
    </script>";
    exit;
}
// Koneksi ke database
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY nama ASC");

// tombol cari di klik
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form method="post" action="">

        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan nama atau nim mahasiswa" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari Mahasiswa</button>

    </form>
    <br>
    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>No. Urut</th>
                <th>Aksi</th>
                <th>Foto</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm ('yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="100px"></td>
                    <td><?= $row["nim"] ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["email"] ?></td>
                    <td><?= $row["jurusan"] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="js/script.js"></script>
</body>

</html>