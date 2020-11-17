<?php 
$host = "localhost";
$user = "root";
$pass = "";
$namadb = "coba";
$koneksi=mysqli_connect($host,$user,$pass,$namadb);
if ($koneksi->connect_error){
    die("Database gagal terhubung: " .$koneksi_error);
}

?>