<?php
$hoeveelheidgeld=10000;
$JarenCounter=0;
$MaxAantalJaren=10;
function berekenRentevoet()
{
	global $hoeveelheidgeld;
	global $JarenCounter;
	global $MaxAantalJaren;
	if ($JarenCounter<$MaxAantalJaren) {
		$JarenCounter++;
		$Rente=$hoeveelheidgeld/12.5;
		$hoeveelheidgeld=round($hoeveelheidgeld+$Rente);
		echo "Na ". $JarenCounter ." jaar heeft hij " . $hoeveelheidgeld . "<br>";
		berekenRentevoet();
	}
}

berekenRentevoet();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recursive 1 en 2</title>
</head>
<body>
</body>
</html>