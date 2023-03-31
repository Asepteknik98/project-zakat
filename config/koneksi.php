<?php
$host = "localhost"; // nama server
$username = "root"; // nama pengguna database
$password = ""; // kata sandi database
$dbname = "zakat"; // nama database

// membuat koneksi
$conn = mysqli_connect($host, $username, $password, $dbname);

// memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>
