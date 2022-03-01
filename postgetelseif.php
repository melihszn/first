<?php
echo "<br>"; echo "<hr>";
$kadı="Melih";
$ksifre=123456;

if ($kadı==$_POST['kullanıcı_ad'] and $_POST['kullanıcı_sifre']==$ksifre) {
    echo "Giriş Başarılı";
} else {
    echo "Giriş Başarısız";
}
?>

<h3>Kullanıcı Girişi</h3>
<form action="" method="POST">
    Kullanıcı Adı <input type="text" name="kullanıcı_ad" placeholder="Kullanıcı Adını Giriniz....">
    Kullanıcı Şifresi <input type="password" name="kullanıcı_sifre" placeholder="Kullanıcı Şifrenizi Giriniz....">
    <button>GİRİŞ YAP</button>
</form>
