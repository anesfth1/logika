<html>
<head><title>Pengolahan Form</title></head>
<body>
<FORM ACTION="" METHOD="GET" NAME="input">
Nama : <input type="text" name="nama"><br>
Kelas : <input type="text" name="kelas"><br>
Alamat : <input type="text" name="alamat"><br>
Hobi : <input type="text" name="hobi"><br>
<input type="submit" name="Input" value="Input">
</FORM>

</body>
</html>
<?php
if (isset($_GET['Input'])) {
$nama = $_GET['nama'];
$kelas = $_GET['kelas'];
$alamat = $_GET['alamat'];
$hobi = $_GET['hobi'];
echo "Nama : <b>$nama</b><br>";
echo "Kelas : <b>$kelas</b><br>";
echo "Alamat : <b>$alamat</b><br>";
echo "Hobi : <b>$hobi</b><br>";
}
?>