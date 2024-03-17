<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien Rumah Sakit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        table th {
            background-color: #007bff;
            color: #fff;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table tr:hover {
            background-color: #e9ecef;
        }
        .btn {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 4px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Pasien Rumah Sakit</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Riwayat Medis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Isi tabel akan ditambahkan menggunakan PHP -->
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien Rumah Sakit</title>
    <style>
        /* CSS Anda di sini */
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Pasien Rumah Sakit</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Riwayat Medis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';

                $query = "SELECT * FROM pasien";
                $result = mysqli_query($koneksi, $query);

                if (!$result) {
                    die("Query error: " . mysqli_error($koneksi));
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['usia'] . "</td>";
                    echo "<td>" . $row['no_telepon'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['tanggal_lahir'] . "</td>";
                    echo "<td>" . $row['riwayat_medis'] . "</td>"; // Pastikan nama kolomnya sesuai
                    echo "<td>";
                    echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a>";
                    echo "<a href='delete.php?id=" . $row['id'] . "' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?')\">Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <a href="create.php">Tambah Data Pasien</a>
    </div>
</body>
</html>

            </tbody>
        </table>
        <br>
        <a class="btn" href="create.php">Tambah Data Pasien</a>
    </div>
</body>
</html>
