<?php
// Memanggil file koneksi database
require_once '../config/dbkoneksi.php';

// Menangkap data yang dikirimkan melalui form
if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $location_id = $_POST['location_id'];
    $weather_type_id = $_POST['weather_type_id'];
    $temperature = $_POST['temperature'];
    $humidity = $_POST['humidity'];
    $wind_speed = $_POST['wind_speed'];
    $observation_time = $_POST['observation_time'];

    $data = [$id, $location_id, $weather_type_id, $temperature, $humidity, $wind_speed, $observation_time];

    // Menyiapkan query SQL untuk menyimpan data ke dalam tabel cuaca
    $sql = "INSERT INTO weather_reports (id, location_id, weather_type_id, temperature, humidity, wind_speed, observation_time) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Mempersiapkan statement PDO untuk eksekusi query
    $stmt = $dbh->prepare($sql);

    // Mengeksekusi statement dengan menyertakan data yang telah ditangkap dari form
    $stmt->execute($data);

    // Redirect ke halaman data_laporan_cuaca.php setelah proses penyimpanan selesai
    header("Location: ../src/pages/data_laporan_cuaca.php");
}
