<?php
// Sertakan koneksi database
require '../config/dbkoneksi.php';

// Periksa apakah parameter id telah disertakan dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mendapatkan data cuaca berdasarkan ID
    $query = $dbh->prepare('SELECT * FROM locations WHERE id = ?');
    $query->execute([$id]);
    $locations = $query->fetch(PDO::FETCH_ASSOC);

    // Periksa apakah pemeriksaan dengan ID yang diberikan ditemukan
    if (!$locations) {
        echo "Lokasi tidak ditemukan.";
        exit;
    }
} else {
    echo "ID Lokasi tidak disediakan.";
    exit;
}

// Periksa apakah formulir telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data yang dikirimkan melalui formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Query untuk mengupdate data cuaca
    $query = $dbh->prepare('UPDATE locations SET id = ?, nama = ?, latitude = ?, longitude = ? WHERE id = ?');
    $result = $query->execute([$id, $nama, $latitude, $longitude, $id]);

    // Periksa apakah pembaruan berhasil
    if ($result) {
        // Redirect ke halaman data cuaca setelah update
        header("Location: ../src/pages/data_lokasi.php");
        exit;
    } else {
        echo "Gagal memperbarui data lokasi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Lokasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h2>Update Data Lokasi</h2>
        <form method="POST">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="number" class="form-control" id="id" name="id" value="<?php echo $locations['id']; ?>">
            </div>
            <div class="form-group">
                <label for="name">Nama Lokasi:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $locations['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="latitude">Latitude:</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="<?php echo $locations['latitude']; ?>">
            </div>
            <div class="form-group">
                <label for="longitude">Longitude:</label>
                <input type="text" class="form-control" id="longitude" name="longitude" value="<?php echo $locations['longitude']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

</body>

</html>
