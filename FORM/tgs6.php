<html>
<head>
<title>Perhitungan</title>
</head>
<body>
<form action="" method="POST" name="Input">
Masukan Bilangan : <input type="number" name="b"><br>
<input type ="submit" name="Input" value="Simpan">
</form>
</body>
</html>
<br>
<?php
if(isset($_POST['Input'])){
    $a = $_POST['b'];
    for($i = 0; $i < $a; $i++){
        echo "*";
       
    }
    echo "<br>";
    echo "total bintang = $a";
    echo "<hr>";
}
?>
<?php
if(isset($_POST['Input'])){
    $a = $_POST['b'];
    for($i = 1; $i <= $a; $i++){
    for($r=1; $r <= $a-$i ; $r++) { 
            echo "&nbsp;&nbsp";     
        }
    for($c=1; $c <= $i; $c++){
        echo "*&nbsp;&nbsp;";
    }
    echo "<br>";
    }
    echo "<br>";
    echo "Total Piramid : $a";
    echo "<hr>";
}
?>
<?php
if(isset($_POST['Input'])){
    $a = $_POST['b'];
    for($i= 1; $i <= $a; $i++){
    for($r=1; $r <= $i ; $r++) { 
            echo "&nbsp;&nbsp";     
        }
    for($c=$a; $c >= $i; $c--){
        echo "*&nbsp;&nbsp;";
    }
    echo "<br>";
    }
    echo "<br>";
    echo "Total Piramid Terbalik : $a";
    echo "<hr>";
}
?>
<?php
if(isset($_POST['Input'])){
    $a = $_POST['b'];
    for($i = 1; $i <= $a; $i++){
    for($r=1; $r <= $a-$i ; $r++) { 
            echo "&nbsp;&nbsp";     
        }
    for($c=1; $c <= $i; $c++){
        echo "*&nbsp;&nbsp;";
    }
    echo "<br>";
    }
    if(isset($_POST['Input'])){
        $a = $_POST['b'];
        for($i= 1; $i <= $a; $i++){
        for($r=1; $r <= $i ; $r++) { 
                echo "&nbsp;&nbsp";     
            }
        for($c=$a; $c >= $i; $c--){
            echo "*&nbsp;&nbsp;";
        }
        echo "<br>";
        }
        echo "<br>";
        echo "Total Ketupat     : $a";
        echo "<hr>";
    }

}
?>