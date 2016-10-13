<?php
$text=file_get_contents("text-file.txt");
$textlowwer=strtolower($text);
$count=count_chars($textlowwer);
foreach (count_chars($textlowwer, 1) as $i => $val) {
   echo "Er was $val keer  \"" , chr($i) , "\" in de tekst." . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foreach deel 2</title>
</head>
<body>
    <h1>
        Oplossingen: foreach loop2
    </h1>
	
</body>
</html>