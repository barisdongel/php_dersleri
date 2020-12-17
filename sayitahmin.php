<?php 

$say = 0;
$tahmin = 5;

do {
	$sayi = rand(1,5);
	echo $sayi; echo "<br>";
	$say++;
} while ($sayi != $tahmin); {
	if ($say<=2) {
		echo $say.".denemede ".$tahmin." sayısını bulabildiniz. Kazandınız";
	}
	else{
		echo $tahmin." sayısını ancak ".$say.". denemede buldunuz. Kaybettiniz !";
	}
}

?>
