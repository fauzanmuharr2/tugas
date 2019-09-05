<?php
$array = array('Judul','Penulis');
$aso = [
    [
        'Judul'   => '<h2>Belajar PHP & MySQL untuk Pemula</h2>',
        'Penulis' => '<h4>Admin SMK</h4>',
    ],
    [
        'Judul'   => '<h2>Tutorial PHP & Nol Hingga Mahir</h2>',
        'Penulis' => '<h4>Admin SMK</h4>',
    ],
    [
        'Judul'   => '<h2>Membuat Aplikasi Web Dengan PHP</h2>',
        'Penulis' => '<h4>SMK ASSALAAM</h4>',
    ],
];

foreach ($aso as $value){
    echo $value["Judul"] . "<br>";
    echo $value["Penulis"] . "<br>";
echo '<hr>';    
}
?>