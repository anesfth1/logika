<html>
<head>
<title>Perhitungan</title>
</head>
<body>
<form action="" method="POST" name="Input">
Masukan Bilangan : <input type="number" name="b"><br>
<input type ="submit" name="Input" value="Simpan">
</form>
</body>
</html>
<br>
<?php
if(isset($_POST['Input'])){
    $a = $_POST['b'];
    for($i = 0; $i < $a; $i++){
        echo "*";
    }
    echo "<br>";
    echo "total bintang = $a";
}
?>