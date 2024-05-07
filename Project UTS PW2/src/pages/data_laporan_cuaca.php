<?php
//1. sertakan koneksi database
require_once '../../config/dbkoneksi.php';
require_once '../../src/layouts/header.php';
require_once '../../src/layouts/sidebar.php';


//2 Query untuk mendapatkan data cuaca
$query = $dbh->query('SELECT * FROM weather_reports');
$nomor = 1;


?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Reports</title>
    <!-- Bootstrap CSS -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/all.min.css" type="text/css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" type="text/css" href="../assets/css/OverlayScrollbars.min.css" type="text/css">
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="../assets/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Laporan Cuaca</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <a href="form_laporan.php"><button class="btn btn-primary mb-1">Tambah Data</button></a>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id      </th>
                                            <th>Lokasi</th>
                                            <th>Tipe Cuaca</th>
                                            <th>Suhu</th>
                                            <th>Kelembaban</th>
                                            <th>Kecepatan Angin</th>
                                            <th>Waktu Observasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Loop menggunakan foreach untuk menampilkan data cuaca
                                        foreach ($query as $row) {
                                            echo "<tr>";
                                            echo "<td>" . $nomor++ . "</td>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['location_id'] . "</td>";
                                            echo "<td>" . $row['weather_type_id'] . "</td>";
                                            echo "<td>" . $row['temperature'] . "</td>";
                                            echo "<td>" . $row['humidity'] . "</td>";
                                            echo "<td>" . $row['wind_speed'] . "</td>";
                                            echo "<td>" . $row['observation_time'] . "</td>";
                                            echo "<td><a href='../../app/delete_laporan.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a></td>";
                                            echo "<td><a href='../../app/update_laporan.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Update</a></td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
        </section>
        <!-- /.content -->
    </div>

    <!-- jQuery -->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../assets/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../assets/js/demo.js"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <?php
    include_once '../../src/layouts/footer.php';