<?php

include "baglan.php";

$adi=$_POST["isim"]; //Veri kaydetmeden post metodu ile gelen değişkenlerimiz
$soyad=$_POST["soyisim"];
$tel=$_POST["telefon"];

$kayit=mysql_query("insert into deneme (Isim,Soyisim,Tel) value('$adi','$soyad','$tel')");//Veri tabanındaki tabloya bağlandık ve veri kayıtları yapılır

if ($kayit) {
	echo "Kişi eklendi";
}
else
	echo "Kişi eklenemedi";

?>