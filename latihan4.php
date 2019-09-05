<?php
$array = array('saya <br>', 10);
$aso = [
    [
        'Barang'   => 'Barang : Buku Tulis',
        'Harga'    => 'Harga : 4000',
        'Berat'    => 'Berat : 100 gram',
    ]
];

foreach ($aso as $value){
    echo $value["Barang"] . "<br>";
    echo $value["Harga"] . "<br>";
    echo $value["Berat"] . "<br>";
}
?>