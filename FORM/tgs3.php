<?php
if (isset($_GET['Input'])) {
$nama = $_GET['nama'];
$mapel1 = $_GET['mpl1'];
$mapel2 = $_GET['mpl2'];
$a = ($mapel1+$mapel2)/2;
echo "<pre>";
echo "Nama      : <b>$nama</b><br>";
echo "Mapel1    : <b>$mapel1</b><br>";
echo "Mapel2    : <b>$mapel2</b><br>";
echo "Rata-rata : <b>$a</b><br>";
}
if($a > 75){
    echo "Status    : <b>LULUS</b>";
}elseif($a < 75){
    echo "Status    : <b>TIDAK LULUS</b>";
}
echo "</pre>";
?>