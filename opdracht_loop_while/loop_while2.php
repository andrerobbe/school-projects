<?php

	$boodschappen =	array( "fruit","kaas","vlees","aardappelen" );
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>while loop 2</title>
</head>
<body>
    <ul>
        <?php $boodschapCount=0 ?>
        <?php while( isset( $boodschappen [ $boodschapCount ] ) ):  ?>
            <li><?= $boodschappen [ $boodschapCount ] ?></li>
            <?php $boodschapCount++ ?>
        <?php endwhile ?>
    </ul>
</body>
</html>