<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
                    <td>1</td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>
                    <td>2</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>

				<?php
                $no = 3;
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Tangkap data dari form_daftar
                    $nama_lengkap = $_POST['nama_lengkap'];
                    $email = $_POST['email'];
                    $alamat = $_POST['alamat'];
                    $telepon = $_POST['telepon'];
                

                if (empty($nama_lengkap) || empty($email) || empty($alamat) || empty($telepon)) {
                    echo '<div class="alert alert-danger">Harap Mengisi Semua Data Yang Diperlukan.</div>';
                } else {
                    echo '<tr>';
                    echo '<td>'.htmlspecialchars($no).'</td>';
                    echo '<td>'.htmlspecialchars($nama_lengkap).'</td>';
                    echo '<td>'.htmlspecialchars($email).'</td>';
                    echo '<td>'.htmlspecialchars($alamat).'</td>';
                    echo '<td>'.htmlspecialchars($telepon).'</td>';
                    echo '</tr>';
                    }
                }
                ?>		
            </tbody>
	    </table>
    </div>
</body>
</html>