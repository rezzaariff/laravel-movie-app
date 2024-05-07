<?php
// Memanggil file koneksi database
require_once '../config/dbkoneksi.php';

// Menangkap data yang dikirimkan melalui form
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $data = [$id, $nama];

    // Menyiapkan query SQL untuk menyimpan data ke dalam tabel
    $sql = "INSERT INTO weather_types (id, nama) VALUES (?, ?)";

    // Mempersiapkan statement PDO untuk eksekusi query
    $stmt = $dbh->prepare($sql);

    // Mengeksekusi statement dengan menyertakan data yang telah ditangkap dari form
    $stmt->execute($data);

    // Redirect ke halaman data_tipe_cuaca.php setelah proses penyimpanan selesai
    header("Location: ../src/pages/data_tipe_cuaca.php");
    exit; // Pastikan untuk keluar dari skrip setelah melakukan redireksi header
}
