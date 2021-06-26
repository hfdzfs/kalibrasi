<?php
    $judul = 'Edit User';
    include 'header.php';
    include 'koneksi.php';
    include 'fungsi_update.php';

    $id = $_GET['id'];
    $select = "SELECT * FROM customer WHERE id_user = '$id'";
    $query = mysqli_query($koneksi, $select);

    if(isset($_POST['btn_tambah'])){
        edit($_POST);
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
            <form method="post" class="login mt-5" style="width: 550px;">
                <h2 class="text-center mt-2">Tambah User</h2>
                <hr style=" width: 250px; border-top: 3px solid mediumblue;">

                <?php while($q = mysqli_fetch_array($query)) :?>

                <div class="form-group">
                    <label>ID User</label>
                    <input type="text" class="form-control" name="id_user" value="<?php echo $q['id_user']?>">
                </div>
                <div class="form-group">
                    <label>Username / Nama Perusahaan</label>
                    <input type="text" class="form-control" name="txt_pt" value="<?php echo $q['nama perusahaan']?>">
                </div>
                <div class="form-group">
                    <label>Alamat Perusahaan</label>
                    <input type="text" class="form-control" name="txt_address" value="<?php echo $q['alamat perusahaan']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txt_user" value="<?php echo $q['email']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="formpass" name="txt_pass" value="<?php echo $q['password']?>">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="showpass">
                    <label for="checkbox">Show Password</label>
                </div>
                <div class="form-group">
                <label for="">Level</label>
                <select class="form-control" name="txt_level">
                    <option value="<?php echo $q['level']?>"><?php echo ucfirst($q['level'])?></option>
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                </select>
                </div>
                <a href="data-user.php" class="btn btn-warning my-3">Back</a>
                <button type="submit" class="btn btn-primary mx-3 my-3" name="btn_tambah">Submit</button>
                <?php endwhile; ?>
            </form>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>