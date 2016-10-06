<?php
$day = 1;
$dayName = '';
switch($day){
    case 1:
        $dayName = 'Monday';
        break;
        
    case 2:
        $dayName = 'Tuesday';
        break;
    
    case 3:
        $dayName = 'Wednesday';
        break;
        
    case 4:
        $dayName = 'Thursday';
        break;
    
    case 5:
        $dayName = 'Friday';
        break;
        
    case 6:
        $dayName = 'Saturday';
        break;
    
    case 7:
        $dayName = 'Sunday';
        break;
}

$lowerCaseDay = strtolower($dayName);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>switch</title>
</head>
<body>
    <p>nr: <?= $day ?></p>
    <p>day: <?= $lowerCaseDay ?></p>
    
</body>
</html>