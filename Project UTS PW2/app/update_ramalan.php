<?php
// Sertakan file koneksi database
require_once '../config/dbkoneksi.php';

// Periksa apakah parameter id telah disertakan dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mendapatkan data cuaca berdasarkan ID
    $query = $dbh->prepare('SELECT * FROM weather_forecasts WHERE id = ?');
    $query->execute([$id]);
    $weather_forecasts = $query->fetch(PDO::FETCH_ASSOC);

    // Periksa apakah paramedik dengan ID yang diberikan ditemukan
    if (!$weather_forecasts) {
        echo "Ramalan Cuaca tidak ditemukan.";
        exit;
    }
} else {
    echo "ID Ramalan Cuaca tidak disediakan.";
    exit;
}

// Periksa apakah formulir telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data yang dikirimkan melalui formulir
    $id = $_POST['id'];
    $location_id = $_POST['location_id'];
    $weather_type_id = $_POST['weather_type_id'];
    $high_temperature = $_POST['high_temperature'];
    $low_temperature = $_POST['low_temperature'];
    $forecast_date = $_POST['forecast_date'];

    // Query untuk mengupdate data cuaca
    $query = $dbh->prepare('UPDATE weather_forecasts SET id = ?, location_id = ?, weather_type_id = ?, high_temperature = ?, low_temperature = ?, forecast_date = ? WHERE id = ?');
    $query->execute([$id, $location_id, $weather_type_id, $high_temperature, $low_temperature, $forecast_date, $id]);

    // Redirect ke halaman data cuaca setelah update
    header("Location: ../src/pages/data_ramalan_cuaca.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Ramalan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h2>Update Ramalan Cuaca</h2>
        <form method="POST">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $weather_forecasts['id']; ?>">
            </div>
            <div class="form-group">
                <label for="location_id">ID Lokasi:</label>
                <input type="text" class="form-control" id="location_id" name="location_id" value="<?php echo $weather_forecasts['location_id']; ?>">
            </div>
            <div class="form-group">
                <label for="weather_type_id">ID Tipe Cuaca:</label>
                <input type="text" class="form-control" id="weather_type_id" name="weather_type_id" value="<?php echo $weather_forecasts['weather_type_id']; ?>">
            </div>
            <div class="form-group">
                <label for="high_temperature">Tinggi Suhu:</label>
                <input type="text" class="form-control" id="high_temperature" name="high_temperature" value="<?php echo $weather_forecasts['high_temperature']; ?>">
            </div>
            <div class="form-group">
                <label for="low_temperature">Rendah Suhu:</label>
                <input type="text" class="form-control" id="low_temperature" name="low_temperature" value="<?php echo $weather_forecasts['low_temperature']; ?>">
            </div>
            <div class="form-group">
                <label for="forecast_date">Tanggal Perkiraan:</label>
                <input type="date" class="form-control" id="forecast_date" name="forecast_date" value="<?php echo $weather_forecasts['forecast_date']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

</body>

</html>
