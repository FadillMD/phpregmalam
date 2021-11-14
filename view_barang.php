<?php
include('koneksi.php');
session_start();
if(!($_SESSION['username'])){
	echo "<SCRIPT>alert('silahkan login terlebih dahulu');window.location='index.php'</SCRIPT>";
}
$kueri_tampil=mysqli_query($koneksi, "SELECT * from barang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>View Barang</title>
</head>
<body>
<div class="tabel">
<center><?php 
if(	$_SESSION['level'] == "admin"){
    echo '<a href="input_barang.php">Tambah Barang</a>';
}?> <a href="home.php">Halaman Utama</a></center>
<br>
<table align="center" border="1 px">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>ID Barang</th>
            <th>ID Kategori</th>
            <?php if($_SESSION['level'] == "admin"){ echo "<th colspan='2'>Aksi</th>";}?>
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
            <?php if($_SESSION['level'] == "admin"){ echo '<td><a href="edit_barang.php?id_barang='.$tampil['id_barang'].'">Edit</a></td>'; echo '<td><a href="hapus_barang.php?id_barang='.$tampil['id_barang'].'">Hapus</a></td>';}?>
        </tr>
    <?php }?>
</table>
</div>
</body>
</html>