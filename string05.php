<?php
echo "Menampilkan bilangan ASCII";
for ($i=0; $i <256 ; $i++) { 
    echo "<br>$i.\t". chr($i);
}
?>