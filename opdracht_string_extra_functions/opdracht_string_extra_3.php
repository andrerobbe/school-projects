<?php
$lettertje = 'e';
$cijfertje = 3;
$langsteWoord = 'zandzeepsodemineralenwatersteenstralen';

$replaced = str_replace($lettertje, $cijfertje, $langsteWoord);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>str3</title>
</head>
<body>
  <h1>Oplossingen: string extra3</h1>
   <p><?= $replaced ?></p>    
</body>
</html>