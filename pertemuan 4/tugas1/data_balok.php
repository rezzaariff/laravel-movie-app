<?php
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */
		require_once 'class_balok.php';

		$balok1 = new Balok(29, 16, 7);
		$balok2 = new Balok(10, 20, 30);
		$balok3 = new Balok(5, 5, 5);
		$balok4 = new Balok(100, 100, 100);

		echo "Luas Balok 1: " . $balok1->getLuas() . "<br>";
		echo "Keliling Balok 1: " . $balok1->getKeliling() . "<br>";
		echo "Volume Balok 1: " . $balok1->getVolume() . "<br><br>";

		echo "Luas Balok 2: " . $balok2->getLuas() . "<br>";
		echo "Keliling Balok 2: " . $balok2->getKeliling() . "<br>";
		echo "Volume Balok 2: " . $balok2->getVolume() . "<br><br>";

		echo "Luas Balok 3: " . $balok3->getLuas() . "<br>";
		echo "Keliling Balok 3: " . $balok3->getKeliling() . "<br>";
		echo "Volume Balok 3: " . $balok3->getVolume() . "<br><br>";

		echo "Luas Balok 4: " . $balok4->getLuas() . "<br>";
		echo "Keliling Balok 4: " . $balok4->getKeliling() . "<br>";
		echo "Volume Balok 4: " . $balok4->getVolume() . "<br>";
?>