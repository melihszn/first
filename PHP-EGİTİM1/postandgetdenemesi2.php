<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deneme</title>

<link rel="stylesheet" href="deneme.css">
</head>
<body>


<?php

$username="melihsozen";
$userpassword="melihszn";

if($username==$_POST['user'] and $_POST['userkey']==$userpassword){
    echo "SUCCESFUL";
} else {
    echo "FAİLED";
    header('Location:postandgetdenemesi.php?status=1');
    die();
}

$ad="Melih";
$soyad="Sözen";
$yaş=22;
$okul="İstanbul Gelişim Üniversitesi";
$iş="Cumhuriyet Kargo";

?>
<h1 id="name">İsim => <?=$ad?></h1>
<h1 id="surname">Soyisim => <?=$soyad?></h1>


    
</body>
</html>