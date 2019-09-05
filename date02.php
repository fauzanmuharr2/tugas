<?php
// Sekarang tanggal 12 April 2006 09:43:49
$arrday = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
$day = date ("w"); //0 - 6 of day

echo "Hari ini hari : <b>" . $arrday[$day]."</b><hr>";
?>