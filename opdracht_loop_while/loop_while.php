<?php

	$getallen =	array();
	$aantalGetallen	= 100;
	$getal = 0;

	while ( $getal < $aantalGetallen )
	{
		$getallen[]	=	$getal;
		 ++$getal;
	}
	$getallenMetKomma	=	implode( ', ', $getallen );





	$getal = 0;
	$getallen2 = array();

	while ( $getal < $aantalGetallen )
	{
		if ( $getal % 3 == 0 && $getal > 40 && $getal < 80 )
		{
			$getallen2[] = $getal;
		}
		++$getal;
	}
	$getallenReeks2	=	implode( ', ', $getallen2 );
?>	

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>while loop</title>

</head>
<body>
    <h1>Oplossingen: loop while</h1>

    <p><?= $getallenMetKomma ?></p>

    <p><?= $getallenReeks2 ?></p>

</body>
</html>


