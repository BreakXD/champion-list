<?php

$version = '10.25';

$urlchamp = 'http://ddragon.leagueoflegends.com/cdn/'.$version.'.1/data/en_US/champion.json'; 

$champsjson = file_get_contents($urlchamp);

$champs = json_decode($champsjson, true);

$champsdata = $champs['data'];

$numchamps = count($champsdata);


$values = array_values($champsdata);


for($i = 0;$i < $numchamps; $i++){
	$champname = $champsdata[$values[$i]['id']]['id'];
	$botname = $champname.' Script';

	echo (htmlentities($champname).'<br>');

}



?>
