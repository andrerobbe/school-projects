<?php

$array = array (8,7,8,7,3,2,1,2,4);
$uniqueArray = array_unique($array);
asort($uniqueArray);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>array functions</title>
</head>
<body>
   <h1>Oplossingen: array functions 3</h1>
    <?php var_dump($uniqueArray); ?>
</body>
</html>