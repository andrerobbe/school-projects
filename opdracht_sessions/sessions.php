<?php
    session_start();

    $email = (isset($_SESSION['registrationData']['deel1']['email'])) ? $_SESSION['registrationData']['deel1']['email'] : '';
	$nickname =	(isset($_SESSION['registrationData']['deel1']['nickname'])) ? $_SESSION['registrationData']['deel1']['nickname'] : '';

    if ( isset($_GET['session']) ){
        if ( $_GET['session']  == 'destroy' ){
            session_destroy( );
            header('location: sessions.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sessions</title>
</head>
<body>
   <h1>Sessions</h1>
   <a href="sessions.php?session=destroy">Destroy sessie</a>
   <h2>Deel 1: registratie</h2>
    <form action="sessions2.php" method="post">
        <label id="email">e-mail</label>
        <input for="email" type="email" name="email" placeholder="vul email in ..." value="<?= $email ?>" ><br>
        <label id="nick">nickname</label>
        <input for="nick" type="text" name="nick" placeholder="vul nickname in ..." <?= $nickname ?>>
        <button type="submit">send</button>
        
    </form>
</body>
</html>