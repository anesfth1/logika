<?php
function cetak_ganjil () {
      for($i = 0; $i < 100; $i++){
          if($i%2 == 1){
              echo "$i <br>";
          }
      }
}
cetak_ganjil();
?>
