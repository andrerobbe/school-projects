<?php

$dierenArray = array('panda', 'nijlpaard', 'cavia', 'muis', 'kip', 'varken', 'geit', 'spin', 'walvis', 'hert');
$teZoekenDier = "panda";

$arrayCount = count($dierenArray);
$arrayZoeken = in_array ($teZoekenDier, $dierenArray);
    
if ($arrayZoeken){
    $txt = $teZoekenDier . ' zit in de array.';
}
else {
    $txt = $teZoekenDier . ' zit niet in de array.';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>array functions</title>
</head>
<body>
  <h1>Oplossingen: array functions</h1>
   <p>In de dieren array zitten <?php echo $arrayCount ?> dieren.</p>
   <p><?php echo $txt ?></p>
    
</body>
</html>