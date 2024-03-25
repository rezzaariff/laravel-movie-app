<?php
    require_once 'class_kasus.php';

    $Mie_Ayam = new Mie_Ayam("Berkuah", "Gurih", "Indonesia");
    $Sushi = new Sushi("Tidak Berkuah", "Asin", "Jepang");
    $Pizza = new Pizza("Tidak Berkuah", "Asin,Gurih", "Italy");

    echo "Info Mie Ayam:<br>";
    $Mie_Ayam->getInfo();
    echo "<br>";

    echo "Info Sushi:<br>";
    $Sushi->getInfo();
    echo "<br>";

    echo "Info Pizza:<br>";
    $Pizza->getInfo();
    
?>