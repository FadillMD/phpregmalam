<?php
    include('koneksi.php');
    $query_view=mysqli_query($koneksi, "SELECT * from kategori");

?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Barang</title>
</head>
<body>
    <table class="table table-bordered" border="1 px" padding="1 px">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <?php 
        $no=1;
        while($tampil=mysqli_fetch_array($query_view)){?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $tampil['nama'];?></td>
                <td><?php echo $tampil['id_kategori'];?></td>
            </tr>
        <?php }?>
    </table>
</body>
</html>