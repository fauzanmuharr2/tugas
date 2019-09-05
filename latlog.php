<?php
/* Cetak gol
   total cetak gol >= 10 'mendali emas          ' & = 20 "mendapatkan bonus 100jt"
   total cetak gol >= 7  'mendali perak         ' & = 9  "mendapatkan bonus  80jt"
   total cetak gol >= 4  'mendali perunggu      ' & = 5  "mendapatkan bonus  50jt"
   total cetak gol <  4  'mendali emas ngambang ' &      "tidak mendapatkan bonus"
*/
$gol = 30;


 if($gol >= 10){
     echo "Mendali emas: ".$gol;
 
 switch ($gol) {
     case '20':
         echo "mendapatkan bonus 100jt" . $gol;
         break;

         default:
        echo "tidak mendapatkan apapa";
        break;
    }
         
 else if($gol >= 7){
    echo "Mendali perak : " . $gol;
    else;

}










 }
?>