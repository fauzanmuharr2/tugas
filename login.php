<?php
session_start();
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
    <form action="" method="post">
     Email <input type="email" name="email" required>
     <br> Password <input type="password" name="pass" required>
     <br> <input type="submit" value="Login" name="Akses">
    </form>
</body>

</html>
<?php
if (isset($_POST['Akses'])) {
    $a = $_POST['email'];
    $b = $_POST['pass'];
    if ($a == "admin@gmail.com" && $b = "12345") {
        $_SESSION['akseslogin'] = 'Admin';
        header("location:hal1.php");
    } else {
        echo "Login Gagal";
    }

} elseif ($_SESSION['akseslogin']) {
    echo "<script> alert('Anda Sudah Login');"
    ."window.location.href='hal1.php'</script>";
}
?>