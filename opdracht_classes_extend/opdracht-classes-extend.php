<?php 
    require_once("classes/Animal.php");
    require_once("classes/Leeuw.php");
    require_once("classes/Zebra.php");

    $Hond = new ANIMAL("hond","male",100);
    $Kat = new ANIMAL("kat","female",45);
    $Cavia = new ANIMAL("cavia","male",80);

    $Kat->changeHealth(5);
    $Hond->changeHealth(-10);

    $Scar = new LEEUW(50,"male","scar","Kenia Lion");
    $Simba = new LEEUW(45,"male","simba","Congo Lion");
    $Zeke = new ZEBRA(15,"female","zeke","Quagga");
    $Zana = new ZEBRA(12,"female","zana","Selous");
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<title>Classes extend</title>
</head>
<body>
 	<h1>Animal Class</h1>
 	<p><?= $Hond->getName(); ?> is van het geslacht <?= $Hond->getGender() ?> en heeft <?= $Hond->getHealth(); ?> health (special move: <?= $Hond->doSpecialMove() ?> )</p>
 	<p><?= $Kat->getName(); ?> is van het geslacht <?= $Kat->getGender() ?> en heeft <?= $Kat->getHealth(); ?> health (special move: <?= $Kat->doSpecialMove() ?> )</p>
 	<p><?= $Cavia->getName(); ?> is van het geslacht <?= $Cavia->getGender() ?> en heeft <?= $Cavia->getHealth(); ?> health (special move: <?= $Cavia->doSpecialMove() ?> ) </p>
 	
 	<h1>Leeuw</h1>
 	<p>De speciale move van <?= $Scar->getName(); ?> (soort: <?=$Scar->getSpecies(); ?>) is: <?=$Scar->doSpecialMove(); ?></p>
 	<p>De speciale move van <?= $Simba->getName(); ?> (soort: <?=$Simba->getSpecies(); ?>) is: <?=$Simba->doSpecialMove(); ?></p>
 	
 	<h1>Zebra</h1>
 	<p>De speciale move van <?= $Zeke->getName(); ?> (soort: <?=$Zeke->getSpecies(); ?>) is: <?=$Zeke->doSpecialMove(); ?></p>
 	<p>De speciale move van <?= $Zana->getName(); ?> (soort: <?=$Zana->getSpecies(); ?>) is: <?=$Zana->doSpecialMove(); ?></p>
</body>
</html>