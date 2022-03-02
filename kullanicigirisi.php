<?php
echo "<br>"; 
$kadi="melihszn";
$ksifre=123654;

if(@$_GET['status'] == '1')
echo "Bilgileri hatalı girdiniz!";
echo "<h3>User Login<h/3>"; echo "<hr>";
?>





<form action="kullanicipaneli.php" method="POST">
Username <input type="text" name="kullanici_ad" placeholder="enter your username...">
Password <input type="password" name="kullanici_sifre" placeholder="enter your password...">
<button>Login</button>
</form>


