<?php
    include 'koneksi.php';

    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_kegiatan where id_kegiatan = '$id'");
    while($data = mysqli_fetch_array($query)){
    ?>
    
    <option value="<?php echo $data['id_kegiatan'] ?>"><?php echo $data['kegiatan'] ?></option>
    <?php
    }
    ?>