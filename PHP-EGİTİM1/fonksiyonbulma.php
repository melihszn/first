<?php

//fonkisyon var mı yok mu bulma.

function yaz($a) {

    return $a;
}
    if (function_exists("yaz")) {
       
            echo "fonksiyon var";

    } else {

            echo "fonksiyon yok";

    }

?>

<?php

//php deki tüm fonksiyonlar.

$yaz=get_defined_functions();
echo "<pre>";
print_r($yaz);
echo "</pre>";

?>