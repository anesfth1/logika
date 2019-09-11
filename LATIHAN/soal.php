<html>
<head><title>Data Karyawan</title>
<center><h1>DATA KARYAWAN</h1></center><hr></head>
<body>
<FORM ACTION="soal2.php" METHOD="POST" NAME="input">
    <table>
   <tr>
   <td>Nama :</td></tr>
   <tr>
   <td><input type="text" name="nama"></td></tr> 
   <tr>
   <td>NIP  :</td></tr>
   <tr>
   <td><input type="number" name="nip"></td></tr>
   <tr>
   <td>Alamat :</td></tr>
   <tr>
   <td><textarea name="alamat" cols="40" rows="5"></textarea><br></td></tr>
   <td>Jenis Kelamin :
   <input type="radio" name="jk" value="Laki-laki">Laki-laki</<input>
   <input type="radio" name="jk" value="Perempuan">Perempuan</<input></td></tr>
   <tr>
   <td>Status :
   <select name="sts">
   <option value=""></option>
   <option value="Menikah">Menikah</option>
   <option value="Belum Menikah">Belum Menikah</option>
   </select></<select></tr>
   <tr>
   <td>Jabatan :
   <select name="jbt">
   <option value=""></option>
   <option value="HRD">HRD</option>
   <option value="Manager">Manager</option>
   <option value="Staff">Staff</option>
   <option value="Karyawan">Karyawan</option>
   </select></<select></tr>
   <tr>
   <td>Potongan :
   <input type="checkbox" name="band01" value="BPJS">BPJS 
   <input type="checkbox" name="band02" value="Koperasi">Koperasi
   <input type="checkbox" name="band03" value="Jamsostek">Jamsostek</td></tr>
   <tr>
   <td>Golongan :
   <select name="gol">
   <option value=""></option>
   <option value="A1">A1</option>
   <option value="A2">A2</option>
   <option value="A3">A3</option>
   </select></<select></tr>
</table>
<br>
<input type="submit" name="Simpan" value="Simpan">
<input type="reset" name="Reset" value="Reset">
</body>
</html>