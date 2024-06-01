<?php
require_once '../../../config/dbkoneksi.php';
require_once '../../../app/ramalan_cuaca.php';

$db = new Database();
$pdo = $db->getPDO();

$weather_forecasts = new Ramalan_Cuaca($pdo);

if(isset($_POST['update'])) {
    $weather_forecasts->id = $_POST['id'];
    $weather_forecasts->location_id = $_POST['location_id'];
    $weather_forecasts->weather_type_id = $_POST['weather_type_id'];
    $weather_forecasts->high_temperature = $_POST['high_temperature'];
    $weather_forecasts->low_temperature = $_POST['low_temperature'];
    $weather_forecasts->forecast_date = $_POST['forecast_date'];

    $weather_forecasts->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $weather_forecasts->id = $_GET['id'];
    $stmt = $weather_forecasts->edit();
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
        <input type="text" name="location_id" value="<?php echo $location_id; ?>" required>
        <br>
        <label for="weather_type_id">Tipe Cuaca:</label>
        <input type="text" name="weather_type_id" value="<?php echo $weather_type_id; ?>" required>
        <br>
        <label for="high_temperature">Tinggi Suhu:</label>
        <input type="text" name="high_temperature" value="<?php echo $high_temperature; ?>" required>
        <br>
        <label for="low_temperature">Rendah Suhu:</label>
        <input type="text" name="low_temperature" value="<?php echo $low_temperature; ?>" required>
        <br>
        <label for="forecast_date">Tanggal Perkiraan:</label>
        <input type="date" name="forecast_date" value="<?php echo $forecast_date; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>