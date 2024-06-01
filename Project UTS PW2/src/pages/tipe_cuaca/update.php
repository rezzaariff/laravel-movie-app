<?php
require_once '../../../config/dbkoneksi.php';
require_once '../../../app/tipe_cuaca.php';

$db = new Database();
$pdo = $db->getPDO();

$weather_types = new Tipe_Cuaca($pdo);

if(isset($_POST['update'])) {
    $weather_types->id = $_POST['id'];
    $weather_types->name = $_POST['name'];

    $weather_types->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $weather_types->id = $_GET['id'];
    $stmt = $weather_types->edit();
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
        <label for="name">ID:</label>
        <input type="number" name="id" value="<?php echo $id; ?>">
        <br>
        <label for="name">Tipe Cuaca:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>