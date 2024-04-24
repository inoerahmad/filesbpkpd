<html>
<link rel="stylesheet" href="style_tbbrg.css">
<body>
    <div class="sidebar"></div>
    <div class="container">
    <h3> Tabel Data Barang </h3>      
    <table border="1">
        <tr>
            <th width="50">No.</th>
            <th width="250">Nama Barang</th>
            <th width="100">Qty</th>
            <th width="180">Harga</th>
            <th colspan="2">Aksi</th>
        </tr>   
        <?php
        //koneksi ke database
        $koneksi = new mysqli("localhost","root","","db_databrg");
        //menampilkan data
        $no = 1;
        $tqty=0;
        $total=0;
        $data = mysqli_query($koneksi,"SELECT * FROM tb_brg");
        while($d = mysqli_fetch_array($data)){
            $tqty += $d['Qty'];
            $total += $d['Harga'];
        ?>      
        <tr>
            <td><?php echo $no++; ?>.</td>
            <td><?php echo $d['Nama Barang']; ?></td>
            <td><?php echo $d['Qty']; ?></td>
            <td><?php echo number_format($d['Harga']); ?></td>
            <td><a href="#">ubah</td>
            <td><a href="hapusdata.php?id=<?php echo $d['Nomor'];?>"</a>hapus</a></td>    
        </tr>

        <?php } ?>
        <tr>
            <td colspan="2"><b>Total</b></td>
            <td><b><?php echo $tqty; ?></b></td>
            <td><b><?php echo number_format($total); ?></b></td>
        </tr>    
    </table>
</div>    
</body>
</html>