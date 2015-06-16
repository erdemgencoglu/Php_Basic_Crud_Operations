<?php

include "baglan.php";

$gelen=$_GET['guncgit']; //Veri silmeden post metodu ile gelen değişkenlerimiz

$update=mysql_fetch_array(mysql_query("select * from deneme where id='$gelen'"));//Veri tabanındaki
$isim=$update['Isim'];
$soyisim=$update['Soyisim'];
$tel=$update['Tel'];

echo "<form action='yenile.php?Git=$gelen' method='post'>

Adiniz:
<input type='text' name='isim' value='$isim'/>
Soyadiniz
<input type='text' name='soyisim' value='$soyisim'/>
Tel:
<input type='text' name='telefon' value='$tel'/>

<input type='submit' value='Guncelle'/>


</form>"


?>