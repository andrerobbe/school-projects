<?php 
    clearstatcache();
    require_once("classes/HTMLbuilder.php");
    $body = array("body-partial.php","Home");

    if ( isset( $_GET["page"] ) ){
        $body[0]=$_GET["page"].".php";
        $body[1]=ucfirst(str_replace("body-","",$_GET["page"]));
    }

    $HTML = new HTMLBUILDER("header-partial.php",$body,"footer-partial.php");
    $HTML->buildHeader();
    $HTML->buildBody();
    $HTML->buildFooter();
?>