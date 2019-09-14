<html>
 <head><title>Form Pembelian Buku</title></head>
  <body>
   <h3><center>Form Pembelian Buku</center></h3>
    <fieldset>
    <table>
     <legend>Pembelian Buku</legend>
      <FORM ACTION="latihanpts2.php" METHOD="GET" NAME="input">
      <tr>
      <td>Nama</td> <td><input type="text" name="nama" required><br></td>
      </tr>
      <tr><td>Alamat</td> <td><textarea name="alamat" cols="40" rows="5" required></textarea><br></td></tr>
      <tr><td>Jenis Kelamin</td> <td><input type="radio" name="jk" value="Laki-Laki" checked>Laki-Laki
      <input type="radio" name="jk" value="Perempuan" checked>Perempuan<br></td></tr>
      <tr><td>Tanggal Pembelian</td> <td><input type="date" name="tgl" required></td></tr>
      <tr><td>Jumlah Pembelian Buku</td> <td><input type="number" min="1" name="jumlah" required><br></td></tr>
      <tr><td><input type="submit" name="submit" value="simpan"></td></tr>
      </table>
      </FORM>
    </fieldset>
    </body>
     </html>