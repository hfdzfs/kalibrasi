<?php
    $judul = "Tambah Materi";
    include "nav-li.php";
    include "koneksi.php";
    include 'fungsi_doc.php';

    $select = "SELECT MAX(id_materi) AS id_baru FROM materi";
    $query = mysqli_query($koneksi, $select);
    $ambil =mysqli_fetch_array($query);
    $kodeuser = $ambil['id_baru'];
    $kodeuser++;

    if(isset($_POST['btn-add'])){
        materi($_POST);
    }

?>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 d-block mr-auto ml-auto mt-3">
            <h2 class="text-center mt-3">Tambah Materi Pelatihan Teknisi Lab Kalibrasi Almega Sejahtera</h2>
            <hr>
            <br>
            <form method="post" enctype="multipart/form-data" class="d-block ml-auto mr-auto" style="box-sizing: border-box; border-style: solid; border-color: maroon; padding: 20px">
                <h2 class="text-center" style="box-sizing: border-box; background-color: mediumblue; color: white">Tambah Materi</h2>
                <div class="form-group" hidden>
                    <label for="exampleInput">ID Materi</label>
                    <input type="text" class="form-control" name="id_mat" value="<?php echo $kodeuser;?>">
                </div>
                <div class="form-group">
                    <label for="exampleInput1">Nama Materi</label>
                    <input type="text" class="form-control" id="formpass" name="name_mat">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Materi Pelatihan</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="materi">
                </div>
                <div class="form-group">
                    <label for="">Materi Pelatihan Kalibrasi</label>
                    <select class="form-control" name="mat_kal">
                        <option value="kosong">--Select--</option>
                        <?php
                            $pilihan = ['timbangan', 'anak_timbang', 'pova', 'ph_meter', 'glassware', 'suhu'];
                            foreach($pilihan as $nilai){
                                if(@$_POST['txt_level']){
                                    $cek = "selected";
                                }
                                else{
                                    $cek = "";
                                }
                                echo "<option value='$nilai' $cek> " . ucfirst($nilai) . "</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInput1">Kategori</label>
                    <input type="text" class="form-control" id="formpass" name="kategori">
                </div>
                <div class="form-group">
                    <label for="exampleInput1">Link</label>
                    <input type="text" class="form-control" id="formpass" name="link">
                </div>
                <a href="host_materi_pelatihan.php" class="btn btn-warning my-3">Back</a>
                <button type="reset" class="btn btn-danger my-3">Clear</button>
                <button type="submit" class="btn btn-primary my-3" name="btn-add">Submit</button>
            </form>
        </div>
    </div>
</div>

<br>

<?php
    include 'footer.php';
?>