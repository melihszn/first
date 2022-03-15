<?php require_once 'baglam.php'; ?>


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

    <br>
    <h4>Kayıtların Listelenmesi</h4>
    <hr>

     <?php
    
    // select işlemi bilgi çekme database den her zaman kullanılabilir.

    $bilgilerimsor=$db->prepare("SELECT * FROM bilgilerim");
    $bilgilerimsor->execute();

    $bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($bilgilerimcek);
    echo "</pre>";

    echo "<br>";

    echo $bilgilerimcek['bilgilerim_ad'];
    echo "<br>";
    echo "<br>";

    //while ile sadece sütun

    $bilgilerimsor=$db->prepare("SELECT * FROM bilgilerim");
    $bilgilerimsor->execute();

    while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) {

            echo $bilgilerimcek['bilgilerim_ad']; echo "<br>";


    }



    ?>    
<br>

        <table style="width:75%" border="1">
                <tr>
                    <th>ID</th>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Mail</th>
                    <th>Yaş</th>
                    <th width="50">İşlemler</th>
                </tr>

                <?php
                
                $bilgilerimsor=$db->prepare("SELECT * FROM bilgilerim");
                $bilgilerimsor->execute();
                $say=0;
                while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) { $say++ ?>

                <tr>
                    <td><?php echo $say; ?></td>
                    <td><?php echo $bilgilerimcek['bilgilerim_id'] ?></td>
                    <td><?php echo $bilgilerimcek['bilgilerim_ad'] ?></td>
                    <td><?php echo $bilgilerimcek['bilgilerim_soyad'] ?></td>
                    <td><?php echo $bilgilerimcek['bilgilerim_mail'] ?></td>
                    <td><?php echo $bilgilerimcek['bilgilerim_yaş'] ?></td>
                    <td align="center"><a href=""><button>Sil</button></td>
                </tr>
                
                <?php } ?>

        </table>
</body>
</html>