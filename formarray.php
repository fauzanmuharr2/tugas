<html>
 <head><title>Form Array</title></head>
  <body>
   <h3><center>Form Array</center></h3>
    <fieldset>
     <legend>Form Array </legend>
      <FORM ACTION="" METHOD="GET" NAME="input">
     Masukan Jumlah : <input type="number" name="masuk" require><br>
    <input type="submit" name="input" value="Simpan">
   <hr>
  </FORM>
 <FORM ACTION="prosarray.php" METHOD="POST" NAME"input">
<?php
  echo"<h3></h3>";
   if (isset($_GET['input'])) {
    $masuk = $_GET['masuk'];

     for ($i=0; $i <$masuk ; $i++) {
    echo '<br>Nama <input type="text" name="nama[]" requid>
   Kelas <input type="text" name="kelas[]" requid><br><br>';
}
  echo '<input type="submit" name="input" value="Simpan">
   <input type="reset" name="reset" value="Reset">';
}
 ?>
  </FORM>
   </fieldset>
    </body>
     </html>