<html>
<head><title>Pengolahan Form</title></head>
<body>
<FORM ACTION="" METHOD="GET" NAME="input">
Nama Anda : <input type="text" name="nama"><br>
<input type="submit" name="Input" value="Input">
</FORM>
</body>
</html>
<?php
if (isset($_GET['Input'])) {
$nama = $_GET['nama'];
echo "Nama Anda : <b>$nama</b>";
}
?>