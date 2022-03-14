<?php

//fonksiyonlarda varsayılan değer

function yaz($ad,$soyad="Soyad girilmedi!!"){

    return $ad." ".$soyad;
}
    echo yaz("Melih");

// mesela soyad girilmedi fonksiyonun yanına ="girilmedi" yazarsak tek değer girebiliyoruz...