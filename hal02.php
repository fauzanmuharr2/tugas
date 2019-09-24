 
<?php
if(isset($_POST['submit'])){
	$jari2 = $_POST['jari2'];
	$phi = 22/7;
	$luas_lingkaran = $phi * $jari2 * $jari2;
	$keliling_lingkraran = $phi*($jari2 + $jari2);
	
	echo "Lingkaranan dengan jari-jari $jari2 maka memiliki <br>";
	echo "Luas : $luas_lingkaran <br>";
	echo "Keliling : $keliling_lingkraran";
}
?>