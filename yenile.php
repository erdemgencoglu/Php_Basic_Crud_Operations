<?php

include "baglan.php";

$gelen=$_GET["Git"]; //Veri guncellemeden post metodu ile gelen değişkenlerimiz

$isim=$_POST["isim"];
$soyisim=$_POST["soyisim"];
$tel=$_POST["telefon"];

$yenile=mysql_query("update deneme set Isim='$isim',Soyisim='$soyisim',Tel='$tel'");//Veri tabanındaki tabloya bağlandık ve veri kayıtları yapılır

?>