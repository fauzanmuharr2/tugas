<?php
session_start();
if ($_SESSION['akseslogin']) {
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <nav>
     <a href="hal1.php">Halaman 1</a>|
     <a href="hal2.php">Halaman 2</a>|
     <a href="hal3.php">Halaman 3</a>|
     <a href="logout.php">Logout</a>|
     </nav>
     Halo <?php echo $_SESSION['akseslogin']; ?>
</body>
</html>
<?php
} else {
    echo "<script> alert('Silahkan Login Terlebih Dahulu');"
    ."window.location.href='login.php'</script>";
}
?>
PHP
<h3>Hitung Keliling dan Luas Lingkaran</h3>
 
<p>Masukkan Jari-Jari Lingkaran</p>
<form action="hal02.php" method="post">
	Jari-jari :<input type="text" name="jari2"><br>
	<input type="submit" name="submit" value="Hitung">
</form>