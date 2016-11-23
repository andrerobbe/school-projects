<?php

    session_start();

    if ( isset($_POST['submit']) ){
        $_SESSION['registrationData']['deel1']['email'] = $_POST['email'];
        $_SESSION['registrationData']['deel1']['nickname'] = $_POST['nickname'];
    }

    $registrationData['deel1'] = $_SESSION['registrationData']['deel1'];

    $straat = (isset( $_SESSION['registrationData']['deel2']['straat'])) ? $_SESSION['registrationData']['deel2']['straat'] : '';
    $nummer = (isset( $_SESSION['registrationData']['deel2']['nummer'])) ? $_SESSION['registrationData']['deel2']['nummer'] : '';
    $gemeente = (isset( $_SESSION['registrationData']['deel2']['gemeente'])) ? $_SESSION['registrationData']['deel2']['gemeente'] : '';
    $postcode = (isset( $_SESSION['registrationData']['deel2']['postcode'])) ? $_SESSION['registrationData']['deel2']['postcode'] : '';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sessions</title>
</head>
<body>
    <h1>sessions 2</h1>
    <a href="sessions.php?session=destroy">Destroy sessie</a>
    <ul>
    <?php foreach( $registrationData['deel1'] as $data => $value ):  ?>
        <li><?= $data ?>: <?= $value ?></li>
    <?php endforeach ?>
    </ul>

    <h2>Deel 2: adres</h2>

    <form action="sessions3.php" method="POST">
        <label id="straat">straat</label>
        <input for="straat" type="text" name="straat" placeholder="vul straat in ..." value="<?= $straat ?>" ><br>
        <label id="nummer">nummer</label>
        <input for="nummer" type="number" name="nummer" placeholder="vul nummer in ..." <?= $nummer ?>><br>
        <label id="gemeente">gemeente</label>
        <input for="gemeente" type="text" name="gemeente" placeholder="vul gemeente in ..." <?= $gemeente ?>><br>
        <label id="postcode">postcode</label>
        <input for="postcode" type="number" name="postcode" placeholder="vul postcode in ..." <?= $postcode ?>><br>

        <button type="submit">send</button>
    </form>



</body>
</html>