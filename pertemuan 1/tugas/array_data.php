<?php
    $fruits = [
        ["id" => "1", "name" => "Pisang", "color" => "Kuning", "stock" => 86, "price" => 12000, "description" => "Buah dengan rasa yang manis dan memiliki tekstur yang lembut"],
        ["id" => "2", "name" => "Melon", "color" => "Hijau", "stock" => 76, "price" => 27000, "description" => "Buah berwarna hijau yang segar dan memiliki banyak kandungan air"],
        ["id" => "3", "name" => "Berry", "color" => "Merah", "stock" => 66, "price" => 25000, "description" => "Buah kecil dengan biji yang bisa dimakan"]
      ];
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
foreach ($fruits as $fruit) {
        echo '<tr>';
        echo '<td>'.$fruit["id"].'</td>';
        echo '<td>'.$fruit["name"].'</td>';
        echo '<td>'.$fruit["color"].'</td>';
        echo '<td>'.$fruit["stock"].'</td>';
        echo '<td>'.$fruit["price"].'</td>';
        echo '<td>'.$fruit["description"].'</td>';
        echo '<br>';
        echo '</tr>';
    }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>