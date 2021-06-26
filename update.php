<?php
    $judul = 'Edit data';
    include 'header.php';
    include 'koneksi.php';
    include 'fungsi_update.php';

    $id = $_GET['nomor'];
    $select = "SELECT * FROM kalibrasi WHERE no_order = '$id'";
    $query = mysqli_query($koneksi, $select);

    if(isset($_POST['btn-up'])){
        update($_POST);
    }

?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
                <form class="login mt-5" method="post">
                <br>
                    <h2 class="text-center"> Edit Data Kalibrasi</h2>
                    <hr style=" width: 500px; border-top: 3px solid mediumblue;">
                <br>
                <?php while($q = mysqli_fetch_array($query)) :?>
                    <label for="">No Order</label>
                    <input type="text" class="form-control" name="no_order" value="<?php echo $q['no_order']?>">

                    <label for="">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="id_pt"  value="<?php echo $q['nama perusahaan']?>">

                    <label for="">Alat yang di Kalibrasi</label>
                    <input type="text" class="form-control" name="alat" value="<?php echo $q['alat']?>">

                    <label for="">No Seri</label>
                    <input type="text" class="form-control" name="no_seri" value="<?php echo $q['no_seri']?>">

                    <label for="">Tanggal Masuk</label>
                    <input type="text" class="form-control" name="tanggal" value="<?php echo $q['tanggal_masuk']?>">

                    <label for="">Progress</label>
                    <input type="text" class="form-control" name="progress" value="<?php echo $q['progress']?>">

                    <label for="">Status Sertifikat</label>
                    <input type="text" class="form-control" name="sertifikat" value="<?php echo $q['sertifikat']?>">

                    <label for="">Link Download Sertifikat</label>
                    <input type="text" class="form-control" name="link" value="<?php echo $q['link']?>">

                    <a href="admin.php" class="btn btn-warning my-3">Back</a>
                    <button type="reset" class="btn btn-danger my-3">Clear</button>
                    <button type="submit" class="btn btn-primary my-3" name="btn-up">Simpan Data</button>
                    <?php endwhile; ?>
                </form>
        </div>
    </div>
</div> 

<?php
    include 'footer.php';
?>