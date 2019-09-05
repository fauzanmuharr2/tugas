<?php
function segitiga($alas,$tinggi)
{
    echo "<h1><b>SEGITIGA<hr></b></h1>"; 
    echo "ALas : $alas  <br> Tinggi : $tinggi <br>";
    echo "Cara menghitung luas :" . $alas*$tinggi/2 . "CM";
}
segitiga(6,2);
echo "<br>";
function Lingkaran($jari = 8)
{
    echo "<h1><b>LINGKARAN<hr></b></h1>"; 
    echo "Jari-Jari Lingkaran : $jari<br>";
    $luas = 3.14 * ($jari * $jari);
    $kel = 2* (3.14 * $jari);
    echo "Luas Lingkaran : $luas<br>";
    echo "Keliling Lingkaran : $kel<br>";
}
$a = 10;
Lingkaran($a);
?>