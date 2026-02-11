<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: index.php");
    exit;
}

$username = $_SESSION['username'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="menu-box">

<h2>Selamat Datang, <?php echo $username; ?>!</h2>
<p>Role: <b><?php echo $role; ?></b></p>

<?php if($role == "pembeli") { ?>

    <h3>Menu Pembeli</h3>
    <ul>
        <li>Lihat Produk</li>
        <li>Beli Produk</li>
        <li>Riwayat Pembelian</li>
    </ul>

<?php } else { ?>

    <h3>Menu Penjual</h3>
    <ul>
        <li>Tambah Produk</li>
        <li>Edit Produk</li>
        <li>Lihat Pesanan</li>
    </ul>

<?php } ?>

<a class="logout" href="logout.php">Logout</a>

</div>

</body>
</html>
