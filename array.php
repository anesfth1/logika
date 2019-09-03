<?php
$a = array ('Ahmad',19,true,3.19);
echo"Array Menggunakan Echo <br>";
echo $a[0] . "<br>";
echo $b[3] . "<br>";

echo"<br>";
echo "Array menggunakan Looping For <br>";
for ($i=0; $i < count($a); $i++) { 
    echo"Array . " . $a[$i] . "<br>";
}
?>