<?php 
$tahmin = $_POST['tahmin'];
$sayi = rand(0,100);

if ($tahmin>1) {
	echo "Yalnızca 0 ya da 1 girin.";
}else{
	if ($sayi%2==0 and $tahmin==1) {
		echo "Doğru Tahmin<br>";
		echo "Sayı $sayi";
	}else{
		echo "Yanlış Tahmin<br>";
		echo "Sayı $sayi";
	}
}

?>
