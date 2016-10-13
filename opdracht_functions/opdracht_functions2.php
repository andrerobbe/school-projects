<?php
function drukArrayAf($array)
{
	for ($i=0; $i < count($array) ; $i++) { 
		echo "array [" . $i . "] heeft waarde: ". $array[$i] . "<br>";
	}
}

function drukDimensioneleArrayAf($array)
{
	for ($i=0; $i < count($array) ; $i++) { 
		for ($j=0; $j <count($array[$i]) ; $j++) { 
			echo "array [" . $j . "] heeft waarde: ". $array[$i][$j]. "<br>";
		}
	}
}

function validateHTML($html)
{
	if (strpos($html, "<html>")!==false && strpos($html, "</html>")!==false) {
		$bevatHTML=" bevat ";
	}
	else{
		$bevatHTML=" bevat geen ";
	}
	return $bevatHTML;
}

$array = array("kip","hond","goudvis","slang","varken");
$dimensioneleArray = array($dierMetPoten = array("hond","koe"),$dierZonderPoten = array("vis","slang"));
drukDimensioneleArrayAf($dimensioneleArray);

$html="<html>TEST</html>";
$bevatHTML=validateHTML($html);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions deel 2</title>
</head>
<body>
<h1>Oplossingen: functions 2</h1>
    <?php drukArrayAf($array) ?>
	<p>De html <?=$bevatHTML ?> html</p>
</body>
</html>