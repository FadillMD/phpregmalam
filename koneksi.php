<?php

$server="localhost";
$user="root";
$password="";
$database="phpregmalam";

$koneksi=mysqli_connect($server,$user,$password,$database);

if($koneksi){
    echo "Koneksi Sukses.";
}else{
    echo "Koneksi Gagal.";
}


?>