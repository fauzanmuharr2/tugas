<?php

if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$nama = $_POST['hobi'];
echo "Nama      : <b>$nama</b><br>";
echo "Kelas     : <b>$kelas</b><br>";
echo "Alamat    : <b>$alamat</b><br>";
echo "Hobi      : <b>$hobi</b><br>";
echo "<hr>";
}
?>