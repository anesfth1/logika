<?php

$nama = 'Anes Abdul Fattah';
$kelas = ' XI RPL 2';
echo "Nama : " . $nama . "<br>";
echo "Kelas : $kelas . ";  
echo"<hr>";



$a = 80;
$b = 70;
$c =$a + $b;
$d =$c / 2;
echo"Nilai B.Indonesia :".$a."<br>";
echo"Nilai B.Matematika :".$b."<br>";
echo"Nilai Rata-rata :".$d."<br>";



if($a > 100){
    echo"<b>Nilai yang anda masukan tidak sesuai<br>";
}elseif($a <0){
    echo"<br>Nilai yang anda masukan tidak sesuai<br>";
}



if($d > 100){
    echo"<b>Nilai Rata-rata yang anda masukan tidak sesuai!</b>";
}elseif($d > 85){
    echo"Keterangan :<b> LULUS</b><br>";
    echo"Grade :<b> A</b>";
}elseif($d >= 75){
    echo"Keterangan :<b> LULUS</b><br>";
    echo"Grade :<b> B</b>";
}elseif($d >= 60){
    echo"Keterangan :<b> TIDAK LULUS</b><br>";
    echo"Grade :<b> C</b>";
}elseif($d < 60){
    echo"Keterangan :<b> TIDAK LULUS</b><br>";
    echo"Grade :<b> D</b>";
}elseif($d < 0){
    echo"<b>Nilai Rata-rata yang anda masukan tidak sesuai!</b>";
}
?>