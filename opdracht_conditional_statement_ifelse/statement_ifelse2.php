<?php
    $seconden = 123456789;
    $minuten =   60; 
    $uren =   60 * $minuten; 
    $dagen =   24 * $uren; 
    $weken =   7 * $dagen; 
    $maanden =   31 * $dagen; 
    $jaren =   365 * $dagen;
          
    $aantalMinuten = floor( $seconden / $minuten ); 
    $aantalUren = floor( $seconden / $uren );    
    $aantalDagen = floor( $seconden / $dagen ); 
    $aantalWeken = floor( $seconden / $weken ); 
    $aantalMaanden = floor( $seconden / $maanden ); 
    $aantalJaren = floor( $seconden / $jaren ); 
      
?> 
  
<!DOCTYPE html> 
<html> 
<head> 
    <title>ifelse2</title>
</head> 
<body>
   <h1>Oplossingen: ifelse statement 2</h1>   
    <p><?php echo $seconden ?> seconden =</p> 
  
    <ul> 
        <li>minuten: <?php echo $aantalMinuten ?></li> 
        <li>uren: <?php echo $aantalUren ?></li> 
        <li>dagen: <?php echo $aantalDagen ?></li> 
        <li>weken: <?php echo $aantalWeken ?></li> 
        <li>maanden (31): <?php echo $aantalMaanden ?></li> 
        <li>jaren (365): <?php echo $aantalJaren ?></li> 
    </ul> 
  
</body> 
</html>