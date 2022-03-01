<?php 
date_default_timezone_set("Europe/Istanbul");
$yaş=rand(0,100);
echo "yaş==>$yaş"; echo "<br>";
if ($yaş>= 18 && $yaş<= 50){
    echo "yaşınız ortalama";
} elseif ($yaş>51){
    echo "yaşınız büyük";
} else {
    echo "yaşınız küçük";
}
echo "<br>";
?>
<?php
$ad="Melih";
$soyad="Sözen";
$yaş=22;

echo "<h1>Bilgilerim</h1>"; echo "<hr>";
echo "Adınız ve Soyadınız..........." .$ad." ".$soyad; echo "<br>";
echo "Yaşınız............" .$yaş; echo "<hr>";
?>

<?php
$dizi=array(1,2,3,4,5,6,80,40,99,15,8);

print_r($dizi);
echo "<br>";
echo "<pre>";
print_r($dizi);
echo "</pre>"; echo "<br>";
echo "<pre>";
rsort($dizi);
print_r($dizi);
echo "</pre>";
echo "<hr>";
$yaş=array(3,5,7,9,8,2,6);
$sonuç=implode("+", $yaş);
echo $sonuç; echo "<hr>";
?>

<?php

$no1=17;
$no2=24;
$no3=48;

echo "<h1>Hesaplama</h1>";
$topla=$no1+$no2;
echo "Toplama=>";
echo "$no1+$no2=$topla"; 
echo "<hr>";
?>


<?php

$zaman="28-02-2022 15:52";

$sonuç=explode(" " ,$zaman);

echo "<pre>";
print_r($sonuç);
echo "</pre>"; echo "<br>";

echo "Tarih : ".$sonuç[0]." Saat :".$sonuç[1];
echo "<hr>";
?>

<?php
echo "<a href='deneme.php'> lınk </a>";
echo date("d-m-y h:i:s"); echo "<br>";
?>

<?php
$deneme="melih sozen cumhuriyet kargo";
echo strtoupper($deneme); print "<hr>";
?>
