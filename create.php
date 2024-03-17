<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $no_telepon = $_POST['no_telepon'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $riwayat_medical = $_POST['riwayat_medical'];

    $query = "INSERT INTO pasien (nama, usia, no_telepon, alamat, tanggal_lahir, riwayat_medical) VALUES ('$nama', '$usia', '$no_telepon', '$alamat', '$tanggal_lahir', '$riwayat_medical')";
    mysqli_query($koneksi, $query);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>
</head>
<body>
    <h2>Tambah Data Pasien</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        <label>Usia:</label>
        <input type="number" name="usia" required><br>
        <label>No Telepon:</label>
        <input type="text" name="no_telepon" required><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" required><br>
        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required><br>
        <label>Riwayat Medical:</label>
        <textarea name="riwayat_medical" required></textarea><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
