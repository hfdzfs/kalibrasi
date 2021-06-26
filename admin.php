<?php
    $judul = 'Admin';
    include 'header.php';
    include 'koneksi.php';

    $select = "SELECT * FROM kalibrasi";
    $query = mysqli_query($koneksi, $select);

//     session_start();
//     if(!$_SESSION['admin']){
//         header('location:user.php');
//     }
//    else if(empty($_SESSION['admin'])){
//         header('location:login.php');
//    }

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
        <div class="col">
            <h2 class="text-center my-3 mt-5">List Data Kalibrasi</h2>
            <hr style=" width: 400px; border-top: 3px solid mediumblue;">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-sm">
        <h5>All Data Kalibrasi</h5>
        </div>
        <div class="d-flex justify-content-md-between mr-3">
            <form method="post" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="txt_cari">
                <button class="btn btn-primary my-2 my-sm-0 mr-2" type="submit" name="btn_cari"><i class="bi bi-search"></i></button>
                <?php
                    $pencarian = @$_POST['txt_cari'];

                    $select = "SELECT * FROM kalibrasi WHERE  `no_order` LIKE '%$pencarian%' OR `no_seri` LIKE '%$pencarian%' OR `nama perusahaan` LIKE '%$pencarian%' OR `alat` LIKE '%$pencarian%' OR `progress` LIKE '%$pencarian%' OR `tanggal_masuk` LIKE '%$pencarian%'";
                    $query = mysqli_query($koneksi, $select);
                    $row = mysqli_num_rows($query);

                    if(isset($_POST['btn_cari'])){
                    if($query){
                ?>
                <p class="text-muted">Menampilkan <?php echo $row;?> dari hasil pencarian dengan keyword: <strong><?php echo $pencarian?></strong></p>
                <a href="admin.php" class="btn btn-warning mx-2 my-3">Back </a>
                <?php    } } ?>
            </form>
        </div>
    </div>

    <br>

    <div class="alert alert-primary" role="alert">
        <div class="row">
            <p class="ml-1"><b>Alur Progress</b></p>
        </div>
        <div class="row">
            <p class="ml-2">Penerimaan Anak Timbang</p>
            <i class="bi bi-arrow-right-circle-fill ml-3"></i>
            <p class="ml-3">Pengkondisian</p>
            <i class="bi bi-arrow-right-circle-fill ml-3"></i>
            <p class="ml-3">Proses Kalibrasi</p>
            <i class="bi bi-arrow-right-circle-fill ml-3"></i>
            <p class="ml-3">Selesai di Kalibrasi</p>
            <i class="bi bi-arrow-right-circle-fill ml-3"></i>
            <p class="ml-3">Selesai Sertifikat</p>
            <i class="bi bi-check-circle-fill ml-2"></i>
        </div>
    </div>

    <table class="table table-bordered">
    <a href="tambah-data.php" class="btn btn-primary my-3 mx-2">Tambahkan data </a>
    <a href="data-user.php" class="btn btn-secondary my-3 mx-2">List Customer </a>
    <a href="host.php" class="btn btn-warning ml-2 my-3">Back</a>

        <tr class="text-center">
            <th style="width: 15%">No Order</th>
            <th style="width: 15%">Nama Perusahaan</th>
            <th style="width: 15%">Alat yang di Kalibrasi</th>
            <th style="width: 10%">No Seri</th>
            <th style="width: 15%">Tanggal Masuk</th>
            <th style="width: 15%">Progress</th>
            <th style="width: 10%">Sertifikat<i class="bi bi-download"></i></th>
            <th style="width: 10%" colspan="2">Action</th>
        </tr>

        <?php foreach($query as $q) : ?>
        <tr>
            <td><?php echo $q['no_order']?></td>
            <td><?php echo $q['nama perusahaan']?></td>
            <td><?php echo $q['alat']?></td>
            <td><?php echo $q['no_seri']?></td>
            <td><?php echo $q['tanggal_masuk']?></td>
            <td><?php echo $q['progress']?></td>
            <td><a href="<?php echo $q['link']?>" target="_blank"><?php echo $q['sertifikat']?></a></td>
            <td>
                <a href="update.php?nomor=<?php echo $q['no_order']?>" class="btn btn-sm btn-warning">
                <i class="bi bi-pencil-square"></i>
                </a>
            </td>
            <td>
                <a href="delete.php?nomer=<?php echo $q['no_order']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                <i class="bi bi-trash-fill"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php
    include 'footer.php';
?>