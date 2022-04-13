<?php
session_start();
$username = $_POST['username'];


        $_SESSION['username'] = $username;
echo'Hello '.$_SESSION['username'];
?>
<link rel = "stylesheet" href = "login.css">
<br>
<a id = "value" href = "../conwaytest/conway_test.html">Let's play</a>