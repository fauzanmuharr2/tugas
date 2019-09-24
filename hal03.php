<?php
if(isset($_POST['submit'])){
	$sisi = $_POST['sisi'];

	$keliling_persegi = $sisi * 4;
	$luas_persegi = $sisi * $sisi;

	echo "Persegi memiliki sisi $sisi maka : <br>";
	echo "Luas : $luas_persegi <br>";
	echo "Keliling : $keliling_persegi";
}
?>