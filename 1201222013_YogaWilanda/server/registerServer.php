<?php
include 'server.php';
session_start();

// todo: membuat register/insert query!
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Pendaftaran akun</title>
</head>

<body>
    <div class="container">
        <center>Pendaftaran Akun</center>
    </div>
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
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Sudah memiliki akun? <a href="loginServer.php">Register</a></p>
        </form>
    </div>
</body>

</html>