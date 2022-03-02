<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasyafa</title>

   <link rel="stylesheet" href="style.css">
</head>
<body>

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
// echo "<h1>User İnformation</h1>";
// echo "Name Surname==>$ad $soyad";
// echo "<br>";
// echo "Age==>$yaş";
// echo "<br>";
// echo "School==>$okul"; echo "<br>";
// echo "Work==>$iş"; echo "<br>";
?>


<h1 id="name">İsim => <?=$ad?></h1>
<h1 id="surname">Soyisim => <?=$soyad?></h1>
<h1 id="age">Yaş => <?=$yaş?></h1>

    
</body>
</html>


