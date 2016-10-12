<?php
    $getal = 68;
    $goed = true;
    $laag = 0;
    $hoog = 10;
    $txt = '';
    if ( $getal >= 10 && $getal < 20 ){
        $laag = 10;
        $hoog = 20;
    }
    elseif ( $getal >= 20 && $getal < 30 ){
        $laag = 20;
        $hoog = 30;
    }
    elseif ( $getal >= 30 && $getal < 40 ){
        $laag = 30;
        $hoog = 40;
    }
    elseif ( $getal >= 40 && $getal < 50 ){
        $laag = 40;
        $hoog = 50;
    }
    elseif ( $getal >= 50 && $getal < 60 ){
        $laag = 50;
        $hoog = 60;
    }
    elseif ( $getal >= 60 && $getal < 70 ){
        $laag = 60;
        $hoog = 70;
    }
    elseif ( $getal >= 70 && $getal < 80 ){
        $laag = 70;
        $hoog = 80;
    }
    elseif ( $getal >= 80 && $getal < 90 ){
        $laag = 80;
        $hoog = 90;
    }
    elseif ( $getal >= 90 && $getal < 100 ){
        $laag = 90;
        $hoog = 100;
    }
    else {
        $goed = false;
    }


	if ( $goed == true )
	{
		$txt = $getal . ' ligt tussen '. $laag . ' en ' . $hoog;
	}
	else
	{
		$txt = $getal . ' ligt niet tussen 0 en 100';	
	}

	$backwardsTxt = strrev($txt);
?>

<!DOCTYPE html>
<html>
<head>
    <title>if else if</title>
</head>
<body>
   <?php echo $backwardsTxt ?>
</body>
</html>