<?php
if (isset($_GET['Input'])) {
$nama = $_GET['nama'];
$mapel1 = $_GET['mpl1'];
$mapel2 = $_GET['mpl2'];
$rata2 = $_GET['rt'];
$a = ($mapel1+$mapel2)/2;
echo "Nama : <b>$nama</b><br>";
echo "Mapel1 : <b>$mapel1</b><br>";
echo "Mapel2 : <b>$mapel2</b><br>";
echo "Rata-rata : <b>$a</b><br>";
}
if($a > 75){
    echo "LULUS";
}elseif($a < 75){
    echo "<b>TIDAK LULUS</b>";
}
?>