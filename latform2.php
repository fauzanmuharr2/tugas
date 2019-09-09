<html>
<head><title>Fauzan Muharram</title></head>
<body>
<FORM ACTION="prosesss.php" METHOD="POST" NAME="input">
<center><h1>TUGAS</h1></center>
<table>
<tr>
<td>Nama</td> <td><input type="text" name"nama" requid><br></td>
</tr>
<tr><td>Nis</td> <td><input type="number" name"nis"            requid><br></td></tr>
<tr><td>Alamat</td> <td><textarea name"alamat" cols="40" rows="5" requid></textarea><br></td></tr>
<tr><td>Jenis Kelamin</td> <td><input type="radio" name"jk" value="Laki-Laki" checked>Laki-Laki
<input type="radio" name"jk" value="Perempuan" checked>Perempuan<br></td></tr>
<tr><td>AGAMA</td>
<td><select name="agama">
<option value="islam" >Islam</option>
<option value="kristen" >Kristen</option>
</select></tr></td>
<br>
<tr><td>Asal Sekolah</td> <td><input type="text" name"asal" requid><br></td></tr>
<tr><td>Nama Orang Tua</td> <td><input type="text" name"tua" requid><br></td></tr>
<tr><td>Mata Pelajaran Yang Disukai</td>
<td><input type="checkbox" name"band01" value="Matematika" 
checked>Matematika
<input type="checkbox" name"band02" value="Sejarah Indonesia" checked>Sejarah Indonesia
<input type="checkbox" name"band03" value="Bahasa Indonesia" 
checked>Bahasa Indonesia<br>
<input type="checkbox" name"band04" value="Bahasa Inggris" 
checked>Bahasa Inggris
<input type="checkbox" name"band05" value="Pendidikan Agama Islam" 
checked>Pendidikan Agama Islam<br></td></tr>
<tr><td>Total Nilai Ijasah SMK</td><td><input type="number" name="tn" requid><br></td></tr>
<tr><td>Email</td><td><input type="email" name="email" requid><br></td></tr>
<tr><td> <input type="submit" name"imput" value="Masukan Data"></td></tr>
</table>
</FORM>
</body>
</html>