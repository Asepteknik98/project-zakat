<?php
define('BASE_URL', 'http://localhost/zakat'); // Mendefinisikan konstanta BASE_URL dengan nilai http://localhost/zakat

define('DB_HOST', 'localhost'); // Mendefinisikan konstanta DB_HOST dengan nilai localhost
define('DB_USER', 'root'); // Mendefinisikan konstanta DB_USER dengan nilai nama_pengguna
define('DB_PASS', ''); // Mendefinisikan konstanta DB_PASS dengan nilai kata_sandi
define('DB_NAME', 'zakat'); // Mendefinisikan konstanta DB_NAME dengan nilai nama_database

// Membuat koneksi
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>
