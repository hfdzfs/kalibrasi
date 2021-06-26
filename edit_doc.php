<?php
    $judul = "Edit Dokumen";
    include "nav-li.php";
    include "koneksi.php";
    include 'fungsi_doc.php';

    $id = $_GET['nomor'];
    $select = "SELECT * FROM dokumen WHERE id_doc = '$id'";
    $query = mysqli_query($koneksi, $select);

    if(isset($_POST['btn-add'])){
        edit($_POST);
    }

?>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 d-block mr-auto ml-auto mt-3">
            <h2 class="text-center mt-3">Edit Data Dokumen Internal Lab Kalibrasi Almega Sejahtera</h2>
            <hr>
            <br>
            <form method="post" enctype="multipart/form-data" class="d-block ml-auto mr-auto" style="box-sizing: border-box; border-style: solid; border-color: maroon; padding: 20px">
                <h2 class="text-center" style="box-sizing: border-box; background-color: mediumblue; color: white">Edit Data Dokumen</h2>

                <?php while($q = mysqli_fetch_array($query)) :?>

                <div class="form-group" hidden>
                    <label for="exampleInput">ID Dokumen</label>
                    <input type="text" class="form-control" name="id_doc" value="<?php echo $q['id_doc'];?>">
                </div>
                <div class="form-group">
                    <label for="exampleInput1">Nama Dokumen</label>
                    <input type="text" class="form-control" id="formpass" name="name_doc" value="<?php echo $q['judul'];?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">File Dokumen</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="doc">
                </div>
                <div class="form-group">
                    <label for="">Akses Dokumen</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="direktur" name="akses[]">
                            <label class="form-check-label" for="inlineCheckbox1">Direktur</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="ka_laboratorium" name="akses[]">
                            <label class="form-check-label" for="inlineCheckbox2">Ka. Laboratorium</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="ka_teknik" name="akses[]">
                            <label class="form-check-label" for="inlineCheckbox3">Ka. Teknik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="staff_mutu" name="akses[]">
                            <label class="form-check-label" for="inlineCheckbox4">Staff Mutu</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="penyelia" name="akses[]">
                            <label class="form-check-label" for="inlineCheckbox5">Penyelia</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="admin" name="akses[]">
                            <label class="form-check-label" for="inlineCheckbox6">Admin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="teknisi" name="akses[]">
                            <label class="form-check-label" for="inlineCheckbox7">Teknisi</label>
                        </div>
                </div>
                <div class="form-group">
                    <label for="exampleInput1">Link Download Dokumen</label>
                    <input type="text" class="form-control" id="formpass" name="link_doc" value="<?php echo $q['link'];?>">
                </div>
                <a href="host.php" class="btn btn-warning my-3">Back</a>
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