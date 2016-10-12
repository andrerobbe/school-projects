<?php
    $getal 	= 	3; 
	$day 	=	'';
          
    if ( $getal == 1 ) 
    { 
        $day = 'maandag'; 
    } 
      
    if ( $getal == 2 ) 
    { 
        $day = 'dinsdag'; 
    } 
      
    if ( $getal == 3 ) 
    { 
        $day = 'woensdag'; 
    } 
      
    if ( $getal == 4 ) 
    { 
        $day = 'donderdag'; 
    } 
      
    if ( $getal == 5 ) 
    { 
        $day = 'vrijdag'; 
    } 
      
    if ( $getal == 6 ) 
    { 
        $day = 'zaterdag'; 
    } 
      
    if ( $getal == 7 ) 
    { 
        $day = 'zondag'; 
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>if statement</title>
</head>
<body>
   <p>Dag "<?php echo $getal ?>" is: <?= $day ?></p>
    
</body>
</html>