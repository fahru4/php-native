<?php
include_once "koneksidb.php";

$user = $_POST['username'];
$pass = md5($_POST['password']);
$sql = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$b=mysqli_fetch_array($login);
if($ketemu>0){
	session_start();
	$_SESSION['iddosen'] 		= $b['id'];
	$_SESSION['usernamedosen']		= $b['username'];
	$_SESSION['namadosen']		= $b['nama_depan'];
	
	header('location: welcome.php');
}else{
	include "index.php";
	echo '<script language="javascript">';
		echo 'alert ("Username/Password ada yang salah, atau akun anda belum Aktif")';
	echo '</script>';
}
?>
