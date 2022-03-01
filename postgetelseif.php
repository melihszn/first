<?php
echo "<br>"; echo "<hr>";
$kadı="Melih";
$ksifre=123456;


if(@$_GET['status'] == '0')
echo "Bilgileri hatalı girdiniz!";

?>

<h3>Kullanıcı Girişi</h3>
<form action="getpost.php" method="POST">
    Kullanıcı Adı <input type="text" name="kullanıcı_ad" placeholder="Kullanıcı Adını Giriniz....">
    Kullanıcı Şifresi <input type="password" name="kullanıcı_sifre" placeholder="Kullanıcı Şifrenizi Giriniz....">
    <button>GİRİŞ YAP</button>
</form>
