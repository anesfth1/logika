<?php

$arrNilai = array ("Ajeng" => 90, "Mamat" => 80, "Ucup" => 85,
"Aang" => 95, "Syahrul" => 75);
echo "<h1>DATA PELAJAR</h1>";
foreach ($arrNilai as $nama => $nilai) {
    echo "<prev> <hr>";
    if($nilai > 85){
  echo  "Nama : $nama"."<br>" ." Nilai : $nilai Grade A<br>"; 
    }elseif($nilai > 75){
  echo  "Nama : $nama"."<br>" ." Nilai : $nilai Grade B<br>"; 
    }elseif($nilai > 65){
  echo  "Nama : $nama"."<br>" ."  Nilai : $nilai Grade C<br>"; 
    echo "</prev> <hr>";}
    }


?>