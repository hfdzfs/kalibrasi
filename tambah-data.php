<?php
    $judul = "Tambah data Kalibrasi";
    include "nav-li.php";
    include "fungsi_doc.php";

    if(isset($_POST['btn-add'])){
        tambah($_POST);
    }
?>

<!-- hr -->
<div class="container" style="max-width: 100%;">
    <div class="row" style="background-color: maroon; height: 40px; line-height: 50px;">
        <div class="col-sm-12">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
                <form class="login mt-5" method="post">
                <br>
                    <h2 class="text-center"> Tambah Data Kalibrasi</h2>
                    <hr style=" width: 500px; border-top: 3px solid mediumblue;">
                <br>
                    
                    <label for="">No Order</label>
                    <input type="text" class="form-control" name="no_order">

                    <label for="">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="id_pt">

                    <label for="">Alat yang di Kalibrasi</label>
                    <input type="text" class="form-control" name="alat">

                    <label for="">No Seri</label>
                    <input type="text" class="form-control" name="no_seri">

                    <label for="">Tanggal Masuk</label>
                    <input type="text" class="form-control" name="tanggal">

                    <label for="">Progress</label>
                    <input type="text" class="form-control" name="progress">

                    <label for="">Status Sertifikat</label>
                    <input type="text" class="form-control" name="sertifikat">

                    <label for="">Link Download Sertifikat</label>
                    <input type="text" class="form-control" name="link">

                    <a href="admin.php" class="btn btn-warning my-3">Back</a>
                    <button type="reset" class="btn btn-danger my-3">Clear</button>
                    <button type="submit" class="btn btn-primary my-3" name="btn-add">Tambah Data</button>
                </form>
        </div>
    </div>
</div> 

<?php
    include 'footer.php';
?>