<?php
    require_once("classes/message.php");
    require_once("classes/ExceptionImproved.php");
    $MESSAGE = new MESSAGE();
    session_start();
    $mssg = "";
    $validcode = FALSE;
    $showform = TRUE;
    $createmessage = FALSE;

    try{
        if ( isset($_POST["submit"]) ){
            if ( isset($_POST["code"]) ){
                if ( strlen($_POST["code"]) == 8 ){
                    $validcode=TRUE;
                    $showform=FALSE;
                }
                else{
                    throw new Exception( "CODE LENGTH ERROR" );
                }
            }
            else{
                throw new Exception( "SUBMIT ERROR" );
            }
        }
    }
    catch (Exception $e) {
        $messagecode = $e->getMessage();
        $message = array();
        $createmessage=FALSE;
        switch ($messagecode) {
            case "CODE LENGTH ERROR":
                $message[0] = "De kortingscode heeft de foute lengte";
                $message[1] = "ERROR";
                $createmessage = TRUE;
                break;
            case "SUBMIT ERROR":
                $message[0] = "Het code veld bestaat niet meer. Er is met het formulier geknoeid!";
                $message[1] = "ERROR";
                break;

        }
        
        logToFile($message);
            if ($createmessage) {
                $MESSAGE->setMessage($message);
            }
        $mssg = $MESSAGE->getMessage();
    }

    function logToFile($message)
    {
        $file = "errors.txt";
        $date = "[".date("H:i:s d/m/Y")."]";
        $ip = $_SERVER['REMOTE_ADDR'];
        $type = " Type: [".$message[1]."]";
        $text = $message[0];
        $linetoadd = array($date,$ip,$type,$text,"\n\r");
        $errorline = implode("-",$linetoadd);
        file_put_contents($file, $errorline);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Errorhandeling</title>
	<style>
	body{
            font-family:Arial, Helvetica, sans-serif; 
            font-size:13px;
        }
        .success,.error{
            border: 1px solid;
            margin: 10px 0px;
            padding:15px 10px 15px 50px;
            background-repeat: no-repeat;
            background-position: 10px center;
        }
            .error {
            color: #D8000C;
            background-color: #FFBABA;
            background-image: url('error.png');
        }
        .success {
            color: #4F8A10;
            background-color: #DFF2BF;
            background-image:url('success.png');
        }
	</style>
</head>
<body>
    <?php if($validcode): ?>
        <p class="success">Danku! U kortingscode werd goedgekeurd</p>
    <?php endif ?>
    
    <?php if($showform): ?>
    <h1>Geef hier u kortingscode op!</h1>
        <?php if ($mssg!="") :?>
        <p class="error">De kortingscode is niet juist</p>
        <?php endif ?>
        <form action="opdracht-errorhandeling.php" method="post">
            <label for="code">U kortingscode:</label><br>
            <input type="text" name="code" id="code"><br>
            <button type="submit" name="submit">Verzenden</button>
        </form>
    <?php endif ?>
</body>
</html>