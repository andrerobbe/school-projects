<?php

$dieren[] = 'Vis';
$dieren[] = 'Leeuw';
$dieren[] = 'Tijger';
$dieren[] = 'Hond';
$dieren[] = 'Kat';
$dieren[] = 'Paard';
$dieren[] = 'Aap';
$dieren[] = 'Slang';
$dieren[] = 'Orka';
$dieren[] = 'Tor';

$dierenArray = array('panda', 'nijlpaard', 'cavia', 'muis', 'kip', 'varken', 'geit', 'spin', 'walvis', 'hert');

$voertuigen['landvoertuigen'] = array('fiets', 'auto');
$voertuigen['watervoertuigen'] = array('boot', 'jetski');
$voertuigen['luchtvoertuigen'] = array('vliegtuig', 'luchtbalon');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>array basis 1</title>
</head>
<body>
   <h1>Oplossingen: array basis 1</h1>
   <?php var_dump($voertuigen) ?>
    
</body>
</html>