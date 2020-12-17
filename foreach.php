<?php

$uyedetay = [
  'ad' => 'Barış',
  'Soyad' => 'Döngel',
  'yas' => 19,
  'memleket' => 'Eskişehir'
];

foreach ($uyedetay as $uye) {
  echo $uye . "<br>";
}
/*Örneğin key değeri memleket olan veriyi getirelim*/

foreach ($uyedetay as $key => $value) {
  echo $key . ':' . $value . '<br>';
}

 ?>
