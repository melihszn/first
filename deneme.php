<?php
echo "melih";


echo "<pre>";
print_r($_POST);
echo "</pre>";


for($i = 0; $i < 10; $i++){
    for($j = 0; $j < $i; $j++){
        echo "*";
    }
    echo "<br>";
}
?>

<form action="" method="POST">
    Ad <input type="text" name="ad" placeholder="Adınızı Girin">
    Soyad <input type="text" name="soyad" placeholder="SoyAdınızı Girin">
    <input type="submit" value="Formu Gönder" name="" >
</form> 