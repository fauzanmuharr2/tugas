<?php
if (isset($_POST['input'])){ 
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$kode = $_POST['kode'];
$pengarang = $_POST['pengarang'];
$jb = $_POST['jb'];
$harga = $_POST['harga'];

}
echo"<fieldset>";
echo "Nama : <b>$nama</b><br>";
echo "Alamat : <b>$alamat</b><br>";
echo "Jenis Kelamin : <b>$jk</b><br>";
echo "Tanggal Pembelian : <b>$tanggal</b><br>";
echo "Jumlah Pembelian: <b>$jumlah</b><br>";
echo "<br>";
foreach ($judul as $data => $x) {
    echo "<br>Judul Buku : " .$judul[$data] .
    "<br>Kode Buku : " .$kode[$data] .
    "<br>Jenis Buku : " .$jb[$data] . 
    "<br>Harga Buku : " .$harga[$data] .  "<br><hr>";  
}
echo "<prev>";
for ($i=0; $i <count($harga) ; $i++) { 
    $hsl = $harga[$i]+$hsl;
}
echo "Total Pembayaran :Rp. $hsl";
echo "<br>";
if ($jumlah >= 3) {
    $dsc = $hsl * 5/100;
    $ttl = $hsl - $dsc;
    echo "<b>Diskon (5%) : $dsc</b><br>";
    echo "<b>Total Pembayaran :Rp. $ttl</b>";
} if($jumlah >= 5){
    $dsc1 = $hsl * 10/100;
    $ttl1 = $hsl - $dsc1;
    echo "<b>Diskon (5%) : $dsc1</b><br>";
    echo "<b>Total Pembayaran :Rp. $ttl1</b>";
} else {
    $n = 0;
    echo "<b>Diskon (0%) : $n</b><br>";
    echo "<b>Total Pembayaran :Rp. $hsl</b>";}
echo"</prev>";
echo "</fieldset>";
?>