<?php
echo "<h1><center>DATA KARYAWAN</center></h1>";
if(isset($_POST['Simpan'])){
    echo "<br>".date("F j, Y,g:i a")."</<br>";
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $alamat = nl2br($_POST['alamat']);
    $jk = $_POST['jk'];
    $status = $_POST['sts']; 
    $jabatan = $_POST['jbt'];
    $potongan = $_POST['band01'];
    $golongan = $_POST['gol'];
}
    echo "<br>";
    echo "<br>";
    echo "<pre>";
    echo "Nama          : ".$nama."<br>";
    echo "NIP           : ".$nip."<br>";
    echo "Alamat        : ".$alamat."<br>";
    echo "Jenis Kelamin : ".$jk."<br>";
    echo "Status        : ".$status."<br>";
    echo "Jabatan       : ".$jabatan."<br>";
    echo "Potongan      : ".$potongan."<br>";
    echo "Golongan      : ".$golongan."<br>";
    echo "<hr>";
    echo "Keterangan<br>";
    if($status == "Menikah"){
        $al=100000;
        echo "Tunjangan :"." Rp.100.000";
        echo "<br>";
    }elseif($status == "Belum Menikah"){
        echo "Tunjangan :"." Rp.50.000";
        $al=50000;
        echo "<br>";
    }
    if("BPJS"){
        $potong = 250000;
        $pot = $potong;
    }
    if("Koperasi"){
        $potong1 = 200000;
        $pot= $potong + $potong1;
    }
    if("Jamsostek"){
        $potong2 = 150000;
        $pot = $potong + $potong1 + $potong2;
    }

    if ($golongan == "A1") {
        $asup = 250000;
    }elseif ($golongan == "A2") {
        $asup = 200000;
    }elseif ($golongan == "A3") {
        $asup = 150000;
    }

    if ($jabatan == "HRD") {
        $sep = 5000000;
    }elseif ($jabatan == "Manager") {
        $sep = 4500000;
    }elseif ($jabatan == "Staff") {
        $sep = 3000000;
    }elseif ($jabatan == "Karyawan") {
        $sep = 2500000;
    }
    if($jabatan == "HRD"){
        echo "Gaji :"." Rp.5.000.000";
        echo "<br>";
    }elseif($jabatan == "Manager"){
        echo "Gaji :"." Rp.4.500.000";
        echo "<br>";
    }elseif($jabatan == "Staff"){
        echo "Gaji :"." Rp.3.000.000";
        echo "<br>";
    }elseif($jabatan == "Karyawan"){
        echo "Gaji :"." Rp.2.500.000";
        echo "<br>";
    }
    if($potongan == "BPJS"){
        echo "Potong :"." Rp.250.000";
        echo "<br>";
    }elseif($potongan == "Koperasi"){
        echo "Potong :"." Rp.150.000";
        echo "<br>";
    }elseif($potongan == "Jamsostek"){
        echo "Potong :"." Rp.150.000";
        echo "<br>";
    }
    if($golongan == "A1"){
        echo "Bonus :"." Rp.250.000";
        echo "<br>";
    }elseif($golongan == "A2"){
        echo "Bonus :"." Rp.200.000";
        echo "<br>";
    }elseif($golongan == "A3"){
        echo "Bonus :"." Rp.150.000";
        echo "<br>";
    }
    $kotor=$asup + $al + $sep -$pot ;
    echo "Gaji Kotor :"."$kotor <br>";
    $pajak=$kotor * 2.5/100;
    echo "pajak :"."$pajak<br>";
    $bersih=$kotor-$pajak;
    echo "gaji bersih: $bersih";


    ?>