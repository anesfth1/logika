<?php
$array = array('Judul <br>','Penulis');
$aso = [
    [
        'Judul' => '<h1>Belajar PHP & MySQL untuk Pemula</h1>',
        'Penulis' => 'Admin Smk',
    ],
    [
        'Judul' => '<h1>Tutorial PHP dari Nol sampai Mahir</h1>',
        'Penulis' => 'Admin Smk',
    ],
    [
        'Judul' => '<h1>Membuat Web dengan PHP</h1>',
        'Penulis' => 'Admin Smk',
    ],
];
    foreach ($aso as $value){
        echo $value ["Judul"]."<br>";
        echo $value ["Penulis"]."<br>";
        echo"<hr>";
    }


?>