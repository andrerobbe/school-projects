<?php
function functie1($toseek)
{
	$aantalKeer=0;
	global $md5HashKeyArray;
	for ($i=0; $i<count($md5HashKeyArray) ; $i++) { 
		if ($md5HashKeyArray[$i]==$toseek) {
			$aantalKeer++;
		}
	}
	$percentage=($aantalKeer/count($md5HashKeyArray))*100;
	return $percentage;
}
function functie2($toseek,$array)
{
	$aantalKeer=0;
	for ($i=0; $i<count($array) ; $i++) { 
		if ($array[$i]==$toseek) {
			$aantalKeer++;
		}
	}
	$percentage=($aantalKeer/count($array))*100;
	return $percentage;
}
function functie3($toseek,$string)
{
	$myArray=str_split($string);
	$aantalKeer=0;
	for ($i=0; $i<count($myArray) ; $i++) { 
		if ($myArray[$i]==$toseek) {
			$aantalKeer++;
		}
	}
	$percentage=($aantalKeer/count($myArray))*100;
	return $percentage;
}

$md5HashKey="d1fa402db91a7a93c4f414b8278ce073";
$md5HashKeyArray=str_split($md5HashKey);
$callback1 = 'functie1';
$callback2 = 'functie2';
$callback3 = 'functie3';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions GV deel 1</title>
</head>
<body>
   <h1>Oplossingen: functions gevorderd</h1>
    <p>Functie 1: needle 2 komt <?php echo $callback1(2) ?>% voor in de hash key <?=$md5HashKey ?></p>
	<p>Functie 2: needle 8 komt <?php echo $callback2(8,$md5HashKeyArray) ?>% voor in de hash key <?=$md5HashKey ?></p>
	<p>Functie 3: needle a komt <?php echo $callback3("a",$md5HashKey) ?>% voor in de hash key <?=$md5HashKey ?></p>
	
</body>
</html>