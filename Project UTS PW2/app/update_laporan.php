<?php
//1. Sertakan koneksi database
require '../config/dbkoneksi.php';

// Periksa apakah parameter id telah disertakan dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mendapatkan data cuaca berdasarkan ID
    $query = $dbh->prepare('SELECT * FROM weather_reports WHERE id = ?');
    $query->execute([$id]);
    $weather_reports = $query->fetch(PDO::FETCH_ASSOC);

    // Periksa apakah pasien dengan ID yang diberikan ditemukan
    if (!$weather_reports) {
        echo "Data Laporan tidak ditemukan.";
        exit;
    }
} else {
    echo "ID Laporan tidak disediakan.";
    exit;
}

// Periksa apakah formulir telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data yang dikirimkan melalui formulir
    $id = $_POST['id'];
    $location_id = $_POST['location_id'];
    $weather_type_id = $_POST['weather_type_id'];
    $temperature = $_POST['temperature'];
    $humidity = $_POST['humidity'];
    $wind_speed = $_POST['wind_speed'];
    $observation_time = $_POST['observation_time'];

    // Query untuk mengupdate data cuaca
    $query = $dbh->prepare('UPDATE weather_reports SET id = ?, location_id = ?, weather_type_id = ?, temperature = ?, humidity = ?, wind_speed = ?, observation_time = ? WHERE id = ?');
    $result = $query->execute([$id, $location_id, $weather_type_id, $temperature, $humidity, $wind_speed, $observation_time, $id]);

    // Periksa apakah pembaruan berhasil
    if ($result) {
        // Redirect ke halaman data cuaca setelah update
        header("Location: ../src/pages/data_laporan_cuaca.php");
        exit;
    } else {
        echo "Gagal memperbarui data cuaca.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Laporan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h2>Update Data Laporan Cuaca</h2>
        <form method="POST">
            <div class="form-group">
                <label for="id">Id:</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $weather_reports['id']; ?>">
            </div>
            <div class="form-group">
                <label for="location_id">Location Id:</label>
                <input type="text" class="form-control" id="location_id" name="location_id" value="<?php echo $weather_reports['location_id']; ?>">
            </div>
            <div class="form-group">
                <label for="weather_type_id">Weather Type:</label>
                <input type="text" class="form-control" id="weather_type_id" name="weather_type_id" value="<?php echo $weather_reports['weather_type_id']; ?>">
            </div>
            <div class="form-group">
                <label for="temperature">Temperature:</label>
                <input type="text" class="form-control" id="temperature" name="temperature" value="<?php echo $weather_reports['temperature']; ?>">
            </div>
            <div class="form-group">
                <label for="humidity">Humidity:</label>
                <input type="text" class="form-control" id="humidity" name="humidity" value="<?php echo $weather_reports['humidity']; ?>">
            </div>
            <div class="form-group">
                <label for="wind_speed">Wind Speed:</label>
                <input type="text" class="form-control" id="wind_speed" name="wind_speed" value="<?php echo $weather_reports['wind_speed']; ?>">
            </div>
            <div class="form-group">
                <label for="observation_time">Observation Time:</label>
                <input type="date" class="form-control" id="observation_time" name="observation_time" value="<?php echo $weather_reports['observation_time']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

</body>

</html>
