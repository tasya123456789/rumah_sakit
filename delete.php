<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM pasien WHERE id='$id'";
    mysqli_query($koneksi, $query);

    header("Location: index.php");
    exit();
}
?>
