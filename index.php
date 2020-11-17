<?php 
include('koneksidb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Awal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="belajar.css">
</head>

<body>
    <a href="tambah.php"><input type="button" class="btn btn-primary" value="Tambah Data"></a>
    <table class="table-striped table-dark" width='80%' border=1>
        <thead>
            <tr>
                <th>NO</th>
                <th>Nip</th>
                <th>FOTO</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        
        $query = "SELECT * FROM dosen ORDER BY nama_depan ASC"; 
        $result = mysqli_query($koneksi, $query);
        if(!$result){
            die("Query Error TOLOL: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }

        $no = 1;
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nip']; ?></td>
                <td><img src="foto/<?php echo $row['foto'];?>" style="width:50px;"></td>
                <td><?php echo $row['nama_depan']; ?></td>
                <td><?php echo $row['nama_belakang']; ?></td>
                <td><?php echo $row['jk']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['telepon']; ?></td>
                <td>
                    <a href="edit.php?nip=<?php echo $row['nip']; ?>">Edit</a>
                    <a href="hapus.php?nip=<?php echo $row['nip']; ?>"
                        onclick="return confirm('Hapus Gak Yaaa')">Hapus</a>
                </td>
            </tr>

            <?php
        $no++; //untuk nomor urut terus bertambah 1
    }
        ?>
        </tbody>
    </table>
</body>

</html>