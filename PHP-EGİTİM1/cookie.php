<?php

/* cookie oluşturma

$adsoyad = "Melih Sözen";

setcookie("adsoyad",$adsoyad);

echo $_COOKIE["adsoyad"];
*/
// cookie ye süre verme şifreleri otomatik  doldurması ve kaydetmesi için 3600 bir saate denk gelir

/* COOKİE silme 

setcookie("adsoyad","",time()-3600); değişken boş bırakılıp time - ye döndürülür0

*/

$adsoyad = "Melih Sözen";

setcookie("adsoyad",$adsoyad,time()+3600);

// COOKİE süre arttırma
// strtotime("+30 seconds") 30 saniye arttırma
// strtotime("+1 hours") 1 saat arttrıma
// strtotime("+1 day") 1 güne bu şekilde gider


?>