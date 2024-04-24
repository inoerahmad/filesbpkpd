<html>
<link rel="stylesheet" href="style_tbbrg.css">
<style>
    table th{
        text-align:center;
    }
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
    <a href="dashboard.html"><p align="left">back to menu</a></p>
    <center><h1>Data PPTK</h1></center>
</head>
<body>
    
<table border="1" style="margin-left:auto;margin-right:auto">
        <tr>
        <button type="submit" class="btn btn-primary">Add</button>   
         <th width="50">No.</th>
         <th width="250">PPTK</th>
         <th width="100">Sub Kegiatan</th>
         <th width="120">Metode</th>
         <th width="120">Nominal</th>
         <th width="120">Rekening Belanja</th>
         <th width="120">Tanggal</th>
         <th width="120">Keterangan</th>
         <th colspan="2">Aksi</th>
        </tr>   
        <?php
        //koneksi ke database
        $koneksi = new mysqli("localhost","root","","db_databrg");
        //menampilkan data
        $data = mysqli_query($koneksi,"SELECT * FROM tb_uji");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
            <td><?php echo $d['no'];?></td>
            <td><?php echo $d['pptk']; ?></td>
            <td><?php echo $d['subkegiatan']; ?></td>
            <td><?php echo $d['metode']; ?></td>
            <td><?php echo number_format ($d['nominal']); ?></td>
            <td><?php echo $d['rekbelanja']; ?></td>
            <td><?php echo $d['tanggal']; ?></td>
            <td><?php echo $d['keterangan']; ?></td>
            <td><a href="#" class="btn btn-warning" title=""><i class="fa fa-edit"></i></a></td>
            <td><a href="del_uji.php?id=<?php echo $d['no'];?>" class="btn btn-danger" title=""><i class="fa fa-trash"></i></a></td>    
        </tr>

        <?php } ?>
</body>        
</html>    