<?php

include "baglan.php";

$id=$_GET["sil"]; //Veri silmeden post metodu ile gelen değişkenlerimiz

$sil=mysql_query("delete from deneme where id='$id'");//Veri tabanındaki tabloya bağlandık ve veri kayıtları yapılır

header('Location:kayitsilme.php');//reflesler
if ($sil) {
	echo "Kişi silindi";
}
else
	echo "Kişi silindi";
?>