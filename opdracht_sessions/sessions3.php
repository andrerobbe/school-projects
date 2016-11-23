<?php

	session_start();

    if ( isset($_POST['submit']) ){
        $_SESSION['registrationData']['deel2']['straat'] = $_POST['straat'];
        $_SESSION['registrationData']['deel2']['nummer'] = $_POST['nummer'];
        $_SESSION['registrationData']['deel2']['gemeente'] = $_POST['gemeente'];
        $_SESSION['registrationData']['deel2']['postcode'] = $_POST['postcode'];
    }

    $registrationData = $_SESSION['registrationData'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>sessions 3</title>
</head>
<body>
    <h1>sessions 3</h1>
    <a href="sessions.php?session=destroy">Destroy sessie</a>
    <h2>Overzicht</h2>

    <ul>
        <?php foreach( $registrationData as $deelKey => $deelArray ):  ?>
            <?php foreach( $deelArray as $data => $value ):  ?>
                <li>
                    <?= $data ?>: <?= $value ?>
                    <p><a href="phpoefening-021-<?= $deelKey ?>.php?focus=<?= $data ?>">wijzig</a></p>
                </li>
            <?php endforeach ?>
        <?php endforeach ?>
    </ul>
</body>
</html>