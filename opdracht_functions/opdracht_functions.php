<?php

function Som($getal1,$getal2)
{
	$som=$getal1+$getal2;
	return $som;
}
function factor($factor1,$factor2)
{
	$product=$factor1*$factor2;
	return $product;
}
function isEven($getal)
{
	if ($getal%2==0) {
		$even="even";
	}
	else{
		$even="oneven";
	}
	return $even;
}
function capitalAndLen($str)
{
	$results = array();
	$results[0]=strlen($str);
	$results[1]=strtoupper($str);
	return $results;
}

$nummer1=2;
$nummer2=3;
$str="test";
$som=Som($nummer1,$nummer2);
$product=factor($nummer1,$nummer2);
$even=isEven($nummer1);
$results=capitalAndLen($str);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions deel 1</title>
</head>
<body>
    <h1>Oplossingen: functions</h1>
	<p>Som van <?=$nummer1?> en <?=$nummer2 ?>:<?=$som ?></p>
	<p>Product van <?=$nummer1?> en <?=$nummer2 ?>: <?=$product ?></p>
	<p><?=$nummer1?>: <?=$even ?></p>
	<p>str in hoofletters: <?=$results[1] ?></p>
	<p>Lengte str: <?=$results[0] ?></p>
</body>
</html>