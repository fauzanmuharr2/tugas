<html>
<head><title>Pengolahan Form</title></head>
<body>
<FORM ACTION="latfrom.php" METHOD="POST" NAME="input">
Nama Anda : <input type="text" name="nama"><br>
<input type="submit" name="Input" value="Save">
</FORM>
</body>
</html>
<?php

if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
echo "Nama Anda : <b>$nama</b>";
echo "<hr>";
}
?>