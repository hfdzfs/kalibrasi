<?php
    $judul = "Daftar Akun";
    include "nav-li.php";
    include 'koneksi.php';
    include 'fungsi_doc.php';

    $select = "SELECT MAX(id_user) AS id_baru FROM user";
    $query = mysqli_query($koneksi, $select);
    $ambil =mysqli_fetch_array($query);
    $kodeuser = $ambil['id_baru'];
    $kodeuser++;

    if(isset($_POST['btn_tambah'])){
        regist($_POST);
    }

?>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 d-block mr-auto ml-auto mt-3">
            <h2 class="text-center mt-3">Dokumen Internal Lab Kalibrasi Almega Sejahtera</h2>
            <hr>
            <br>
            <form method="post" class="d-block ml-auto mr-auto" style="box-sizing: border-box; border-style: solid; border-color: maroon; padding: 20px">
                <h2 class="text-center" style="box-sizing: border-box; background-color: mediumblue; color: white">Daftar Akun</h2>
                <div class="form-group" hidden>
                    <label>ID User</label>
                    <input type="text" class="form-control" name="id_user" value="<?php echo $kodeuser;?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username / Nama</label>
                    <input type="text" class="form-control" name="txt_user">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="formpass" name="txt_pass">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="showpass">
                    <label for="showpass">Show Password</label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="form-group">
                    <label for="">PT. Almega Sejahtera</label>
                    <select class="form-control" name="txt_pt">
                        <option value="kosong">--Pilih Opsi--</option>
                        <option value="jakarta">Jakarta</option>
                        <option value="bandung">Bandung</option>
                        <option value="semarang">Semarang</option>
                        <option value="surabaya">Surabaya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Level</label>
                    <select class="form-control" name="txt_level">
                        <option value="kosong">--Pilih Level--</option>
                        <option value="direktur">Direktur</option>
                        <option value="ka_laboratorium">Ka. Laboratorium</option>
                        <option value="ka_teknik">Ka. Teknik</option>
                        <option value="staff_mutu">Staff Mutu</option>
                        <option value="penyelia">Penyelia</option>
                        <option value="admin">Admin</option>
                        <option value="teknisi">Teknisi</option>
                        <option value="host">Host</option>
                    </select>
                </div>
                <br>
                <a href="login-internal.php" class="btn btn-warning my-3">Back</a>
                <button type="submit" class="btn btn-primary mx-3 my-3" name="btn_tambah">Submit</button>
            </form>
        </div>
    </div>
</div>

<br>

<?php
    include 'footer.php';
?>

<script>
    $(document).ready(function(){

        $('#showpass').click(function(){
            if($(this).is(':checked')){
                $('#formpass').attr("type", "text")
            }
            else{
                $('#formpass').attr("type", "password")
            }
        })
    })
</script>
