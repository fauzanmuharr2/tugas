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

PHP
<h3>Hitung Keliling dan Luas Persegi</h3>

<form action="hal03.php" method="post">
	Sisi :<input type="text" name="sisi"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
</body>
</html>
<?php
} else {
    echo "<script> alert('Silahkan Login Terlebih Dahulu');"
    ."window.location.href='login.php'</script>";
}
