<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa VALUES
                    ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yg di upload
    if ($error === 4) {
        echo "<script> 
                alert('Silahkan pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    // cek yang diupload gambar atau bukan
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script> 
                alert('yang anda upload bukan gambar')
                document.location.href = 'tambah.php';
            </script>";
        return false;
    };

    // cek ukuran gambar
    if ($ukuranFile > 1000000) {
        echo "<script> 
                alert('ukuran file terlalu besar. max 1mb')
                document.location.href = 'tambah.php';
            </script>";
        return false;
    };

    // lolos pengecekan gambar siap diupload
    // generate nama gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    $query = "UPDATE mahasiswa SET
				nama = '$nama',
				nim = '$nim',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
			  WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    // global $conn;
    $query = "SELECT * FROM mahasiswa WHERE 
    nama LIKE '%$keyword%' OR
    nim LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'
    ";
    return query($query);
}
