<?php

     $fruits = array();
     $fruits = [];

     $fruits = array("Pepaya", "Mangga", "Delima", "Kiwi");
     $fruits = ["Pepaya", "Mangga", "Delima", "Kiwi"];

     var_dump($fruits);
     print_r($fruits);

    # Simple array
    $fruits = ["Pisang", "Melon", "Berry"];

    # Associative array
    $fruits = [
      "Pisang" => "Kuning", 
      "Melon" => "Hijau", 
      "Berry" => "Merah"
    ];

    # Multidimensional array
    $fruits = [
      ["name" => "Pisang", "color" => "Kuning", "stock" => 20, "price" => 15000, "description" => "Pisang dengan rasa manis"],
      ["name" => "Melon", "color" => "Hijau", "stock" => 15, "price" => 28000, "description" => "Buah berwarna hijau yang segar"],
      ["name" => "Berry", "color" => "Merah", "stock" => 8, "price" => 12000, "description" => "Buah kecil dengan biji yang bisa dimakan"]
    ];
    foreach ($m_fruits as $fruit) {
        echo '<li>'.$fruit["name"].'</li>';
        echo '<li>'.$fruit["color"].'</li>';
        echo '<li>'.$fruit["stock"].'</li>';
        echo '<li>'.$fruit["price"].'</li>';
        echo '<br>';
    }

  

?>