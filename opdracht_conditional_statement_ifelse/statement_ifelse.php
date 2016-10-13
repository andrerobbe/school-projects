<?php
    $jaartal = 1500;

	$schrikkeljaar = "Nee";

	if ( ( ( $jaartal % 4 == 0 ) && ( $jaartal % 100 != 0 ) ) || ( $jaartal % 400 == 0 )  )
	{
		$schrikkeljaar = "Ja";
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>if-else</title>
</head>
<body>
  <h1>Oplossingen: ifelse statement</h1>
   <p>is <?= $jaartal ?> een schrikkelaar? <?php echo $schrikkeljaar ?></p>    
</body>
</html>