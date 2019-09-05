<?php 

function segitiga($alas, $tinggi, $luas){
    echo "<br><pre>";
    echo "Hitunglah Keliling segitiga ";
    echo "Dengan Alas $alas tinggi $tinggi dan luasnya $luas.</pre>";
    echo "Jawab! <br><br>";
    echo "Diketahui : <br>";
    echo "<pre>Alas : $alas<br>";
    echo "Tinggi : $tinggi<br>";
    echo "Luas : $luas<br></pre>";
    echo "Hasil Kali alas sama tinggi adalah : $luas <br>";
}
$a = 10;
$b = 4;
$c = 6;
$d = $a*$b/2;
segitiga($a,$d,$b,$c);

?>