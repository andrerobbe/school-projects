<?php
$cijferArray = array('1', '2','3', '4', '5');
$result1 = $cijferArray[0] * $cijferArray[0];
$result2 = $cijferArray[1] * $cijferArray[1];
$result3 = $cijferArray[2] * $cijferArray[2];
$result4 = $cijferArray[3] * $cijferArray[3];
$result5 = $cijferArray[4] * $cijferArray[4];

$array2 = array('5','4','3','2','1');
$tel1 = $cijferArray[0] + $array2[0];
$tel2 = $cijferArray[1] + $array2[1];
$tel3 = $cijferArray[2] + $array2[2];
$tel4 = $cijferArray[3] + $array2[3];
$tel5 = $cijferArray[4] + $array2[4];


if ($result1 %2 != 0){
    echo 'result 1 = ' . $result1;
}
if ($result2 %2 != 0){
    echo 'result 2 = ' . $result2;
}
if ($result3 %2 != 0){
    echo 'result 3 = ' . $result3;
}
if ($result4 %2 != 0){
    echo 'result 4 = ' . $result4;
}
if ($result5 %2 != 0){
    echo 'result 5 = ' . $result5;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>array basis 2</title>
</head>
<body>
   <h1>Oplossingen: array basis 2</h1>
   
   <?php var_dump($cijferArray) ?>
   
    <p>optelling 1: <?= $tel1 ?></p>
    <p>optelling 2: <?= $tel2 ?></p>
    <p>optelling 3: <?= $tel3 ?></p>
    <p>optelling 4: <?= $tel4 ?></p>
    <p>optelling 5: <?= $tel5 ?></p>
</body>
</html>