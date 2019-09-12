<html>
<head><title>Latihan Formulir</title></head>
<body>
    <fieldset>
    <legend>LatihanFormArray</legend>
    <FORM ACTION="" METHOD="GET" NAME="input">
     Masukan Jumlah : <input type="number" name="masuk" require><br>
    <input type="submit" name="input" value="Simpan">
   <hr>
   </FORM>
    <FORM ACTION="" METHOD="POST" NAME"input">
<?php
  $a = 5;
  $b = 3;
  echo"<h3></h3>";
   if (isset($_GET['input'])) {
    $masuk = $_GET['masuk'];

     for ($i=0; $i <$masuk ; $i++) {
    echo '<br>Masukan Bilangan : <input type="number" name="bi[$a]" requid>
   Masukan Bilangan Pangkat : <input type="number" name="bipa[$b]" requid><br><br>';
}
  echo '<input type="submit" name="Input" value="Simpan">
   <input type="reset" name="reset" value="Reset">';
}
 ?>
  </FORM>
    </fieldset>
</body>
</html>