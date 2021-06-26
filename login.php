<?php
    session_start();
    $judul = "Login";
    // include 'header.php';
    include 'koneksi.php';
    include 'function.php';

    if(isset($_POST['btn-login'])){
        login($_POST);
    }
?>

<!-- hr -->
<div class="container" style="max-width: 100%;">
    <div class="row" style="background-color: maroon; height: 40px; line-height: 50px;">
        <div class="col-sm-12">
        </div>
    </div>
</div>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 d-block mr-auto ml-auto mt-3">
            <h2 class="text-center mt-3" style="box-sizing: border-box; background-color: mediumblue; color: white">Cek Sertifikat Kalibrasi</h2>
            <br>
            <form method="post" class="d-block ml-auto mr-auto login" style="padding: 20px">
                <h2 class="text-center">Login</h2>
                <hr style="border-top: 3px solid mediumblue;">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="txt_user">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="formpass" name="txt_pass">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="showpass">
                    <label for="checkbox">Show Password</label>
                </div>
                <button type="submit" class="btn btn-primary btn-login" name="btn-login">Login</button>
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
                                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfhA6jAvITkSMaOdfY_6c6Qaz2YLCub_YKjAxEtvlPe5WH12w/viewform?embedded=true" width="640" height="1073" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
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

<br><br><br>

<?php
    include 'footer.php';
?>