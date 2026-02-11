<?php
session_start();

if(isset($_SESSION['username'])){
    header("Location: menu.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kasir Masa Depan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- LOADING SCREEN -->
<div id="loading-screen">
    <div class="spinner"></div>
    <h1>Selamat Datang di<br>Kasir Masa Depan</h1>
</div>

<!-- MAIN CONTENT -->
<div id="main-content" style="display:none;">
    <div class="cyber-card">
        <h2>Pilih Akses</h2>
        <a href="login.php?role=pembeli" class="cyber-btn">Masuk sebagai Pembeli</a>
        <a href="login.php?role=penjual" class="cyber-btn">Masuk sebagai Penjual</a>
    </div>
</div>

<script>
setTimeout(function(){
    document.getElementById("loading-screen").style.display = "none";
    document.getElementById("main-content").style.display = "flex";
}, 3000);
</script>

</body>
</html>
