<?php

function topla($sayi1,$sayi2) {
    return $sayi1+$sayi2;

}

//şuanda çıktı vermez istediğimiz yerde echo topla(1,1); yazarsak çıktı alabiliriz...
topla(1,1);

?>

<?php
//fonksiyonlarda global değişken kullanımı...

$b=10;

function ekle($a) {

    global $b;
    return $a+$b;
}

echo ekle(20);

?>

