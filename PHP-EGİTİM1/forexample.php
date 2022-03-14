<?php

for ($i=0; $i < 10 ; $i++) { 
        for ($j=0; $j <=10+$i ; $j++) { 

            if ($j>=10-$i) {
                
                echo "*";
                
            }
            else{

                echo "&nbsp ";
            }

        }

        echo "<br>";
}







?>

