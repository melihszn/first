<?php
require_once 'baglam.php';

if (isset($_POST['insertislemi'])) {

 //prepare veri ekleme veri silme methodu
    $kaydet=$db->prepare("INSERT into bilgilerim set
        bilgilerim_ad=:a,
        bilgilerim_soyad=:b,
        bilgilerim_mail=:c,
        bilgilerim_yaş=:d
    ");

    $insert=$kaydet->execute(array(
        'a' => $_POST['bilgilerim_ad'],
        'b' => $_POST['bilgilerim_soyad'],
        'c' => $_POST['bilgilerim_mail'],
        'd' => $_POST['bilgilerim_yaş']
    ));

    // header istediğimiz dosyaya geri döndürür header("Location:index.php"); başarısız ise ilk sayfaya döndürür. sonuna exit; koyulur çalışmayı sonlandırmak için
    // ? get değeri başlatır
    if ($insert) {

        header("Location:crud.php?durum=ok");
        exit;
    
    } else {

        header("Location:crud.php?durum=no");    
        exit;

   }




}

?>