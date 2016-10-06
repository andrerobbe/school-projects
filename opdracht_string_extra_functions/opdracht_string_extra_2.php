<?php
$fruit = 'ananas';
$posLastA = strrpos($fruit,"a");
$fruitCapital = strtoupper($fruit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>str2</title>
</head>
<body>
   <p><?= $fruit ?></p>
   <p><?= $posLastA ?></p>
   <p><?= $fruitCapital ?></p>
    
</body>
</html>