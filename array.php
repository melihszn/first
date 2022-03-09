<?php

$birinci=[1,2,3,5];
$ikinci=[4,5,6,4];
$üçüncü=[7,8,9,3];
$dördüncü=[7,6,1,3];

$matris=[$birinci,$ikinci,$üçüncü,$dördüncü];

for ($i=0; $i < count($matris) ; $i++) { 

        for ($j=0; $j < count($matris[$i]) ; $j++) { 

           
               
                $abc=$matris[$i][$j];
               
                echo "$abc "; 
            }

          
            
        
       
   
            echo "<br>";
}



