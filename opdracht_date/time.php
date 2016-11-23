<?php
   setlocale( 'LC_ALL', 'nld_nld' );
    $time = mktime("22","35","25","01","21","1904");
    $time_fix = strftime('%d %B %Y, %H:%M:%S %p', $time);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date</title>
</head>
<body>
  <h1>date oplossing:</h1>
   <?php echo $time_fix ?>
    
</body>
</html>