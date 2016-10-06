<?php
$voornaam = 'Maurits';
$achternaam = 'Robbe';
$volledigenaam = $voornaam . ' ' . $achternaam;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>concatenate</title>
</head>
<body>
   <h1>opl: concatenate</h1>
   <p><?= $voornaam ?></p>
   <p><?= $achternaam ?></p>
   <p><?= $volledigenaam ?></p>
    
</body>
</html>