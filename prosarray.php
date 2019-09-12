<?php
if(isset($_POST['input'])) {

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nomer = 0;
$nomer2 = 0;

// var_dump($nama);
foreach ($nama as $data => $x) {
    echo "Nama : " . $nama[$data] .
    "- kelas : " . $kelas[$data] . "<hr>";
}
}
?>