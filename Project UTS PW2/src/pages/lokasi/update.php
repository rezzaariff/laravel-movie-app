<?php
require_once '../../../config/dbkoneksi.php';
require_once '../../../app/lokasi.php';

$db = new Database();
$pdo = $db->getPDO();
$lokasi = new Lokasi($pdo);

if(isset($_POST['update'])) {
    $lokasi->id = $_POST['id'];
    $lokasi->name = $_POST['name'];
    $lokasi->latitude = $_POST['latitude'];
    $lokasi->longitude = $_POST['longitude'];

    $lokasi->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $lokasi->id = $_GET['id'];
    $stmt = $lokasi->edit();
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
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Update Lokasi</title>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form method="POST" action="">
        <label for="name">Nama Kota:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required>
        <br>
        <label for="latitude">Garis Lintang:</label>
        <input type="text" name="latitude" value="<?php echo $latitude; ?>" required>
        <br>
        <label for="longitude">Garis Bujur:</label>
        <input type="text" name="longitude" value="<?php echo $longitude; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>