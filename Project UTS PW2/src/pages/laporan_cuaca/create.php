<?php
require_once '../../../config/dbkoneksi.php';
require_once '../../../app/laporan_cuaca.php';

$db = new Database();
$pdo = $db->getPDO();

$weather_reports = new Laporan_Cuaca($pdo);

if(isset($_POST['tambah'])){
    $weather_reports->location_id = $_POST['location_id'];
    $weather_reports->weather_type_id = $_POST['weather_type_id'];
    $weather_reports->temperature = $_POST['temperature'];
    $weather_reports->humidity = $_POST['humidity'];
    $weather_reports->wind_speed = $_POST['wind_speed'];
    $weather_reports->observation_time = $_POST['observation_time'];

    $weather_reports->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah data</title>
</head>
<body>
    <h1>Tambah data</h1>
    <form method="POST" action="">
        <br>
        <label for="location_id">ID Lokasi:</label>
        <input type="number" name="location_id" required>
        <br>
        <label for="weather_type_id">Tipe Cuaca ID:</label>
        <input type="number" name="weather_type_id" required>
        <br>
        <label for="temperature">Suhu:</label>
        <input type="text" name="temperature" required>
        <br>
        <label for="humidity">Kelembapan:</label>
        <input type="text" name="humidity" required>
        <br>
        <label for="wind_speed">Kecepatan Angin:</label>
        <input type="text" name="wind_speed" required>
        <br>
        <label for="observation_time">Waktu Observasi:</label>
        <input type="date" name="observation_time" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>