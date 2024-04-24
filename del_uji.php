<?php
 //koneksi ke database
    include ('koneksi.php');
    $id = $_GET['id'];
    mysqli_query($koneksi,"DELETE FROM tb_uji WHERE no='$id'");
    header('location:tb_uji.php');
?>  