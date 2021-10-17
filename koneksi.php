<?php

$koneksi=mysqli_connect("localhost","root","12","phpregmalam");

if($koneksi){
    echo "Koneksi Sukses.";
}else{
    echo "Koneksi Gagal.";
}

?>