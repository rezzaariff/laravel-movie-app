<?php
// Sertakan file dbkoneksi.php
require_once '../../../config/dbkoneksi.php';

// Buat instance dari kelas Database dan dapatkan koneksi PDO
$db = new Database();
$pdo = $db->getPDO();

// Cek apakah ID cuaca ada dalam request
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buat query untuk menghapus cuaca berdasarkan ID
    $sql = "DELETE FROM locations WHERE id = :id";

    // Prepare statement
    $stmt = $pdo->prepare($sql);

    // Bind parameter
    $stmt->bindParam(':id', $id);

    // Eksekusi query
    $stmt->execute();

    // Redirect kembali ke halaman datalokasi.php
    header("Location: index.php");
    exit(); // Pastikan untuk keluar dari skrip setelah pengalihan header
} else {
    // Jika tidak ada ID dalam request, redirect ke halaman data_lokasi.php
    header("Location: index.php");
    exit(); // Pastikan untuk keluar dari skrip setelah pengalihan header
}
?>
