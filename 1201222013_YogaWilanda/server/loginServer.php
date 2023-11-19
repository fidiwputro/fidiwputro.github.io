<?php
include 'server.php';
session_start();

if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
    exit();
}

if (isset($_POST['submit'])) {
    $username = $_POST['nama_user'];
    $password = $_POST['password_user'];

    $sql = "SELECT * FROM user WHERE nama_user='$username' AND password_user='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nama_user'] = $row['nama_user'];
        echo '<center>Login Berhasil</center>';
        exit();
    } else {
        echo 
        "<script>
        alert('Email atau password Anda salah. Silakan coba lagi!')
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Email" name="nama_user" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password_user" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>

</html>