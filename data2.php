<?php
$a =10;
for ($i=0; $i <= $a ; $i++) { 
    if ($i == 1){
     echo"Aku adalah Data ke-".$i." dan mendapatkan mendali emas<br>";    }
     elseif ($i == 2){
        echo"Aku adalah Data ke-".$i." dan mendapatkan mendali perak<br>";
     }elseif ($i == 3){
        echo"Aku adalah Data ke-".$i." dan mendapatkan mendali perunggu<br>";
     }elseif ($i <=5){
        echo"Aku adalah Data ke-".$i." dan mendapatkan tas laptop<br>";
    }elseif ($i <= 8){
        echo"Aku adalah Data ke-".$i." dan mendapatkan tas karung<br>";
    }elseif ($i >= 9){
        echo"Aku adalah Data ke-".$i." dan tidak mendapatkan mendali<br>";
    }
}
?>