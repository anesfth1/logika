<?php
 $gol =5;
if($gol >10){
    echo'Mendali emas. dengan total cetak gol :'.$gol;
}elseif($gol >7){
    echo'Mendali perak. dengan total cetak gol :'.$gol;
}elseif($gol &=9){
   echo'Mendapatkan bonus 80jt';
}elseif($gol >4){
    echo'Mendali perunggu. dengan total cetak gol :'.$gol;
}elseif($gol <4){
    echo'Mendali emas ngambang. dengan total cetak gol :'.$gol;
}
switch ($gol >10) {
    case '20':
        echo'Mendapatkan bonus 100jt';
        break;
    
    default:
        switch ($gol >7) {
            case '9':
                echo'Mendapatkan bonus 80jt';
                break;

                default:
                switch ($gol >4) {
                    case '5':
                        echo'Mendapatkan bonus 50jt';
                        break;
                    
                    default:
                     switch ($gol <4) {
                         case '0':
                             echo'Tidak Mendapatkan bonus';
                             break;
                         
                        
                     }
                        
                }
            
        }
        
}
?>