<?php
    $judul = 'Beranda';
    include 'header.php';
    include 'koneksi.php';
    include 'function.php';

    session_start();
    $select = "SELECT * FROM kalibrasi WHERE `nama perusahaan`='$_SESSION[user]'";
    $query = mysqli_query($koneksi, $select);

//     if(!$_SESSION['customer']){
//         header('location:admin.php');
//     }
//    else if(empty($_SESSION['customer'])){
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
        <h6><?php echo $_SESSION['user'];?></h6>
        </div>
        <div class="d-flex justify-content-md-between mr-3">
            <a href="logout.php" class="btn btn-danger ml-2 my-3">Logout</a>
        </div>
    </div>

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

        <tr class="text-center">
            <th>No Order</th>
            <th>Nama Perusahaan</th>
            <th>Alat yang di Kalibrasi</th>
            <th>No Seri</th>
            <th>Tanggal Masuk</th>
            <th>Progress</th>
            <th class="text-center">Sertifikat <br> <i class="bi bi-download"></i> </th>
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
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php
    include 'footer.php';
?>