<?php

    $judul = "Data user";
    include "header.php";
    include "koneksi.php";

    $select = "SELECT * FROM customer";
    $query = mysqli_query($koneksi, $select);

    session_start();
    if(empty($_SESSION['admin'])){
        header('location:login.php');
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
    <br><br>
    <h2 class="text-center">List Data Customer</h2>
    <hr style=" width: 400px; border-top: 3px solid mediumblue;">
    <div class="btn-atas d-flex justify-content-end">
    <form method="post" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="txt_cari">
                <button class="btn btn-primary my-2 my-sm-0 mr-2" type="submit" name="btn_cari"><i class="bi bi-search"></i></button>
                <?php
                    $pencarian = @$_POST['txt_cari'];

                    $select = "SELECT * FROM customer WHERE  `id_user` LIKE '%$pencarian%' OR `nama perusahaan` LIKE '%$pencarian%' OR `alamat perusahaan` LIKE '%$pencarian%' OR `email` LIKE '%$pencarian%' OR `level` LIKE '%$pencarian%'";
                    $query = mysqli_query($koneksi, $select);
                    $row = mysqli_num_rows($query);

                    if(isset($_POST['btn_cari'])){
                    if($query){
                ?>
                <p class="text-muted">Menampilkan <?php echo $row;?> dari hasil pencarian dengan keyword: <strong><?php echo $pencarian?></strong></p>
                <a href="data-user.php" class="btn btn-warning mx-2 my-3">Close </a>
                <?php    } } ?>
            </form>
        <a href="admin.php" class="btn btn-danger mx-2 my-3">Back </a>
        <a href="tambah-user.php" class="btn btn-primary my-3">Tambahkan data </a>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>ID User</th>
            <th>Nama Perusahaan</th>
            <th>Alamat Perusahaan</th>
            <th>Email</th>
            <th>Password</th>
            <th>Level</th>
            <th colspan="2">action</th>
        </tr>

        <?php foreach($query as $q) : ?>
        <tr>
            <td><?php echo $q['id_user']?></td>
            <td><?php echo $q['nama perusahaan']?></td>
            <td><?php echo $q['alamat perusahaan']?></td>
            <td><?php echo $q['email']?></td>
            <td><?php echo $q['password']?></td>
            <td><?php echo $q['level']?></td>
            <td>
                <a href="edit-user.php?id=<?php echo $q['id_user']?>" class="btn btn-sm btn-warning">
                <i class="bi bi-pencil-square"></i>
                </a>
            </td>
            <td>
                <a href="delete-user.php?iduser=<?php echo $q['id_user']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                <i class="bi bi-trash-fill"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</div>

<?php
    include 'footer.php';
?>