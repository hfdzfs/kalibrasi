<?php
    $judul = "List User";
    include "nav-li.php";
    include 'koneksi.php';

    session_start();
    if(!$_SESSION['host']){
        header('location:login-internal.php');
    }
   else if(empty($_SESSION['host'])){
        header('location:login-internal.php');
   }
?>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mt-5">Dokumen Internal Lab Kalibrasi Almega Sejahtera</h2>
            <hr>
            <table class="table table-responsive table-bordered">
                <?php
                    $select = "SELECT * FROM user";
                    $query = mysqli_query($koneksi, $select);                    
                ?>
                <a href="tambah_user.php" class="btn btn-primary my-3 mx-2">Tambah User </a>
                <a href="host.php" class="btn btn-warning my-3 mx-2">Back </a>

                <tr class="text-center">
                    <th style="width: 5%">ID User</th>
                    <th style="width: 20%">Username / Nama</th>
                    <th style="width: 20%">Email</th>
                    <th style="width: 20%">Almega Sejahtera</th>
                    <th style="width: 20%">Level</th>
                    <th style="width: 15%" colspan="2">Action</th>
                </tr>

                <?php foreach($query as $q) : ?>
                <tr>
                    <td><?php echo $q['id_user']?></td>
                    <td><?php echo $q['username']?></td>
                    <td><?php echo $q['email']?></td>
                    <td><?php echo $q['almega']?></td>
                    <td><?php echo $q['level']?></td>
                    <td>
                        <a href="edit_user.php?nomor=<?php echo $q['id_user']?>" class="btn btn-sm btn-warning">
                        <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                    <td>
                        <a href="delete_user.php?nomer=<?php echo $q['id_user']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                        <i class="bi bi-trash-fill"></i>
                        </a>
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