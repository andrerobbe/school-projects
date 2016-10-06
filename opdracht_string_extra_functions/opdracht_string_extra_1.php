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
    <p>fruit: <?= $fruit ?></p>
    <p>chars: <?= $fruitLengte ?></p>
    <p>positie o: <?= $fruitPositieO ?></p>
</head>
<body>
    
</body>
</html>