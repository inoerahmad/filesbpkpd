<?php
 //koneksi ke database
    include ('koneksi.php');
    $id = $_GET['id'];
    mysqli_query($koneksi,"DELETE FROM tb_brg WHERE Nomor='$id'");
    header('location:tb_barang.php');
?>    