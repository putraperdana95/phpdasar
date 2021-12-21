<?php
// cek apkah tombol submti sudah ditekan
if( isset($_POST["submit"]) ) {
    // cek password
    if($_POST["username"] == "admin" && $_POST["password"] == "12345") {
    // jika benar redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
    // jika salah tampilkan kesalahan
        $error= true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if( isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / Password salah</p>
    <?php endif; ?>
    
    <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <p></p>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <p></p>
        <li>
            <button type="submit" name="submit">Kirim Data</button>
        </li>
    
    </form>
    </ul>
</body>
</html>