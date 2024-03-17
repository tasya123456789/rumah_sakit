<?php
include 'config.php';

// Mengambil ID pasien yang akan diedit
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Memeriksa apakah form telah disubmit untuk menyimpan pembaruan data
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $usia = $_POST['usia'];
        $no_telepon = $_POST['no_telepon'];
        $alamat = $_POST['alamat'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $riwayat_medical = $_POST['riwayat_medical'];

        // Menyimpan pembaruan data pasien ke database
        $query = "UPDATE pasien SET nama='$nama', usia='$usia', no_telepon='$no_telepon', alamat='$alamat', tanggal_lahir='$tanggal_lahir', riwayat_medical='$riwayat_medical' WHERE id='$id'";
        mysqli_query($koneksi, $query);

        // Mengarahkan pengguna kembali ke halaman index setelah menyimpan pembaruan data
        header("Location: index.php");
        exit();
    }

    // Mengambil data pasien berdasarkan ID
    $query = "SELECT * FROM pasien WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    // Memastikan data pasien ditemukan
    if (!$row) {
        echo "Data pasien tidak ditemukan.";
        exit();
    }
} else {
    echo "ID pasien tidak diberikan.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pasien</title>
</head>
<body>
    <h2>Edit Data Pasien</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
        <label>Usia:</label>
        <input type="number" name="usia" value="<?php echo $row['usia']; ?>" required><br>
        <label>No Telepon:</label>
        <input type="text" name="no_telepon" value="<?php echo $row['no_telepon']; ?>" required><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required><br>
        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" required><br>
        <label>Riwayat Medical:</label>
        <textarea name="riwayat_medical" required><?php echo $row['riwayat_medical']; ?></textarea><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
