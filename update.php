<?php 
include('koneksidb.php');


$nip = $_POST['nip'];
$n_depan = $_POST['nama_depan'];
$jk = $_POST['jk'];
$tlp = $_POST['telepon'];
$alamat = $_POST['alamat'];
$n_belakang = $_POST['nama_belakang'];
$foto = $_FILES['foto']['name'];

// cek jika ada foto dosen maka program dijalankan
if($foto !=""){
    // file gambar yg bisa diupload
    $ekstensi_diperbolehkan = array('png','jpg');
    // memsisahkan nama file dengan ekstensi yang diupload  
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak = rand(1,999);
    // menggabungkan angka acak dengan nama file
    $nama_foto_baru = $angka_acak.'-'.$foto;

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'foto/'.$nama_foto_baru);
        $query = "UPDATE dosen SET nip='$nip', nama_depan='$n_depan', jk='$jk', telepon='$tlp', alamat= '$alamat',
        nama_belakang='$n_belakang', foto='$nama_foto_baru'"; 
        $query .= "WHERE nip='$nip'";
        $result = mysqli_query($koneksi, $query);
   // periska query apakah ada error
        if(!$result){
            die ("Query Error TOLOL: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }else{
            //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Yeay Data Berhasil Di Tambahkan.'); window.location='index.php';</script>";
        }
        
    }else{
        echo "<script>alert('Foto wajib jpg atau png boss.');window.location='tambah.php;</script>";
    }
}else{
    $query = "UPDATE dosen SET nip='$nip', nama_depan='$n_depan', jk='$jk', telepon='$tlp', alamat= '$alamat', 
    nama_belakang='$n_belakang'"; 
    $query .= "WHERE nip='$nip'";
    $result = mysqli_query($koneksi,$query);
    if(!$result){
        die("Query ERROR TOLOL: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    }else{
        echo "<script>alert('Yeay Data Berhasil Di Tambahkan.'); window.location='index.php';</script>";
    }
}
?>