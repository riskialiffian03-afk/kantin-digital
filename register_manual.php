<?php
include "koneksi.php";

$username = "penjual1";
$password = password_hash("123", PASSWORD_DEFAULT);
$role = "penjual";


mysqli_query($conn, "INSERT INTO users (username, password, role) 
VALUES ('$username', '$password', '$role')");

echo "User penjual berhasil dibuat!";
?>
