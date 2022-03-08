<?php

// karışık rakamlardan sonucu bulma problemi

$numaralar=[8,10,6,3];
$sonuc= 16;

function prblm($numaralar, $sonuc) {
    for ($i=0; $i < count($numaralar); $i++) {
        
        for ($j= $i+1; $j < count($numaralar); $j++) {
            $r=$numaralar[$i] + $numaralar[$j];
            
            if ($r == $sonuc) echo "$i,$j";
            
        }
       
    }

        return "cevap yok";

}
echo "<br>";
echo prblm($numaralar,16);

 

