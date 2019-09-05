<?php
function cetak_ganjil ()
{
    for ($i=0; $i <100; $i++) { 
        if ($i%2 == 1) {
            echo "$i <br><hr>";
        }
    }
}
cetak_ganjil();

function perkenalan2($nama = aang)
{
    echo "Nama saya : $nama";
}
echo "<hr>";
$a = "saka";
perkenalan2();
?>