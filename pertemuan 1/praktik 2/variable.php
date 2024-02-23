<?php
  /*  
    Variable sistem
    variable built in php (variable yang sudah ada di php)
  */
  echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
  echo "<br />";
  echo "<br />";
  echo "<br />";


  /*  
    Variable user
    variable yang dibuat user
  */
  $name = 'Rul';
  $age = 15;
  $weight = 50;

  $name = 'Akmal'; // Ubah variable $nama

  // Menampilkan variable
  echo 'Nama saya '.$name.' umur saya '.$age.' berat saya '.$weight;
  echo "<br />";

  // Menampilkan variable dengan HTML
  echo "<h1 style='color: red'>Nama saya $name, umur saya $age tahun, berat saya $weight kg</h1>";
  echo "<br />";


  /*
    Variable konstan
    variable yang tidak bisa diubah nilainya
	  1. Menggunakan define | define('fruit', "Apel");
	  2. Menggunakan const  | const fruit = "Apel";
  */
  define ("SITE_NAME", "Elena");
  const BASE_URL = "https://elena.nurulfikri.ac.id/";

	// Variable konstan tidak bisa dirubah nilainya
	define ("SITE_NAME", "AIS"); // ---> error

  // Menampilkan variable konstanta
  echo "Site name: " . SITE_NAME . "<br/>";
  echo "URL: " . BASE_URL . "<br/>";
?>