<?php
    $judul = "Edit Materi";
    include "nav-li.php";
    include "koneksi.php";
    include 'fungsi_doc.php';

    $id = $_GET['nomor'];
    $select = "SELECT * FROM materi WHERE id_materi = '$id'";
    $query = mysqli_query($koneksi, $select);

    if(isset($_POST['btn-add'])){
        edit_materi($_POST);
    }

?>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 d-block mr-auto ml-auto mt-3">
            <h2 class="text-center mt-3">Edit Materi Pelatihan Teknisi Lab Kalibrasi Almega Sejahtera</h2>
            <hr>
            <br>
            <form method="post" enctype="multipart/form-data" class="d-block ml-auto mr-auto" style="box-sizing: border-box; border-style: solid; border-color: maroon; padding: 20px">
                <h2 class="text-center" style="box-sizing: border-box; background-color: mediumblue; color: white">Tambah Materi</h2>

                <?php while($q = mysqli_fetch_array($query)) :?>

                <div class="form-group" hidden>
                    <label for="exampleInput">ID Materi</label>
                    <input type="text" class="form-control" name="id_mat" value="<?php echo $q['id_materi'];?>">
                </div>
                <div class="form-group">
                    <label for="exampleInput1">Nama Materi</label>
                    <input type="text" class="form-control" id="formpass" name="name_mat" value="<?php echo $q['materi'];?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Materi Pelatihan</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="materi">
                </div>
                <div class="form-group">
                    <label for="">Materi Pelatihan Kalibrasi</label>
                    <select class="form-control" name="mat_kal">
                        <option value="<?php echo $q['pelatihan']?>"><?php echo ucfirst($q['pelatihan'])?></option>
                        <option value="timbangan">Timbangan</option>
                        <option value="anak_timbang">Anak Timbang</option>
                        <option value="pova">POVA</option>
                        <option value="ph_meter">pH Meter</option>
                        <option value="glassware">Glassware</option>
                        <option value="suhu">Suhu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInput1">Kategori</label>
                    <input type="text" class="form-control" id="formpass" name="kategori" value="<?php echo $q['kategori'];?>">
                </div>
                <div class="form-group">
                    <label for="exampleInput1">Link</label>
                    <input type="text" class="form-control" id="formpass" name="link" value="<?php echo $q['link'];?>">
                </div>
                <a href="host_materi_pelatihan.php" class="btn btn-warning my-3">Back</a>
                <button type="reset" class="btn btn-danger my-3">Clear</button>
                <button type="submit" class="btn btn-primary my-3" name="btn-add">Submit</button>
                <?php endwhile; ?>
            </form>
        </div>
    </div>
</div>

<br>

<?php
    include 'footer.php';
?>