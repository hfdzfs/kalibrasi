<?php
    $judul = "Daftar";
    include "header.php";
    include "function.php";

    $select = "SELECT MAX(id_user) AS id_baru FROM customer";
    $query = mysqli_query($koneksi, $select);
    $ambil =mysqli_fetch_array($query);
    $kodeuser = $ambil['id_baru'];
    $kodeuser++;

    if(isset($_POST['btn_tambah'])){
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
            <form method="post" class="login mt-5" style="width: 550px;">
                <h2 class="text-center mt-2">Daftar Akun</h2>
                <hr style=" width: 250px; border-top: 3px solid mediumblue;">
                <div class="form-group" hidden>
                    <label>ID User</label>
                    <input type="text" class="form-control" name="id_user" value="<?php echo $kodeuser;?>">
                </div>
                <div class="form-group">
                    <label>Username / Nama Perusahaan</label>
                    <input type="text" class="form-control" name="txt_pt" placeholder="Username untuk login harus sama dengan nama perusahaan">
                </div>
                <div class="form-group">
                    <label>Alamat Perusahaan</label>
                    <input type="text" class="form-control" name="txt_address" placeholder="Alamat Perusahaan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txt_user" placeholder="Email Perusahaan">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="formpass" name="txt_pass" placeholder="Password untuk login">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="showpass">
                    <label for="checkbox">Show Password</label>
                </div>
                <div class="form-group" hidden>
                <label for="">Level</label>
                <select class="form-control" name="txt_level">
                    <!-- <option value="kosong">--pilih level--</option>
                    <option value="admin">Admin</option> -->
                    <option value="customer">Customer</option>
                </select>
                </div>
                <a href="login.php" class="btn btn-warning my-3">Back</a>
                <button type="submit" class="btn btn-primary mx-3 my-3" name="btn_tambah">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>