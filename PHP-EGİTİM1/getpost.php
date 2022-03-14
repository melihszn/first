<?php

$kadı="Melih";
$ksifre=123456;

if ($kadı==$_POST['kullanıcı_ad'] and $_POST['kullanıcı_sifre']==$ksifre) {
    echo "Giriş Başarılı";
} else {
    echo "Giriş Başarısız";
    header('Location: postgetelseif.php?status=0');
    die();
}

$ad="Melih";
$soyad="Sözen";
$numara=5301192955;
$iş="Cumhuriyet Kargo";
echo "<h1>Kullanıcı Bilgileri</h1>";
echo "$ad $soyad"; echo "<br>";
echo "$numara $iş";
?>

