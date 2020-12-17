
<?php 
$kategoriler = [
	'siteler' => [
		'e-ticaret' => [
			'n11',
			'sahibinden',
			'trendyol'
		],
		'eğitim' => [
			'udemy',
			'prototurk',
			'youtube'
		]
	]
];
print_r($kategoriler);

/*spesifik veriye ulaşmak için (mesela trendyol'a ulaşalım)*/

echo $kategoriler['siteler']['e-ticaret'][2];

?>