<?php
$a = array[
    ['Nama' => 'Ujang', 'Kelas' => 'XI RPL 2', 'Alamat' => 'CIjerah'];
    ['Nama' => 'Sukimay', 'Kelas' => 'XI TBSM 2', 'Alamat' => 'Elang'];
    ['Nama' => 'Asep Galon', 'Kelas' => 'XI TKRO 2', 'Alamat' => 'Cianjur'];
];
echo"</pre>";
print_r ($a);
echo"</pre>";

$mode = current($a[2]);
echo $mode "<br>";
?>