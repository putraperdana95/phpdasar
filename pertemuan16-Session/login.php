<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

// cek apakah tombol submit ditekan
if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];


    // cek username apakah tersedia di database
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // pengecekan
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>

    <h1>Halaman Login</h1>

    <?php if (isset($error)) : ?>
        <p style="color:red; font-style:italic; font-size:1.3rem; ">username / password tidak sesuai</p>
    <?php endif; ?>

    <form method="post" action="">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li> <br>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>

</body>

</html>