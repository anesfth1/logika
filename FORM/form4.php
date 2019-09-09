<html>
<head><title>Pengolahan Form ~ Text</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
Sahabat-sahabat Dekatku<br>
<input type="text" name="nama1"><br>
<input type="text" name="nama2"><br>
<input type="text" name="nama3"><br>
<input type="text" name="nama4"><br>
<input type="submit" name="Input" value="Input">
</FORM>
</body>
</html>
<?php
if (isset($_POST['Input'])) {
$nama1 = $_POST['nama1'];
$nama2 = $_POST['nama2'];
$nama3 = $_POST['nama3'];
$nama4 = $_POST['nama4'];
echo "<b>Nama Sahabat-sahabat Dekatku :</b> <br>";
echo $nama1. "<br>";
echo $nama2. "<br>";
echo $nama3. "<br>";
echo $nama4. "<br>";
}
?>