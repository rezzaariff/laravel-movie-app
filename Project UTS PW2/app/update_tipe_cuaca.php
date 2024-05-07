<?php
// Sertakan koneksi database
require '../config/dbkoneksi.php';

// Periksa apakah parameter id telah disertakan dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mendapatkan data cuaca berdasarkan ID
    $query = $dbh->prepare('SELECT * FROM weather_types WHERE id = ?');
    $query->execute([$id]);
    $weather_types = $query->fetch(PDO::FETCH_ASSOC);

    // Periksa apakah cuaca dengan ID yang diberikan ditemukan
    if (!$weather_types) {
        echo "Tipe Cuaca tidak ditemukan.";
        exit;
    }
} else {
    echo "ID Tipe Cuaca tidak disediakan.";
    exit;
}

// Periksa apakah formulir telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data yang dikirimkan melalui formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    // Query untuk mengupdate data cuaca
    $query = $dbh->prepare('UPDATE weather_types SET id = ?, nama = ? WHERE id = ?');
    $result = $query->execute([$id, $nama, $id]);

    // Periksa apakah pembaruan berhasil
    if ($result) {
        // Redirect ke halaman data cuaca setelah update
        header("Location: ../src/pages/data_tipe_cuaca.php");
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
    <title>Update Tipe Cuaca</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h2>Update Data Tipe Cuaca</h2>
        <form method="POST">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="number" class="form-control" id="id" name="id" value="<?php echo $weather_types['id']; ?>">
            </div>
            <div class="form-group">
                <label for="nama">Tipe Cuaca:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $weather_types['nama']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

</body>

</html>
