<?php
// Informasi koneksi ke database
$db_host = "localhost"; // Host database, umumnya 'localhost'
$db_username = "root"; // Nama pengguna MySQL
$db_password = ""; // Kata sandi MySQL
$db_name = "rumah_sakit"; // Nama database

// Membuat koneksi ke database
$koneksi = new mysqli($db_host, $db_username, $db_password, $db_name);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
