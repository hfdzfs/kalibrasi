<?php
    $judul = "Dokumen Internal Lab Kalibrasi";
    include "nav-li.php";
    include 'koneksi.php';

    session_start();
    if(!$_SESSION['penyelia']){
        header('location:login-internal.php');
    }
   else if(empty($_SESSION['penyelia'])){
        header('location:login-internal.php');
   }
?>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mt-5">Dokumen Internal Lab Kalibrasi Almega Sejahtera</h2>
            <hr>
        </div>
        <div class="col-lg-3">
            <?php
                $select = "SELECT * FROM user WHERE `username`='$_SESSION[penyelia]'";
                $query = mysqli_query($koneksi, $select);
            
                while($ambil = mysqli_fetch_array($query)){
                    $user_db = $ambil['username'];
                    $pass_db = $ambil['password'];
                    $level_db = $ambil['level'];
                    $almega = $ambil['almega'];
                    $email = $ambil['email'];
                }
            ?>
            <h3> <i class="bi bi-person-circle"></i> <?php echo ucfirst($user_db) ?> </h3>
            <hr>
            <h5><i class="bi bi-file-person"></i> <?php echo ucfirst($level_db) ?> </h5>
            <h6><i class="bi bi-geo-alt"></i> PT Almega Sejahtera <?php echo ucfirst($almega) ?></h6>
            <h6><i class="bi bi-envelope"></i> <?php echo $email    ?> </h6>
            <a href="logout_doc.php" class="btn btn-danger my-3">Logout</a>
        </div>
        <div class="col-lg-9">
            <table class="table table-responsive table-bordered">
                <?php
                    $select = "SELECT * FROM dokumen WHERE `akses` LIKE '%$level_db%'";
                    $query = mysqli_query($koneksi, $select);
                ?>

                <tr class="text-center">
                    <th style="width: 90%">Nama Dokumen</th>
                    <th style="width: 10%" colspan="2">Action</th>
                </tr>

                <?php foreach($query as $q) : ?>
                <tr>
                    <td><?php echo $q['judul']?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="./doc/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                    </td>
                    <td>
                        <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>