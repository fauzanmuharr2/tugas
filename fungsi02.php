<?php
function cetak_ganjil($awal,$akhir)
{
    for ($i=0; $i <$akhir; $i++) { 
        if ($i%2 ==1) {
            echo "$i <br>";
        }
    }
}
// pemanggilan fungsi
$a = 10;
$b = 50;
echo "<b>Bilangan Ganjil dari $a sampai $b : </b><br>";
cetak_ganjil($a, $b);
?>