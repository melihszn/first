<?php
include('fonksiyonlar.php');

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

topla(5,5); print "<br>";
yaz();

$nums =[2,7,11,15];
$target = 9;

function twoSum($nums, $target) {
    
    for ($i=0; $i < count($nums) ; $i++) { 

        for ($j = $i+1; $j < count($nums) ; $j++) { 
            $r = $nums[$i] + $nums[$j];

            if( $r == $target) return ([$i,$j]);
        }

    }
    return "cevap yok";
}
echo "<br>";
echo twoSum($nums, 22);