<?php
$nim = "098883928";
$nama = 'FauzanMuharram Lc';
$umur = 17;
$nilai = 85.25;
$status = TRUE;

echo "Nim  : " . $nim . "<br>";
echo "Nama : $nama<br> ";
print "Umur : " . $umur ; print"<br>";
printf ("Nilai : %.2f<br>", $nilai);
if ($status){
echo "Status : Aktif";
}
else {
echo "Status : Tidak Aktif";
}
?>