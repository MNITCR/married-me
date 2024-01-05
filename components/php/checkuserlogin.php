<?php session_start();
if(!isset($_SESSION["userid"])){
    header("Location: /married-me/views/singin.view.php");
}?>
