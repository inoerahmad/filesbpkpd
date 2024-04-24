
<?php
//insert to database
require 'koneksi.php';
if(isset($_POST["Simpan"])){
    $pptk = $_POST["pptk"];
    $subkegiatan = $_POST['sub_kegiatan'];
    $anggaran = $_POST["anggaran"];
    $realisasi = $_POST["realisasi"];

    $query =  "INSERT INTO tb_dapeg VALUES('$pptk', '$subkegiatan', '$anggaran', '$realisasi')";
    mysqli_query($koneksi, $query);
    echo
    "<script> alert('Data Berhasil Disimpan!');</script>";    
}
?>
<!DOCTYPE html>
<head>
<h1> Header </h1>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  
        <table>
            <tr>
            <td>PPTK</td>
            <td>:</td>    
            <td><select name="pptk" id="pptk" class="form-control" style="max-width:50%" onchange="sub_kegiatan()">
            <option value="">--SELECT--</option>
            <?php
                include 'koneksi.php';
                $query = mysqli_query($koneksi,'SELECT * FROM tb_pptk order by pptk asc');
                while($data = mysqli_fetch_array($query)){
            ?>
            <option value="<?php echo $data['id'];?>"><?php echo $data['pptk']?></option>
           <?php
            }
            ?>
        </select></td>
        </tr>
        <tr>
            <td>Sub Kegiatan</td>
            <td>:</td>    
            <td><select name="sub_kegiatan" id="sub_kegiatan" class="form-control" style="max-width:50%">
            <script>
                function sub_kegiatan(){
                    var pptk = $('#pptk').val();
                    $('#sub_kegiatan').load("combo2.php?id="+pptk+"");
                }
            </script>
        </select></td>
        </tr>
        <tr>
            <td>Anggaran Belanja</td>
            <td>:</td>
            <td><input type="number" name="anggaran"></td>
        </tr>
        <tr>
            <td>Realisasi Anggaran</td>
            <td>:</td>
            <td><input type="number" name="realisasi"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><button type="submit" name="Simpan">Save</button>
            <button type="reset" name="Batal">Cancel</button></td>
        </tr>
    </table> 
</body>
            
</html>
