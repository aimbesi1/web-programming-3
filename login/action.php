<?php
session_start();
$username = $_POST['username'];


        $_SESSION['username'] = $username;
header("Location: ../game/game.html");
return;
echo'Hello '.$_SESSION['username'];


?>
