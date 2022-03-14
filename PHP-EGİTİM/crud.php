<!DOCTYPE html>
<html>
<head>
    <title>CRUD İŞLEMLERİ</title>
</head>
<body>
    
    <h1>Veritabanı PDO kayıt İşlemleri</h1>
    <hr>
    
    <?php

            if ($_GET['durum']=="ok") {
            
                echo "İşlem Başarılı";
        }   elseif ($_GET['durum']=="no") {
            
                echo "İşlem Başarısız";
        }
    ?>
    
    
    <form action="islem.php" method = "POST">

            <input type="text" required="" name="bilgilerim_ad" placeholder="Adnızı Giriniz...">
            <input type="text" required="" name="bilgilerim_soyad" placeholder="Soyadnızı Giriniz...">
            <input type="email" required="" name="bilgilerim_mail" placeholder="Mail Giriniz...">
            <input type="text" required="" name="bilgilerim_yaş" placeholder="Yaşınızı Giriniz...">
            <button type="submit" name="insertislemi">Formu Gönder</button>
            


    </form>

</body>
</html>