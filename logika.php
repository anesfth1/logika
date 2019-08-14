<?php
 $gol = 3;
if($gol >10){
    echo'Mendali emas. dengan total cetak gol :'.$gol;
}elseif($gol >8){
   echo'Mendali perak. dengan total cetak gol :'.$gol;
}elseif($gol >4){
    echo'Mendali perunggu. dengan total cetak gol :'.$gol;
}elseif($gol <4){
    echo'Mendali emas ngambang. dengan total cetak gol :'.$gol;
}
?>