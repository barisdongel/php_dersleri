<?php

for ($i=0; $i <= 10; $i++) {
  echo $i ."<br>";
}

for ($i=10; $i > 0; $i--) {
  echo $i ."<br>";
}

/*for döngüsü ile dizide ki elemanları saydırma*/
$dizi = [
  'Windows',
  'Linux',
  'Macintosh',
  'Unix',
  'IOS'
];

for ($i=0; $i <= (count($dizi) - 1); $i++) {
  echo $dizi[$i] . "<br>";
}


 ?>
