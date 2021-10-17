<?php
include('koneksi.php');
$kueri_tampil=mysqli_query($koneksi, "SELECT * from barang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Tabel barang</title>
</head>
<body>
    <table border="1 px">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>ID Barang</th>
                <th>ID Kategori</th>
            </tr>
        </thead>
        <?php
        $no=1;
        while($tampil=mysqli_fetch_array($kueri_tampil)){?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $tampil['nama'];?></td>
                <td><?php echo $tampil['id_barang'];?></td>
                <td><?php echo $tampil['id_kategori'];?></td>
            </tr>
        <?php }?>
    </table>
</body>
</html>