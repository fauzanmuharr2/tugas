<?php
if(isset($_POST['submit'])){
	$alas = $_POST['alas'];
	$tinggi = $_POST['tinggi'];
	
	$luas_segitiga = 1/2 * $alas * $tinggi; // Menghitung luas segitiga
	
	echo "Luas segitiga dengan alas : $alas, dan tinggi $tinggi <br>";
	echo "yaitu $luas_segitiga";
}
?>