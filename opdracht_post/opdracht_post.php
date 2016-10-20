<?php
    $password = "wasd";
    $username = "wasd";
    $msg = "Test";
    $form = true;
    $login = false;

    if( isset($_POST['submit']) ){
        if($_POST['user'] == $username && $_POST['password'] == $password){
            $msg="Welcome " . $username;
            $form = false;
            $login = true;
        }
        else{
            $msg="Oops, er is iets mis gegaan!";
            $login = true;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post</title>
</head>
<body>
    <?php if(!$login): ?>
        <h1>Inloggen</h1>
    <?php endif ?>
    <?php if($login): ?>
        <h2><?php echo $msg ?></h2>
    <?php endif ?>
    <?php if($form): ?>
       <form action="opdracht_post.php" method="post">
            <p><label for="user">Gebruikersnaam:</label></p>
            <p><input type="text" name="user" id="user"></p>
            <p><label for="password">Wachtwoord:</label></p>
            <p><input type="password" name="password" id="password"></p>
            <button type="submit" name="submit">Submit</button>
       </form>
   <?php endif ?>
   
</body>
</html>