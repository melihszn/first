<?php

$string = "Hello World";
$uzunluk = strlen($string);

$string2 = substr($string,0,5);
$uzunluk2 = strlen($string2);

for ($i=0; $i < $uzunluk2 ; $i++) { 
    echo $string2[$i]; echo "<br>";
}

?>


