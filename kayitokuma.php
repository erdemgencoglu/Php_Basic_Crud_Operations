<?php
include "baglan.php";

##mysql_fetch_array(); verileri parçalamaya yarar
##mysql_query(); mysql bağlanıp seçmeye yarar

$denemedenal=mysql_query("select * from deneme");
		while ($row=mysql_fetch_array($denemedenal)) {
					$isim=$row['Isim'];
					$soyisim=$row['Soyisim'];
					$tel=$row['Tel'];

					echo "Ad: $isim <br>";
					echo "Soyad: $soyisim <br>";
					echo "Tel: $tel <br><br>";
				}	

?>	