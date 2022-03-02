<?php

$username="melihsozen";
$userpassword="melihszn";
echo "<h1>USER LOGİN PANEL</h1>";
if(@$_GET['status'] == '1') 
echo "Login Failed"; echo "<br>";echo "<br>";
?>

<form action="postandgetdenemesi2.php" method="post">
Kullanıcı Adı <input type="text" name="user" placeholder="enter your username...">
Kullanıcı Sifre <input type="password" name="userkey" placeholder="enter your password...">
<button>LOGİN</button>
</form>