<?php
echo "<br>"; 
$kadi="melihszn";
$ksifre=123654;

if(@$_GET['status'] == '1')
echo "Bilgileri hatalı girdiniz!";
echo "<h3>User Login<h/3>"; echo "<hr>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background:orange">
    <form action="kullanicipaneli.php" method="POST">
    <label for="kullanici_ad" style = "color:white">Username</label>
     <input type="text" name="kullanici_ad" placeholder="enter your username...">
     <label for="kullanici_sifre" style = "color:white">Password</label>
     <input type="password" name="kullanici_sifre" placeholder="enter your password...">
    <button style ="background:black; color:white">Login</button>
    </form>
</body>
</html>
