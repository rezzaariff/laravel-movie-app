<?php
require_once '../../../config/dbkoneksi.php';
require_once '../../../app/lokasi.php';

$db = new Database();
$pdo = $db->getPDO();
$lokasi = new Lokasi($pdo);

if(isset($_POST['tambah'])){
    $lokasi->name = $_POST['name'];
    $lokasi->latitude = $_POST['latitude'];
    $lokasi->longitude = $_POST['longitude'];

    $lokasi->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form method="POST" action="">
        <label for="name">Nama Kota:</label>
        <input type="text" name="name" required>
        <br>
        <label for="latitude">Garis Lintang:</label>
        <input type="text" name="latitude" required>
        <br>
        <label for="longitude">Garis Bujur:</label>
        <input type="text" name="longitude" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>