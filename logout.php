<?php 

session_start();

unset($_SESSION['iddosen']);
unset($_SESSION['usernamedosen']);
unset($_SESSION['namadosen']);

header("Location: index.php");

?>