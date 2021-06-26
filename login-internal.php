<?php
    session_start();
    $judul = "Login Internal";
    include 'nav-li.php';
    include 'koneksi.php';
    include 'fungsi_doc.php';

    if(isset($_POST['btn_login'])){
        login_doc($_POST);
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
                <h2 class="text-center" style="box-sizing: border-box; background-color: mediumblue; color: white">Login</h2>
                <div class="form-group">
                    <label for="exampleInput1">Username</label>
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
                <label for="">Login As</label>
                <select class="form-control" name="txt_level">
                    <option value="kosong">--Select--</option>
                    <?php
                        $pilihan = ['direktur', 'ka_laboratorium', 'ka_teknik', 'staff_mutu', 'penyelia', 'admin', 'teknisi', 'host'];
                        foreach($pilihan as $nilai){
                            if(@$_POST['txt_level']){
                                $cek = "selected";
                            }
                            else{
                                $cek = "";
                            }
                            echo "<option value='$nilai' $cek> " . ucfirst($nilai) . "</option>";
                        }
                    ?>
                </select>
                <br>
                <button type="submit" class="btn btn-primary btn-login" name="btn_login">Login</button>
                <br><br>
                <div class="row">

                    <!-- Button trigger modal -->
                    <div class="text-left">
                        <p class="text-left"> Haven't account ?
                            <a type="button" href="#" class="btn-link" data-toggle="modal" data-target="#daftar">
                            Register Now >>
                            </a>
                        </p>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="daftar" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="daftar">Daftar Akun</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="embed-responsive embed-responsive-1by1">
                                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeFNQTQdeLTf25VjVTbNZqhTxOQAaxe7Wx_pFnZlLqRhb_yHQ/viewform?embedded=true" width="640" height="1025" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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
