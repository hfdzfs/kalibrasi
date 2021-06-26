<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Daftar</title>
</head>
<body>
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-block mr-auto ml-auto mt-3">
                <form method="post" class="d-block ml-auto mr-auto" style="box-sizing: border-box; border-style: solid; border-color: grey; padding: 20px">
                    <h2 class="text-left">Daftar</h2>
                    <p class="text-muted"><small>ini cepat dan mudah</small></p>
                    <hr>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="first_name" placeholder="Nama Depan">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="last_name" placeholder="Nama Belakang">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Nomor Seluler atau Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="formpass" name="password" placeholder="Kata Sandi baru">
                    </div>
                    <div class="row">
                        <label for=""><small class="text-muted"> Tanggal Lahir <i class="bi bi-question-circle-fill"></i> </small></label>
                        <div class="form-group col-lg-4">
                                <select class="form-control" name="tgl">
                                    <option selected="selected" value="">Tanggal</option>
                                    <?php
                                    for($a=1; $a<=10; $a+=1){
                                        echo"<option value=$a> $a </option>";
                                    }
                                    ?>
                                </select>
                        </div>
                        <div class="form-group col-lg-4">
                        <select class="form-control" name="bln">
                            <option selected="selected" value="">Bulan</option>
                            <?php
                            $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                            $jlh_bln=count($bulan);
                            for($c=0; $c<$jlh_bln; $c+=1){
                                echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                            }
                            ?>
                        </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <select class="form-control" name="thn">
                                    <option selected="selected" value="">Tahun</option>
                                    <?php
                                    for($a=2011; $a<=2021; $a+=1){
                                        echo"<option value=$a> $a </option>";
                                    }
                                    ?>
                                </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for=""><small class="text-muted">Jenis Kelamin <i class="bi bi-question-circle-fill"></i> </small></label>
                        <div class="form-group col-lg-4">
                            <div class="form-check form-control">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Perempuan
                                </label>
                            </div>
                         </div>
                         <div class="form-group col-lg-4">
                            <div class="form-control form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Laki-laki
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-lg-4">
                            <div class="form-control form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    Khusus
                                </label>
                            </div>
                        </div>
                    </div>
                    <p class="text-justify"><small class="text-muted">Dengan mengklik Daftar, Anda Menyetujui <span style="color: blue">Ketentuan, Kebijakan Data</span> dan <span style="color: blue">Kebijakan Cookies</span>kami. Anda akan menerima Notifikasi SMS dari Facebook dan dapat menolaknya kapan saja. </small></p>
                    <button type="submit" class="btn btn-success d-block ml-auto mr-auto" name="btn_submit" style="width: 200px">Daftar</button>
                </form>
            </div>
        </div>
    </div>



    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

</body>
</html>