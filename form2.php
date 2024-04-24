<?php
//insert to database
require 'koneksi.php';
if(isset($_POST["Simpan"])){
    $pptk = $_POST["pptk"];
    $subkegiatan = $_POST["sub_kegiatan"];
    $metode = $_POST["metode"];
    $nominal = $_POST["nominal"];
    $rekbelanja = $_POST["rbelanja"];
    $tanggal = $_POST["tgl"];
    $keterangan = $_POST["tarea"];

    $query =  "INSERT INTO tb_uji VALUES('', '$pptk', '$subkegiatan', '$metode', '$nominal', '$rekbelanja', '$tanggal', '$keterangan')";
    mysqli_query($koneksi, $query);
    echo
    "<script> alert('Data Berhasil Disimpan!');</script>";    
}
?>
<html>
    <style>
                h1{
                    text-align:center;
                }
                table{
                    margin-left:auto;
                    margin-right:auto;
                    background-color:#FFCD42;
                }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
    <head>
    <a href="dashboard.html"><p align="left">back to menu</a></p>
    <h1> Form Belanja</h1>
    </head>
    <body>
        <form class="" action="" method="post" autocomplete="off">
        <table>
            <tr>
                <td>PPTK</td>
                <td>:</td>
                <td><input type="text" name="pptk" placeholder="Nama PPTK" list="pptk" class="" style="max-width=50%">
                <datalist id="pptk">
                <option value="Yuli Setyawati Dwi W.U, S.Sos">
                <option value="Sri Mulyani, SE,M.M">
                <option value="Jenni Retno Wahjuni, SE, M.M">
                <option value="Indah Yuniar, SE">
                <option value="Auliansyah Lady. M, SE, M.M">
                <option value="Mu'minatush Shalihatul Aarifah , SE, MM">
                <option value="Prapti Andriani, SE">
                <option value="Sukarji, SH">
                <option value="Mulyono, SE, M.M">
                <option value="Nurul Hidayati, SE, M.M">
                <option value="Muhammad Khoriri, SE">
                <option value="Sanca Dwi Anggoro, S.Kom, M.M">
                <option value="Samiadi, S.Sos">
                </datalist>    
            </td>
            </tr>
            <tr>
                <td>Sub Kegiatan</td>
                <td>:</td>
                <td><input type="text" name="sub_kegiatan" placeholder="Sub Kegiatan" list="sub_kegiatan" style="max-width=50%">
                <datalist id="sub_kegiatan">
                <option value="Penyusunan Dokumen Perencanaan Perangkat Daera">
                <option value="Evaluasi Kinerja Perangkat Daerah">
                <option value="Penyediaan Gaji dan Tunjangan ASN">
                <option value="Penyediaan Administrasi Pelaksanaan Tugas ASN">
                <option value="Pendidikan dan Pelatihan Pegawai Berdasarkan Tugas dan Fungsi">
                <option value="Penyediaan Komponen Instalasi Listrik/Penerangan Bangunan Kantor">
                <option value="Penyediaan Peralatan dan Perelengkapan Kantor">
                <option value="Penyediaan Peralatan Rumah Tangga">
                <option value="Penyediaan Bahan Logistik Kantor">
                <option value="Penyediaan Barang Cetakan dan Penggandaan">
                <option value="Fasilitas Kunjungan Tamu">
                <option value="Penyelenggaraan Rapat Koordinasi dan Konsultasi SKPD">
                <option value="Pengadaan Kendaraan Perorangan Dinas atau Kendaraan Dinas Jabatan">
                <option value="Pengadaan Kendaraan Dinas Operasional atau Lapangan">
                <option value="Pengadaan Mebel">
                <option value="Pengadaan Sarana dan Prasarana Gedung Kantor atau Bangunan Lainnya">
                <option value="Penyediaan Jasa Komunikasi, Sumber daya air dan Listrik">
                <option value="Penyediaan Jasa Perlatan dan Perlengkapan Kantor">
                <option value="Penyediaan Jasa dan Pelayanan Umum Kantor">
                <option value="Penyediaan Jasa Pemeliharaan Biaya Pemeliharaan dan Pajak Kendaraan Dinas atau Kendaraan Dinas Jabatan">
                <option value="Penyediaan Jasa Pemeliharaan, Biaya Pemeliharaan, Pajak, dan Perizinan Kendaraan Dinas Operasional atau Lapangan">
                 <option value="Pemeliharaan Mebel">
                 <option value="Pemeliharaan Peralatan dan Mesin Lainnya">
                 <option value="Pemeliharaan/Rehabilitasi Gedung Kantor dan Bangunan Lainnya">
                 <option value="Koordinasi dan Penyusunan KUA dan PPAS">
                 <option value="Koordinasi dan Penyusunan Perubahan KUA dan Perubahan PPAS">
                    
                </datalist>    
            </td>
            </tr>
            <tr>
                <td>Metode</td>
                <td>:</td>
                <td><select id="metode" name="metode" class="mtd" style="max-width=50%" onchange="if(this.selectedIndex==1||this.selectedIndex==2||this.selectedIndex==3||this.selectedIndex==4){document.getElementById('nom').style.display =''} else{document.getElementById('nom').style.display ='none'};">
                <option value="">--SELECT--</option>
                <option value="LS">LS</option>
                <option value="GU">GU</option>
                <option value="UP">UP</option>
                <option vale="TU">TU</option></td>
            </tr>
            <tr id="nom" style="display:none;">
                <td>&nbsp;</td>            
                <td>&nbsp;</td>
                <td><input type="text" name="nominal" id="nominal" placeholder="0" class="" style="max-width=50%"></td>
            </tr>    
            <tr>
                <td>Rekening Belanja</td>
                <td>:</td>
                <td><input type="text" name="rbelanja" placeholder="Rekening Belanja" class="" style="max-width=50%" require></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="Date" name="tgl" class="" style="max-width=50%"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><textarea cols="50" rows="10" name="tarea"></textarea>
            </tr>
            <tr>
                <td>&nbsp;</td>            
                <td>&nbsp;</td>
                <td><button type="submit" name="Simpan">Record</button>
                <button type="reset" name="Batal">Clear</button></td>
            </tr>   
            </table>
</form>    
    </body>    
</html>
