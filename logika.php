 <?php



 /*
 Cetak Gol
 total cetak gol >= 10 'mendali emas'
 total cetak gol <= 8  'mendali perak'
 total cetak gol >= 4  'mendali perunggu'
 total cetak gol <  4  'mendali emas ngambang'
 */

//if
 $gol = 0;

 if($gol >= 10){
     echo "Mendali emas, dengan total cetak gol : " . $gol;
 }
 else if($gol >= 8){
     echo "Mendali perak, dengan total cetak gol : " . $gol;
 }
 else if($gol >= 4){
    echo "Mendali perunggu, dengan total cetak gol : " . $gol;
}
else if($gol < 4){
    echo "Mendali emas ngambang, dengan total cetak gol : " . $gol;
}
?>