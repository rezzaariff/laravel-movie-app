<?php
require_once '../../../config/dbkoneksi.php';
require_once '../../../app/ramalan_cuaca.php';

$db = new Database();
$pdo = $db->getPDO();

$weather_forecasts = new Ramalan_Cuaca($pdo);

if(isset($_POST['tambah'])){
    $weather_forecasts->location_id = $_POST['location_id'];
    $weather_forecasts->weather_type_id = $_POST['weather_type_id'];
    $weather_forecasts->high_temperature = $_POST['high_temperature'];
    $weather_forecasts->low_temperature = $_POST['low_temperature'];
    $weather_forecasts->forecast_date = $_POST['forecast_date'];

    $weather_forecasts->store(); 
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
        <label for="location_id">ID Lokasi:</label>
        <input type="number" name="location_id" required>
        <br>
        <label for="weather_type_id">Tipe_Cuaca:</label>
        <input type="text" name="weather_type_id" required>
        <br>
        <label for="high_temperature">Tinggi Suhu:</label>
        <input type="text" name="high_temperature" required>
        <br>
        <label for="low_temperature">Rendah Suhu:</label>
        <input type="text" name="low_temperature" required>
        <br>
        <label for="forecast_date">Tanggal Perkiraan:</label>
        <input type="date" name="forecast_date" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>