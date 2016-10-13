<?php
$pigHealth=5;
$maxThrows=8;
function calculateHit() {
	global $pigHealth;
    static $result;
	$raakKans=rand(0,100);
	if ($raakKans >= 40) {
		$raak = true;
	}
	else{
		$raak = false;
	}
    
	if ( $raak ) {
		$pigHealth--;        
		echo "Raak. Er zijn nog maar" . $pigHealth . "varkens over <br>";		
	}
	else{
		echo  "Mis. Nog " . $pigHealth . "varkens in het team <br>";
	}
    return $result;
}
function launchAngryBird()
{
	global $pigHealth;
	global $maxThrows;
	static $aantalKeer;
	if ($aantalKeer<$maxThrows && $pigHealth>0) {
        calculateHit();
		$aantalKeer++;
        launchAngryBird();
	}
	if ($pigHealth == 0 && $aantalKeer <= $maxThrows) {
		echo "You won!<br>";
	}
	if ($pigHealth > 0 && $aantalKeer >= $maxThrows) {
		echo "You lost!<br>";
	}
}

$callback = 'launchAngryBird';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Angry Birds</title>
</head>
<body>
    <h1>Oplossingen: advanced functions 2</h1>
    <?php echo $callback() ?>	
</body>
</html>