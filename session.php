<?php
if(empty($_SESSION['iddosen']) AND empty($_SESSION['usernamedosen'])){
	header('location:index.php');
}
?>