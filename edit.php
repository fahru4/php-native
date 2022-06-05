<?php 
include('koneksidb.php');
include_once "welcome.php";

if(isset($_GET['nip'])){
    $nip = ($_GET['nip']);

    $query = "SELECT * FROM dosen WHERE nip='$nip'";
    $result = mysqli_query($koneksi, $query);

    if(!$result){
        die("Query Error TOLOL: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);
    if(!count($data)){
        echo "<script>alert('Data Kosong');window.location='index.php';</script>";
    }else{
        echo "<script>alert('Masukan Data nip');window.location='index.php;</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update DataKu</title>
</head>

<body>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <input name="nip" value="<?php echo $data['id']; ?>" hidden />
        <table>
            <tr>
                <td>NIP</td>
                <td><input type="text" name="nip" value="<?php echo $data['nip']; ?>" readonly /></td>
            </tr>
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="nama_depan" value="<?php echo $data['nama_depan'];?>" /></td>
            </tr>
            <tr>
                <td>Nama Belakang</td>
                <td><input type="text" name="nama_belakang" value="<?php echo $data['nama_belakang'];?>" /></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jk">
                        <option value="P" <?php if ($data['jk'] == "P")
                        {echo "selected";}; ?>>Perempuan</option>
                        <option value="L" <?php if($data['jk'] == "L")
                        {echo "selected";}; ?>>Laki-Laki</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telepon" value="<?php echo $data['telepon'];?>" /></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><textarea type="text" name="alamat"> <?php echo $data['alamat'];?></textarea></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><img src="foto/<?php echo $data['foto']; ?>" style=" width:50px;">
                    <input type="file" name="foto" />
                </td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>

</html>