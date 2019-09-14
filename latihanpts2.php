<html>
<head><title>PTS</title></head>
<body>
<fieldset>
<legend>FormPTS</legend>
<FORM ACTION="latihanpts1pros.php" METHOD="POST" NAME"input">
<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jk = $_POST['jk'];
  $tgl = $_POST['tgl'];
  $jumlah = $_POST['jumlah'];
  for ($i=0; $i <$jumlah ; $i++) {  
      echo '<br>Judul Buku <input type="text" name="judul[]" required><br>
           Kode Buku <input type="text" name="kode[]" required><br>
           Pengarang <input type="text" name="pengarang[]" required><br>
           Jenis Buku <select name="jb[]">
             <option value="pilih" >~PILIH~</option>
            <option value="novel" >Novel</option>
             <option value="fiksi" >Fiksi</option>
            <option value="horror">Horror</option>
             <option value="cergam">Cergam</option>
            <option value="komik" >Komik</option>
            <select><br>
           Harga Buku  <input type="number" name="harga[]" required><br>';
      
      echo '<input type="hidden" name="nama" value="<?php echo "$nama"; ?>">
      <input type="hidden" name="tanggal" value="<?php echo "$tanggal"; ?>">
      <input type="hidden" name="jk" value="<?php echo "$jk"; ?>">
      <input type="hidden" name="tgl" value="<?php echo "$tgl"; ?>">';
  }
    echo '<input type="submit" name="input" value="Simpan">
   <input type="reset" name="reset" value="Reset">';
}
?>
 </fieldset>
 </body>
  </FORM>
  </html>