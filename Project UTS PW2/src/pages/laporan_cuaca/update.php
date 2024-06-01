<?php
require_once '../../../config/dbkoneksi.php';
require_once '../../../app/laporan_cuaca.php';

$db = new Database();
$pdo = $db->getPDO();

$wtr = new Laporan_Cuaca($pdo);

if(isset($_POST['update'])) {
    $wtr->id = $_POST['id'];
    $wtr->location_id = $_POST['location_id'];
    $wtr->weather_type_id = $_POST['weather_type_id'];
    $wtr->temperature = $_POST['temperature'];
    $wtr->humidity = $_POST['humidity'];
    $wtr->wind_speed = $_POST['wind_speed'];
    $wtr->observation_time= $_POST['observation_time'];

    $wtr->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $wtr->id = $_GET['id'];
    $stmt = $wtr->edit();
    $num = $stmt->rowCount();

    if($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="location_id">ID Lokasi:</label>
        <input type="number" name="location_id" value="<?php echo $location_id; ?>" required>
        <br>
        <label for="weather_type_id">Tipe Cuaca ID:</label>
        <input type="number" name="weather_type_id" value="<?php echo $weather_type_id; ?>" required>
        <br>
        <label for="temperature">Suhu:</label>
        <input type="text" name="temperature" value="<?php echo $temperature; ?>" required>
        <br>
        <label for="humidity">Kelembapan:</label>
        <input type="text" name="humidity" value="<?php echo $humidity; ?>" required>
        <br>
        <label for="wind_speed">Kecepatan Angin:</label>
        <input type="text" name="wind_speed" value="<?php echo $wind_speed; ?>" required>
        <br>
        <label for="observation_time">Waktu Observasi:</label>
        <input type="date" name="observation_time" value="<?php echo $observation_time; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>