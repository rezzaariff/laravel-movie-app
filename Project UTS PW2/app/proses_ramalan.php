<?php
// Memanggil file koneksi database
require_once '../config/dbkoneksi.php';

// Menangkap data yang dikirimkan melalui form
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $location_id = $_POST['location_id'];
    $weather_type_id = $_POST['weather_type_id'];
    $high_temperature = $_POST['high_temperature'];
    $low_temperature = $_POST['low_temperature'];
    $forecast_date = $_POST['forecast_date'];

    $data = [$id, $location_id, $weather_type_id, $high_temperature, $low_temperature, $forecast_date];

    // Menyiapkan query SQL untuk menyimpan data ke dalam tabel cuaca
    $sql = "INSERT INTO weather_forecasts (id, location_id, weather_type_id, high_temperature, low_temperature, forecast_date) VALUES (?, ?, ?, ?, ?, ?)";

    // Mempersiapkan statement PDO untuk eksekusi query
    $stmt = $dbh->prepare($sql);

    // Mengeksekusi statement dengan menyertakan data yang telah ditangkap dari form
    $stmt->execute($data);

    // Redirect ke halaman data_ramalan_cuaca.php setelah proses penyimpanan selesai
    header("Location: ../src/pages/data_ramalan_cuaca.php");
    exit; // Pastikan untuk keluar dari skrip setelah melakukan redireksi header
}
