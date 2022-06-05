<?php
session_start();
include_once "session.php";
$modul=(isset($_GET['m']))?$_GET['m']:"welcome";
$jawal="Guru  | SMA Triguna Utama";
switch($modul){
	case 'welcome2': default: include "welcome2.php"; break;
	case 'tambah': include "tambah.php"; break;


}

?>
