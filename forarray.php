<?php

$dizi=array("elma","armut","kavun","karpuz","üzüm");

echo "<pre>";
print_r($dizi);
echo "</pre>";

echo "<br>";
echo $say=count($dizi);
echo "<hr>";

echo $dizi[0]; echo " ";
echo $dizi[1]; echo " ";
echo $dizi[2]; echo " ";
echo $dizi[3]; echo " ";
 echo "<hr>";
 
 for ($i=0; $i <= 3 ; $i++) { 
    echo $dizi[$i]; echo " ";
}
echo "<hr>";
foreach ($dizi as $meyve) {
    echo $meyve; echo " ";    
}