<?php
// Sertakan file dbkoneksi.php
require '../config/dbkoneksi.php';

// Cek apakah ID cuaca ada dalam request
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buat query untuk menghapus cuaca berdasarkan ID
    $sql = "DELETE FROM weather_types WHERE id = :id";

    // Prepare statement
    $stmt = $dbh->prepare($sql);

    // Bind parameter
    $stmt->bindParam(':id', $id);

    // Eksekusi query
    $stmt->execute();

    // Redirect kembali ke halaman data_tipe_cuaca.php
    header("Location: ../src/pages/data_tipe_cuaca.php");
} else {
    // Jika tidak ada ID dalam request, redirect ke halaman data_tipe_cuaca.php
    header("Location: ../src/pages/data_tipe_cuaca.php");
}
?>