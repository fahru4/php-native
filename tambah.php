<?php 
include('koneksidb.php');
// <?php include "atas.php";
include_once "welcome.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <form action="simpan.php" method="POST" enctype="multipart/form-data">
        <table>
            <h3>Tambah Data Dosen</h3>
            <tr>
                <td>NIP </td>
                <td><input type="number" name="nip" </td>
            </tr>
            <tr>
                <td>Nama Depan </td>
                <td><input type="text" name="nama_depan" </td>
            </tr>
            <tr>
                <td>Nama Belakang</td>
                <td><input type="text" name="nama_belakang" </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><select name="jk">
                        <option value="P">Perempuan</option>
                        <option value="L">Laki-Laki</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea class="form-control" name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="number" name="telepon"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto"> </td>
            </tr>
            <td><input type="submit" value="simpan"></td>
            <td><a href="#"><input type="button" value="batal"></td>
        </table>
    </form>
</body>

</html>