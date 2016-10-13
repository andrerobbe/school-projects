<?php
    $fruit = 'kokosnoot';
    $fruitLengte = strlen($fruit);
    $fruitPositieO = strpos($fruit,"o");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>string1</title>
</head>
<body>
    <h1>Oplossingen: string extra</h1>
   <p>fruit: <?= $fruit ?></p>
    <p>chars: <?= $fruitLengte ?></p>
    <p>positie o: <?= $fruitPositieO ?></p>
    
</body>
</html>