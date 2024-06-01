<?php
require_once '../../../config/dbkoneksi.php';
require_once '../../../app/tipe_cuaca.php';

$db = new Database();
$pdo = $db->getPDO();

$weather_types = new Tipe_Cuaca($pdo);

if(isset($_POST['tambah'])){

    $weather_types->name = $_POST['name'];

    $weather_types->store(); 
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
        <label for="name">Tipe Cuaca:</label>
        <input type="text" name="name" required>
        <br>
        <label for="id">Id:</label>
        <input type="text" name="id" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>