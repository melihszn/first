<?php

$kadi="melihszn";
$ksifre=123654;

if ($kadi==$_POST['kullanici_ad'] and $_POST['kullanici_sifre']==$ksifre){
    echo "Succesful";
} else {
    echo "Failed";
    header('Location: kullanicigirisi.php?status=1');
    die();
}

$ad="Melih";
$soyad="Sözen";
$yaş=22;
$okul="İstanbul Gelişim Üniversitesi";
$iş="Cumhuriyet Kargo";
echo "<h1>User İnformation</h1>";
echo "Name Surname==>$ad $soyad";
echo "<br>";
echo "Age==>$yaş";
echo "<br>";
echo "School==>$okul"; echo "<br>";
echo "Work==>$iş"; echo "<br>";
