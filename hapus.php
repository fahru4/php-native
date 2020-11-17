<?php 
include('koneksidb.php');
mysqli_query($koneksi, "DELETE FROM dosen WHERE nip='$_GET[nip]'");
header("location:http:/latihanphp/index.php");
?>