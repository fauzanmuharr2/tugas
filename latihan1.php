<?php
$a = 100;
$b = 50;
$c = ($a == $b) xor ($a > $b);

echo "($a == $b) xor ($a > $b) : ";
if ($c == true){
    echo "Hello PHP";
}
echo "<br>";

echo "<br>";
echo "($a == $b) xor ($a > $b) : ";
if ($c == false){
    echo "Maaf Kondisi tidak sesuai";
}
?>