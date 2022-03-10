<?php

$abc = "";
$cba = "Cumhuriyet Kargo";

for ($i=strlen($cba)-1; $i >= 0 ; $i--) { 
    $abc = $abc . $cba[$i];
}
echo $abc;