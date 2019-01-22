<?php 

$type = [
	'top' => [
		'question' => '',
		'back_to_here' => ''
	],
	'gemeente_overzicht' => [
		'question' => 'Over welke gemeente wilt u meer weten?',
		'back_to_here' => 'Terug naar overzicht gemeentes'
	],
	'zorg_overzicht' => [
		'question' => 'Welk soort zorg heeft u nodig?',
		'back_to_here' => 'Terug naar zorgopties'
	],
	'subsidie_overzicht' => [
		'question' => 'Wat is uw situatie?',
		'back_to_here' => 'Terug naar overzicht subsidies'
	],
	'woning_overzicht' => [
		'question' => 'Welke locatie spreekt u aan?',
		'back_to_here' => 'Terug naar introductie woonlocaties'
	],
	'woning' => [
		'question' => 'Welke locatie spreekt u aan?',
		'back_to_here' => ''
	],
	'single' => [
		'question' => 'Deze locatie biedt:',
	],
	'blanco_overzicht' => [
		'question' => 'Welke locatie spreekt u aan?',
		'back_to_here' => 'Terug naar overzicht woonlocaties'
	]
];

$top = [
	'title' => '',
	'adress' => '#',
	'type' => 'top',
	'cookiecode' => 'TOP',
	'parent' => null,
	'children' => [
		'gemeenten'
	]
];

$beverwijk_locaties = [
	'Huis ter Wijck',
	'ViVa! Elsanta',
	'Lommerlust',
	'Breepeper'
];

$caslimak_locaties = [
	'De Boogaert',
	'De Santmark', 
	'Strammerzoom',
	'De Cameren'
];

$heemskerk_locaties = [
	'Waterrijck',
	'Heemswijk', 
	'Meerstate',
	'St. Agnes',
	'Westerheem'
];

$heilo_locaties = [
	'Overkerck',
	'De Loet',
	'Westerweg'
];

$uitgeest_locaties = [
	'Geesterheem'
];

$heerhugowaard_locaties = [
	'Forum II'
];

$bergen_locaties = [
	'De Marke'
];

$gemeenten = [
	'title' => 'Gemeenten',
	'vimeo' => '312698785',
	'adress' => 'gemeenten.php',
	'type' => 'gemeente_overzicht',
	'cookiecode' => 'GEM',
	'parent' => 'top',
	'children' => [
		'bever',
		'caslimak',
		'heemskerk',
		'heerhugowaard',
		'heiloo',
		'uitgeest',
		'bergen'
		]
];


/*-----------------------------------------------------------------------------*/
/*                                  BEVERWIJK                                  */
/*-----------------------------------------------------------------------------*/

$bever = [
	'title' => 'Beverwijk',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '312698249',
	'adress' => 'bever.php',
	'type' => 'zorg_overzicht',
	'cookiecode' => 'B00',
	'parent' => 'gemeenten',
	'children' => [
		'beverA1',
		'beverB1',
		'beverE1',
		'beverF1'
	]
];

/*------------------------------ Tijdelijke Zorg ------------------------------*/

$beverA1 = [
	'title' => 'Tijdelijke Zorg',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '151518170',
	'adress' => 'beverA1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'BA1',
	'parent' => 'bever',
	'children' => [
		'beverA2',
		'beverA3',
		'beverA4',
	]
];

$beverA2 = [
	'title' => 'Huis ter Wijck',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '153550384',
	'adress' => 'beverA2.php',
	'type' => 'woning',
	'cookiecode' => 'BA2',
	'parent' => 'beverA1',
	'children' => []
];

$beverA3 = [
	'title' => 'Lommerlust',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '153550383',
	'adress' => 'beverA3.php',
	'type' => 'woning',
	'cookiecode' => 'BA3',
	'parent' => 'beverA1',
	'children' => []
];

$beverA4 = [
	'title' => 'ViVa! Elsanta',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '151518176',
	'adress' => 'beverA4.php',
	'type' => 'woning',
	'cookiecode' => 'BA4',
	'parent' => 'beverA1',
	'children' => []
];

/*------------------------------ Persoonlijke Zorg ------------------------------*/
$beverB1 = [
	'title' => 'Persoonlijke Zorg',
	'mapdistrict' => 'beverwijk',
	
	'vimeo' => '151518177',
	'adress' => 'beverB1.php',
	'type' => 'subsidie_overzicht',
	'cookiecode' => 'BB1',
	'parent' => 'bever',
	'children' => [
		'beverC1C2',
		'beverD1'
	]
];

$beverC1C2 = [
	'link_title' => 'Met Huurtoeslag',
	'mapdistrict' => 'beverwijk',
	'title' => 'Huis ter Wijck',
	'vimeo' => '151518178',
	'adress' => 'beverC1C2.php',
	'type' => 'woning',
	'cookiecode' => 'BC1',
	'parent' => 'beverB1',
	'children' => []
];

$beverD1 = [
	'title' => 'Zonder Huurtoeslag',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '151518179',
	'adress' => 'beverD1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'BD1',
	'parent' => 'beverB1',
	'children' => [
		'beverD2',
		'beverD3'
	]
];

$beverD2 = [
	'title' => 'ViVa! Elsanta',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '151518180',
	'adress' => 'beverD2.php',
	'type' => 'woning',
	'cookiecode' => 'BD2',
	'parent' => 'beverD1',
	'children' => []
];

$beverD3 = [
	'title' => 'Lommerlust',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '153550381',
	'adress' => 'beverD3.php',
	'type' => 'woning',
	'cookiecode' => 'BD3',
	'parent' => 'beverD1',
	'children' => []
];

/*------------------------------ Gespecialiseerde Zorg ------------------------------*/
$beverE1 = [
	'title' => 'Gespecialiseerde Zorg',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '151518164',
	'adress' => 'beverE1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'BE1',
	'parent' => 'bever',
	'children' => [
		'beverE2',
		'beverE3',
		'beverE4',
		'beverE5',
	]
];

$beverE2 = [
	'title' => 'Breepeper',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '153550385',
	'adress' => 'beverE2.php',
	'type' => 'woning',
	'cookiecode' => 'BE2',
	'parent' => 'beverE1',
	'children' => []
];

$beverE3 = [
	'title' => 'Huis ter Wijck',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '151518166',
	'adress' => 'beverE3.php',
	'type' => 'woning',
	'cookiecode' => 'BE3',
	'parent' => 'beverE1',
	'children' => []
];

$beverE4 = [
	'title' => 'Lommerlust',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '151518167',
	'adress' => 'beverE4.php',
	'type' => 'woning',
	'cookiecode' => 'BE4',
	'parent' => 'beverE1',
	'children' => []
];

$beverE5 = [
	'title' => 'ViVa! Elsanta',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '151518169',
	'adress' => 'beverE5.php',
	'type' => 'woning',
	'cookiecode' => 'BE5',
	'parent' => 'beverE1',
	'children' => []
];

/*------------------------------ Zonder Zorg ------------------------------*/
$beverF1 = [
	'title' => 'Zonder Zorg',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '312698349',
	'adress' => 'beverF1.php',
	'type' => 'subsidie_overzicht',
	'cookiecode' => 'BF1',
	'parent' => 'bever',
	'children' => [
		'beverG1G2',
		'beverH1',
	]
];

$beverG1G2 = [
	'link_title' => 'Met Huurtoeslag',
	'mapdistrict' => 'beverwijk',
	'title' => 'Huis ter Wijck',
	'vimeo' => '151518178',
	'adress' => 'beverG1G2.php',
	'type' => 'woning',
	'cookiecode' => 'BG1',
	'parent' => 'beverF1',
	'children' => []
];

$beverH1 = [
	'title' => 'Zonder Huurtoeslag',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '151518179',
	'adress' => 'beverH1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'BH1',
	'parent' => 'beverF1',
	'children' => [
		'beverH2',
		'beverH3'
	]
];

$beverH2 = [
	'title' => 'ViVa! Elsanta',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '151518180',
	'adress' => 'beverH2.php',
	'type' => 'woning',
	'cookiecode' => 'BH2',
	'parent' => 'beverH1',
	'children' => []
];

$beverH3 = [
	'title' => 'Lommerlust',
	'mapdistrict' => 'beverwijk',
	'vimeo' => '153550381',
	'adress' => 'beverH3.php',
	'type' => 'woning',
	'cookiecode' => 'BH3',
	'parent' => 'beverH1',
	'children' => []
];

/*-----------------------------------------------------------------------------*/
/*                                  CASLIMAKE                                  */
/*-----------------------------------------------------------------------------*/
$caslimak = [
	'title' => 'Omgeving Castricum',
	'mapdistrict' => 'caslimak',
	
	'vimeo' => '312698400',
	'adress' => 'caslimak.php',
	'type' => 'zorg_overzicht',
	'cookiecode' => 'C00',
	'parent' => 'gemeenten',
	'children' => [
		'caslimakA1',
		'caslimakB1',
		'caslimakE1',
		'caslimakF1'
	]
];

/*------------------------------ Tijdelijke Zorg ------------------------------*/

$caslimakA1 = [
	'title' => 'Tijdelijke Zorg',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522773',
	'adress' => 'caslimakA1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'CA1',
	'parent' => 'caslimak',
	'children' => [
		'caslimakA2',
		'caslimakA3'
	]
];

$caslimakA2 = [
	'title' => 'De Boogaert',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522778',
	'adress' => 'caslimakA2.php',
	'type' => 'woning',
	'cookiecode' => 'CA2',
	'parent' => 'caslimakA1',
	'children' => []
];

$caslimakA3 = [
	'title' => 'De Santmark',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522779',
	'adress' => 'caslimakA3.php',
	'type' => 'woning',
	'cookiecode' => 'CA3',
	'parent' => 'caslimakA1',
	'children' => []
];

/*------------------------------ Persoonlijke Zorg ------------------------------*/

$caslimakB1 = [
	'title' => 'Persoonlijke Zorg',
	'mapdistrict' => 'caslimak',
	
	'vimeo' => '151522763',
	'adress' => 'caslimakB1.php',
	'type' => 'subsidie_overzicht',
	'cookiecode' => 'CB1',
	'parent' => 'caslimak',
	'children' => [
		'caslimakC1',
		'caslimakD1'
	]
];

$caslimakC1 = [
	'title' => 'Met Huurtoeslag',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522766',
	'adress' => 'caslimakC1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'CC1',
	'parent' => 'caslimakB1',
	'children' => [
		'caslimakC2',
		'caslimakC3'
	]
];

$caslimakC2 = [
	'title' => 'De Santmark',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522779',
	'adress' => 'caslimakC2.php',
	'type' => 'woning',
	'cookiecode' => 'CC2',
	'parent' => 'caslimakC1',
	'children' => []
];

$caslimakC3 = [
	'title' => 'Strammerzoom',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522764',
	'adress' => 'caslimakC3.php',
	'type' => 'woning',
	'cookiecode' => 'CC3',
	'parent' => 'caslimakC1',
	'children' => []
];

$caslimakD1 = [
	'title' => 'Zonder Huurtoeslag',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522767',
	'adress' => 'caslimakD1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'CD1',
	'parent' => 'caslimakB1',
	'children' => [
		'caslimakD2',
		'caslimakD3'
	]
];

$caslimakD2 = [
	'title' => 'De Boogaert',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522778',
	'adress' => 'caslimakD2.php',
	'type' => 'woning',
	'cookiecode' => 'CD2',
	'parent' => 'caslimakD1',
	'children' => []
];

$caslimakD3 = [
	'title' => 'De Cameren',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522765',
	'adress' => 'caslimakD3.php',
	'type' => 'woning',
	'cookiecode' => 'CD3',
	'parent' => 'caslimakD1',
	'children' => []
];

/*------------------------------ Gespecialiseerde Zorg ------------------------------*/

$caslimakE1 = [
	'title' => 'Gespecialiseerde Zorg',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522769',
	'adress' => 'caslimakE1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'CE1',
	'parent' => 'caslimak',
	'children' => [
		'caslimakE2',
		'caslimakE3',
		'caslimakE4'
	]
];

$caslimakE2 = [
	'title' => 'De Boogaert',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522774',
	'adress' => 'caslimakE2.php',
	'type' => 'woning',
	'cookiecode' => 'CE2',
	'parent' => 'caslimakE1',
	'children' => []
];

$caslimakE3 = [
	'title' => 'De Santmark',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522770',
	'adress' => 'caslimakE3.php',
	'type' => 'woning',
	'cookiecode' => 'CE3',
	'parent' => 'caslimakE1',
	'children' => []
];

$caslimakE4 = [
	'title' => 'De Cameren',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522771',
	'adress' => 'caslimakE4.php',
	'type' => 'woning',
	'cookiecode' => 'CE4',
	'parent' => 'caslimakE1',
	'children' => []
];


/*------------------------------ Zonder Zorg ------------------------------*/

$caslimakF1 = [
	'title' => 'Zonder Zorg',
	'mapdistrict' => 'caslimak',
	'vimeo' => '312698459',
	'adress' => 'caslimakF1.php',
	'type' => 'subsidie_overzicht',
	'cookiecode' => 'CF1',
	'parent' => 'caslimak',
	'children' => [
		'caslimakF0',
		'caslimakG0'
	]
];

$caslimakF0 = [
	'title' => 'Zonder Huurtoeslag',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522778',
	'adress' => 'caslimakF0.php',
	'type' => 'blanco_overzicht',
	'cookiecode' => 'CF0',
	'parent' => 'caslimakF1',
	'children' => [
		'caslimakF3',
		'caslimakF2'
	]
];

$caslimakF2 = [
	'title' => 'De Boogaert',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522778',
	'adress' => 'caslimakF2.php',
	'type' => 'woning',
	'cookiecode' => 'CF2',
	'parent' => 'caslimakF0',
	'children' => []
];

$caslimakF3 = [
	'title' => 'De Cameren',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522765',
	'adress' => 'caslimakF3.php',
	'type' => 'woning',
	'cookiecode' => 'CF3',
	'parent' => 'caslimakF0',
	'children' => []
];

$caslimakG0 = [
	'title' => 'Met Huurtoeslag',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522779',
	'adress' => 'caslimakG0.php',
	'type' => 'blanco_overzicht',
	'cookiecode' => 'CG0',
	'parent' => 'caslimakF1',
	'children' => [
		'caslimakG1',
		'caslimakG2'
	]
];

$caslimakG1 = [
	'title' => 'De Santmark',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522779',
	'adress' => 'caslimakG1.php',
	'type' => 'woning',
	'cookiecode' => 'CG1',
	'parent' => 'caslimakG0',
	'children' => []
];

$caslimakG2 = [
	'title' => 'Strammerzoom',
	'mapdistrict' => 'caslimak',
	'vimeo' => '151522764',
	'adress' => 'caslimakG2.php',
	'type' => 'woning',
	'cookiecode' => 'CG2',
	'parent' => 'caslimakG0',
	'children' => []
];


/*-----------------------------------------------------------------------------*/
/*                                  HEEMSKERK                                  */
/*-----------------------------------------------------------------------------*/

$heemskerk = [
	'title' => 'Heemskerk',
	'mapdistrict' => 'heemskerk',
	'vimeo' => '312700438',
	'adress' => 'heemskerk.php',
	'type' => 'zorg_overzicht',
	'cookiecode' => 'H00',
	'parent' => 'gemeenten',
	'children' => [
		'heemskerkA1',
		'heemskerkB1',
		'heemskerkE1',
		'heemskerkF1'
	]
];

/*------------------------------ Tijdelijke Zorg ------------------------------*/

$heemskerkA1 = [
	'title' => 'Tijdelijke Zorg',
	'mapdistrict' => 'heemskerk',
	'vimeo' => '151528966',
	'adress' => 'heemskerkA1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'HA1',
	'parent' => 'heemskerk',
	'children' => [
		'heemskerkA2',
		'heemskerkA3',
		'heemskerkA4'
	]
];

$heemskerkA2 = [
	'title' => 'Waterrijck',
	'mapdistrict' => 'heemskerk',
	'vimeo' => '154236770',
	'adress' => 'heemskerkA2.php',
	'type' => 'woning',
	'cookiecode' => 'HA2',
	'parent' => 'heemskerkA1',
	'children' => []
];

$heemskerkA3 = [
	'title' => 'Heemswijk',
	'mapdistrict' => 'heemskerk',
	'vimeo' => '151528964',
	'adress' => 'heemskerkA3.php',
	'type' => 'woning',
	'cookiecode' => 'HA3',
	'parent' => 'heemskerkA1',
	'children' => []
];

$heemskerkA4 = [
	'title' => 'Meerstate',
	'mapdistrict' => 'heemskerk',
	'vimeo' => '151528963',
	'adress' => 'heemskerkA4.php',
	'type' => 'woning',
	'cookiecode' => 'HA4',
	'parent' => 'heemskerkA1',
	'children' => []
];


/*------------------------------ Persoonlijke Zorg ------------------------------*/

$heemskerkB1 = [
	'title' => 'Persoonlijke Zorg',
	'mapdistrict' => 'heemskerk',
	
	'vimeo' => '153771804',
	'adress' => 'heemskerkB1.php',
	'type' => 'subsidie_overzicht',
	'cookiecode' => 'HB1',
	'parent' => 'heemskerk',
	'children' => [
		'heemskerkD2',
		'heemskerkD3'
	]
];

$heemskerkD1 = [
	'title' => 'Zonder Huurtoeslag',
	'mapdistrict' => 'heemskerk',
	'vimeo' => '151528968',
	'adress' => 'heemskerkD1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'HD1',
	'parent' => 'heemskerkB1',
	'children' => [
		'heemskerkD2'
	]
];

$heemskerkD2 = [
	'link_title' => 'Zonder Huurtoeslag',
	'mapdistrict' => 'heemskerk',
	'title' => 'St. Agnes',
	'vimeo' => '151528967',
	'adress' => 'heemskerkD2.php',
	'type' => 'woning',
	'cookiecode' => 'HD2',
	'parent' => 'heemskerkB1',
	'children' => []
];

$heemskerkD3 = [
	'link_title' => 'Met Huurtoeslag',
	'mapdistrict' => 'heemskerk',
	'title' => 'Westerheem',
	'vimeo' => '151528970',
	'adress' => 'heemskerkD3.php',
	'type' => 'woning',
	'cookiecode' => 'HD3',
	'parent' => 'heemskerkB1',
	'children' => []
];



/*------------------------------ Gespecialiseerde Zorg ------------------------------*/

$heemskerkE1 = [
	'title' => 'Gespecialiseerde Zorg',
	'mapdistrict' => 'heemskerk',
	'vimeo' => '152086628',
	'adress' => 'heemskerkE1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'HE1',
	'parent' => 'heemskerk',
	'children' => [
		'heemskerkE2',
		'heemskerkE3',
		'heemskerkE4',
		'heemskerkE5',
		'heemskerkE6',
	]
];

$heemskerkE2 = [
	'title' => 'Heemswijk',
	'mapdistrict' => 'heemskerk',
	'vimeo' => '151528972',
	'adress' => 'heemskerkE2.php',
	'type' => 'woning',
	'cookiecode' => 'HE2',
	'parent' => 'heemskerkE1',
	'children' => []
];

$heemskerkE3 = [
	'title' => 'Meerstate',
	'mapdistrict' => 'heemskerk',
	'vimeo' => '153550911',
	'adress' => 'heemskerkE3.php',
	'type' => 'woning',
	'cookiecode' => 'HE3',
	'parent' => 'heemskerkE1',
	'children' => []
];

$heemskerkE4 = [
	'title' => 'Sint Agnes',
	'mapdistrict' => 'heemskerk',
	'vimeo' => '151528974',
	'adress' => 'heemskerkE4.php',
	'type' => 'woning',
	'cookiecode' => 'HE4',
	'parent' => 'heemskerkE1',
	'children' => []
];

$heemskerkE5 = [
	'title' => 'Waterrijck',
	'mapdistrict' => 'heemskerk',
	'vimeo' => '154236767',	
	'adress' => 'heemskerkE5.php',
	'type' => 'woning',
	'cookiecode' => 'HE5',
	'parent' => 'heemskerkE1',
	'children' => []
];

$heemskerkE6 = [
	'title' => 'Westerheem',
	'mapdistrict' => 'heemskerk',
	'vimeo' => '151528973',
	'adress' => 'heemskerkE6.php',
	'type' => 'woning',
	'cookiecode' => 'HE6',
	'parent' => 'heemskerkE1',
	'children' => []
];

/*------------------------------ Zonder Zorg ------------------------------*/

$heemskerkF1 = [
	'title' => 'Zonder Zorg',
	'mapdistrict' => 'heemskerk',
	'vimeo' => '312719760',
	'adress' => 'heemskerkF1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'HF1',
	'parent' => 'heemskerk',
	'children' => [
		'heemskerkF2',
		'heemskerkF3'
	]
];

$heemskerkF2 = [
	'link_title' => 'Met Huurtoeslag',
	'mapdistrict' => 'heemskerk',
	'title' => 'Westerheem',
	'vimeo' => '151528970',
	'adress' => 'heemskerkF2.php',
	'type' => 'woning',
	'cookiecode' => 'HF2',
	'parent' => 'heemskerkF1',
	'children' => []
];

$heemskerkF3 = [
	'link_title' => 'Zonder Huurtoeslag',
	'mapdistrict' => 'heemskerk',
	'title' => 'Sint. Agnes',
	'vimeo' => '151528967',
	'adress' => 'heemskerkF3.php',
	'type' => 'woning',
	'cookiecode' => 'HF3',
	'parent' => 'heemskerkF1',
	'children' => []
];


/*-----------------------------------------------------------------------------*/
/*                                HEERHUGOWAARD                                */
/*-----------------------------------------------------------------------------*/


$heerhugowaard = [
	'title' => 'Heerhugowaard',
	'mapdistrict' => 'heerhugowaard',
	'vimeo' => '153551586',
	'adress' => 'heerhugowaard.php',
	'type' => 'zorg_overzicht',
	'cookiecode' => 'HEE00',
	'parent' => 'gemeenten',
	'children' => [
		'heerhugowaardA1',
		'heerhugowaardB1'
	]
];

/*------------------------------ Tijdelijke Zorg ------------------------------*/

$heerhugowaardA1 = [
	'link_title' => 'Tijdelijke Zorg',
	'mapdistrict' => 'heerhugowaard',
	'title' => 'Forum II',
	'vimeo' => '151560150',
	'adress' => 'heerhugowaardA1.php',
	'type' => 'woning',
	'type_alt' => 'single',
	'cookiecode' => 'HEEA1',
	'parent' => 'heerhugowaard',
	'children' => []
];

/*------------------------------ Gespecialiseerde Zorg ------------------------------*/

$heerhugowaardB1 = [
	'link_title' => 'Gespecialiseerde Zorg',
	'mapdistrict' => 'heerhugowaard',
	'title' => 'Forum II',
	'vimeo' => '153550909',
	'adress' => 'heerhugowaardB1.php',
	'type' => 'woning',
	'type_alt' => 'single',
	'cookiecode' => 'HEEB1',
	'parent' => 'heerhugowaard',
	'children' => []
];


/*-----------------------------------------------------------------------------*/
/*                                    HEILOO                                    */
/*-----------------------------------------------------------------------------*/


$heiloo = [
	'title' => 'Heiloo',
	'mapdistrict' => 'heiloo',
	'vimeo' => '312699004',
	'adress' => 'heiloo.php',
	'type' => 'zorg_overzicht',
	'cookiecode' => 'HEI00',
	'parent' => 'gemeenten',
	'children' => [
		'heilooA1',
		'heilooD1',
		'heilooE2'
	]
];

/*------------------------------ Persoonlijke Zorg ------------------------------*/

$heilooA1 = [
	'title' => 'Persoonlijke Zorg',
	'mapdistrict' => 'heiloo',
	
	'vimeo' => '312698960',
	'adress' => 'heilooA1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'HEIA1',
	'parent' => 'heiloo',
	'children' => [
		'heilooB1B2',
		'heilooC1'
	]
];

$heilooB1B2 = [
	'link_title' => 'Met Huurtoeslag',
	'mapdistrict' => 'heiloo',
	'title' => 'Overkerck',
	'vimeo' => '312698675',
	'adress' => 'heilooB1B2.php',
	'type' => 'woning',
	'cookiecode' => 'HEIB1',
	'parent' => 'heilooA1',
	'children' => []
];

$heilooC1 = [
	'title' => 'Zonder Huurtoeslag',
	'mapdistrict' => 'heiloo',
	'vimeo' => '152207192',
	'adress' => 'heilooC1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'HEIC1',
	'parent' => 'heilooA1',
	'children' => [
		'heilooC2',
		'heilooC3'
	]
];

$heilooC2 = [
	'title' => 'De Loet',
	'mapdistrict' => 'heiloo',
	'vimeo' => '152207186',
	'adress' => 'heilooC2.php',
	'type' => 'woning',
	'cookiecode' => 'HEIC2',
	'parent' => 'heilooC1',
	'children' => []
];

$heilooC3 = [
	'title' => 'Westerweg',
	'mapdistrict' => 'heiloo',
	'vimeo' => '152207644',
	'adress' => 'heilooC3.php',
	'type' => 'woning',
	'cookiecode' => 'HEIC3',
	'parent' => 'heilooC1',
	'children' => []
];

/*------------------------------ Gespecialiseerde Zorg ------------------------------*/

$heilooD1 = [
	'title' => 'Gespecialiseerde Zorg',
	'mapdistrict' => 'heiloo',
	'vimeo' => '312698911',
	'adress' => 'heilooD1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'HEID1',
	'parent' => 'heiloo',
	'children' => [
		'heilooD2',
		'heilooD3'
	]
];

$heilooD2 = [
	'title' => 'Overkerck',
	'mapdistrict' => 'heiloo',
	'vimeo' => '312698675',
	'adress' => 'heilooD2.php',
	'type' => 'woning',
	'cookiecode' => 'HEID2',
	'parent' => 'heilooD1',
	'children' => []
];

$heilooD3 = [
	'title' => 'De Loet',
	'mapdistrict' => 'heiloo',
	'vimeo' => '152102166',
	'adress' => 'heilooD3.php',
	'type' => 'woning',
	'cookiecode' => 'HEID3',
	'parent' => 'heilooD1',
	'children' => []
];

/*------------------------------ Zonder Zorg ------------------------------*/

$heilooE2 = [
	'title' => 'Zonder Zorg',
	'mapdistrict' => 'heiloo',
	'vimeo' => '312698862',
	'adress' => 'heilooE2.php',
	'type' => 'subsidie_overzicht',
	'cookiecode' => 'HEIE2',
	'parent' => 'heiloo',
	'children' => [
		'heilooF1F2',
		'heilooG1'
	]
];

$heilooF1F2 = [
	'link_title' => 'Met Huurtoeslag',
	'mapdistrict' => 'heiloo',
	'title' => 'Overkerck',
	'vimeo' => '312698675',
	'adress' => 'heilooF1F2.php',
	'type' => 'woning',
	'cookiecode' => 'HEIF1',
	'parent' => 'heilooE2',
	'children' => [	]
];

$heilooG1 = [
	'title' => 'Zonder Huurtoeslag',
	'mapdistrict' => 'heiloo',
	'vimeo' => '152207192',
	'adress' => 'heilooG1.php',
	'type' => 'woning_overzicht',
	'cookiecode' => 'HEIG1',
	'parent' => 'heilooE2',
	'children' => [
		'heilooG2',
		'heilooG3'
	]
];

$heilooG2 = [
	'title' => 'De Loet',
	'mapdistrict' => 'heiloo',
	'vimeo' => '152207186',
	'adress' => 'heilooG2.php',
	'type' => 'woning',
	'cookiecode' => 'HEIG2',
	'parent' => 'heilooG1',
	'children' => []
];

$heilooG3 = [
	'title' => 'Westerweg',
	'mapdistrict' => 'heiloo',
	'vimeo' => '152207644',
	'adress' => 'heilooG3.php',
	'type' => 'woning',
	'cookiecode' => 'HEIG3',
	'parent' => 'heilooG1',
	'children' => []
];



/*-----------------------------------------------------------------------------*/
/*                                   UITGEEST                                  */
/*-----------------------------------------------------------------------------*/


$uitgeest = [
	'title' => 'Uitgeest',
	'mapdistrict' => 'uitgeest',
	'vimeo' => '312698550',
	'adress' => 'uitgeest.php',
	'type' => 'zorg_overzicht',
	'cookiecode' => 'U00',
	'parent' => 'gemeenten',
	'children' => [
		'uitgeestA1A2',
		'uitgeestB1B2',
		'uitgeestC1C2'
	]
];

/*------------------------------ Persoonlijke Zorg ------------------------------*/

$uitgeestA1A2 = [
	'link_title' => 'Persoonlijke Zorg',
	'mapdistrict' => 'uitgeest',
	
	'title' => 'Geesterheem',
	'vimeo' => '155702401',
	'adress' => 'uitgeestA1A2.php',
	'type' => 'woning',
	'type_alt' => 'single',
	'cookiecode' => 'UA1',
	'parent' => 'uitgeest',
	'children' => []
];

/*------------------------------ Gespecialiseerde Zorg ------------------------------*/

$uitgeestB1B2 = [
	'link_title' => 'Gespecialiseerde Zorg',
	'mapdistrict' => 'uitgeest',
	'title' => 'Geesterheem',
	'vimeo' => '155702403',
	'adress' => 'uitgeestB1B2.php',
	'type' => 'woning',
	'type_alt' => 'single',
	'cookiecode' => 'UB1',
	'parent' => 'uitgeest',
	'children' => []
];


/*------------------------------ Zonder Zorg ------------------------------*/

$uitgeestC1C2 = [
	'link_title' => 'Zonder Zorg',
	'mapdistrict' => 'uitgeest',
	'title' => 'Geesterheem',
	'vimeo' => '312698492',
	'adress' => 'uitgeestC1C2.php',
	'type' => 'woning',
	'type_alt' => 'single',
	'cookiecode' => 'UC1',
	'parent' => 'uitgeest',
	'children' => []
];


/*-----------------------------------------------------------------------------*/
/*                                   BERGEN                                   */
/*-----------------------------------------------------------------------------*/


$bergen = [
	'title' => 'Bergen',
	'mapdistrict' => 'bergen',
	'vimeo' => '312698579',
	'adress' => 'bergen.php',
	'type' => 'woning',
	'cookiecode' => 'U00',
	'parent' => 'gemeenten',
	'children' => [
	]
];

/*------------------------------ Persoonlijke Zorg ------------------------------*/

$bergenA1 = [
	'link_title' => 'Persoonlijke Zorg',
	'mapdistrict' => 'bergen',
	
	'title' => 'De Marke',
	'vimeo' => '155702401',
	'adress' => 'bergenA1.php',
	'type' => 'woning',
	'type_alt' => 'single',
	'cookiecode' => 'BGA1',
	'parent' => 'bergen',
	'children' => []
];



/*------------------------------ ------------------------------*/
/*------------------------------ ------------------------------*/
/*------------------------------ ------------------------------*/