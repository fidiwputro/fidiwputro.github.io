<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli dan Sewa iPhone - Main Menu</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <?php
            if (isset($_SESSION["username"])) {

                echo '<li><a href="logout.php">Logout</a></li>';
            }
            else {
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="register.php">Register</a></li>';
            }
            ?>
            <li class="contact-dropdown">
                <a href="javascript:void(0)">Kontak</a>
                <div class="contact-content">
                    <p>Email: jualiphonemurah@gmail.com</p>
                    <p>Lokasi: Jalan Ketintang blok 22</p>
                    <p>Nomor HP: 08111111111</p>
                    <p>Jam Operasional: 24 jam</p>
                </div>
            </li>
            <?php
            ?>
        </ul>
    </nav>
    <header id="site-header">
        <h1>Selamat Datang di Toko Beli dan Sewa iPhone</h1>
        <p>Kami menyediakan layanan pembelian dan penyewaan iPhone terbaik di kota.</p>
        <?php
        if (isset($_SESSION["username"])) {
            echo '<div class="logged-in-username">Welcome, ' . $_SESSION["username"] . '!</div>';
        }
        ?> 
    </header>
    <div class="container">
        <h2>Selamat Datang di Tempat Beli dan Sewa iPhone</h2>
        <p>Temukan koleksi iPhone terbaru dan terbaik kami. Kami siap melayani kebutuhan Anda dalam membeli atau menyewa iPhone dengan harga yang kompetitif.</p>
        <a href="list_iphone.php" class="button">Lihat List iPhone</a>
    </div>
</body>

</html>
