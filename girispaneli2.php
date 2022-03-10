<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>
<body style = "background : yellow ; color : red ;">
    
</body>
</html>




<?php

$kullanıcıadı = "Melih";
$kullanıcısifre = "Sözen";

if($kullanıcıadı==$_POST['kullaniciadi'] && $kullanıcısifre==$_POST['kullanıcısifre']) {

        echo "Giriş Başarılı";
} else {

        echo "Giriş Başarısız";
}