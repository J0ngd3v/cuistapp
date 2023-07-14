<?php
include "koneksi.php";
// register 
if(isset($_POST['daftar'])){
    $string = "abcdefghijklmnopqrstuvwxyyahuditololbegomatiajalo";
    $randomString = substr(str_shuffle($string), 0, 10); // Mengacak string menjadi 10 karakter

    $username = htmlspecialchars($_POST['username']);
    $id_user = "$randomString@cuits.com";
    $password = htmlspecialchars($_POST['password']);
    $whatsapp = htmlspecialchars($_POST['whatsapp']);

    $checkUsername = mysqli_real_escape_string($conn, $username);
    $checkQuery = "SELECT * FROM users WHERE username = '$checkUsername'";
    $checkResult = mysqli_query($conn, $checkQuery);
    if (mysqli_num_rows($checkResult) > 0) {
        header("Location: ../login.php?register&code=error&user=Username already exists");
        exit;
    }else if (strlen($password) < 8) {
        // Menampilkan pesan error jika panjang password kurang dari 8 karakter
        header("Location: ../login.php?register&code=error&pass=Password must be at least 8 characters long");
        exit;
    }

    $user = mysqli_real_escape_string($conn, $username);
    $pass = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users VALUES('$id_user','$user','$pass','$whatsapp')";
    $insert = mysqli_query($conn , $sql);
   if(mysqli_affected_rows($conn) > 0) {
    header("Location: ../login.php?register&code=success");
    } else {
    header("Location: ../login.php?register&code=error");
    }

}

if(isset($_POST['login'])){
    $user = htmlspecialchars($_POST['username']);
    $username = mysqli_real_escape_string($conn, $user);
    $password = htmlspecialchars($_POST['password']);

    $checkUsername = "SELECT * FROM users WHERE username = '$username'";
    $checkResult = mysqli_query($conn, $checkUsername);
    if (mysqli_num_rows($checkResult) == 0) {
        header("Location: login.php?login&code=error&msg=Invalid username or password");
        exit;
    }

    $userData = mysqli_fetch_assoc($checkResult);
    $hashedPassword = $userData['password'];

    if (!password_verify($password, $hashedPassword)) {
        header("Location: login.php?login&code=error&msg=Invalid username or password");
        exit;
    }

    session_start();
    $_SESSION['id_user'] = $userData['id_user'];
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("Location: ../index.php");
    exit;

}