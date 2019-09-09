<html>
<head><title>Pilih Jurusan</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
<h2>Pilih Jurusan Anda :</h2>
<input type="radio" name="jurusan" value="TI" checked>
Teknik Informatika<br>
<input type="radio" name="jurusan" value="SI"> Sistem
Informasi<br>
<input type="radio" name="jurusan" value="SK"> Sistem
Komputer<br>
<input type="radio" name="jurusan" value="KA">
Komputerisasi Akuntansi<br>
<input type="submit" name="Pilih" value="Pilih">
</FORM>
</body>
</html>
<?php
if (isset($_POST['Pilih'])) {
$jurusan = $_POST['jurusan'];
echo "Jurusan Anda adalah
<b><font color='red'>$jurusan</font></b>";
}
?>