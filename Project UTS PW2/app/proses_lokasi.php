<?php
// Memanggil file koneksi database
require_once '../config/dbkoneksi.php';

// Menangkap data yang dikirimkan melalui form
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $data = [$id, $nama, $latitude, $longitude];

    // Menyiapkan query SQL untuk menyimpan data ke dalam tabel cuaca
    $sql = "INSERT INTO locations (id, nama, latitude, longitude) VALUES (?, ?, ?, ?)";

    // Mempersiapkan statement PDO untuk eksekusi query
    $stmt = $dbh->prepare($sql);

    // Mengeksekusi statement dengan menyertakan data yang telah ditangkap dari form
    $stmt->execute($data);

    // Redirect ke halaman data_lokasi.php setelah proses penyimpanan selesai
    header("Location: ../src/pages/data_lokasi.php");
}
