<?php
if (isset($_POST['Simpan'])) {
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = nl2br($_POST['alamat']);
$jk = $_POST['jk'];
$agm = $_POST['Agama'];
$ask = $_POST['ask'];
$nm = $_POST['nmo'];
}

$izh = $_POST['izajah'];
$eml = $_POST['email'];
echo "<pre>";
echo "<br>";
echo "<center><h1>DATA SISWA</h1></center>";
echo "<h2>Nama           : <b>$nama</b><br>";
echo "NIS            : <b>$nis</b><br>";
echo "Alamat         : <b>$alamat</b><br>";
echo "Jenis Kelamin  : <b>$jk</b><br>";
echo "Agama          : <b>$agm</b><br>";
echo "Asal Sekolah   : <b>$ask</b><br>";
echo "Nama Orangtua  : <b>$nm</b><br>";
echo "Mata Pelajaran : <b>$mpl</b><br>";
if (isset($_POST['Simpan'])) {
    if (isset($_POST['band01'])) {
    echo "                 " . $_POST['band01'] . "<br>";
    }
    if (isset($_POST['band02'])) {
    echo "                 " . $_POST['band02'] . "<br>";
    }
    if (isset($_POST['band03'])) {
    echo "                 " . $_POST['band03'] . "<br>";
    }
    if (isset($_POST['band04'])) {
    echo "                 " . $_POST['band04'] . "<br>";
    }
    if (isset($_POST['band05'])) {
        echo "                 " . $_POST['band05'] . "<br>";
    }
     if (isset($_POST['band06'])) {
        echo "                 " . $_POST['band06'] . "<br>";   
    }
    }
echo "Total Izajah   : <b>$izh</b><br>";
echo "Email          : <b>$eml</b><br></h2>";
if($izh > 20){
    echo "<h1>SELAMAT ANDA <font color='green'>DITERIMA </font>DI SEKOLAH INI<br></h1>";
}else if ($izh < 15){
    echo "<h1>MOHON MAAF ANDA <font color='red'>TIDAK DITERIMA </font>DI SEKOLAH INI<br></h1>";
}
echo "</pre>";

?>