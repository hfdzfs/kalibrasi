<?php
    $judul = 'Diskusi';
    // include 'nav-home.php';
    include 'koneksi.php';
    include 'fungsi.php';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">Form Diskusi</h3>
            <hr>
            <ul class="nav nav-tabs nav-pills" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Kalibrasi Timbangan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Kalibrasi Anak Timbang</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Kalibrasi Mikropipet / POVA</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="ph-tab" data-bs-toggle="tab" data-bs-target="#ph" type="button" role="tab" aria-controls="ph" aria-selected="false">Kalibrasi pH Meter</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent"> <br>

                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                    <!-- Komen1 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-center">Diskusi Timbangan</h5>
                            <hr style=" width: 250px; border-top: 3px solid maroon; display: block; margin-left: auto; margin-right: auto">
                        </div>
                        <br>
                        <div class="col-md-6" style="display: block; height: 450px; overflow: scroll">
                            <?php
                                $select = "SELECT * FROM diskusi";
                                $query = mysqli_query($koneksi, $select);                               
                            ?>
                            <?php foreach($query as $q) : ?>
                            <div class="card bg-light mb-3" style="max-width: 38rem;">
                                <div class="card-header">
                                    <h5><i class="bi bi-person-circle"></i> <?php echo $q['nama']?> </h5>
                                    <p class="text-right"><small class="text-muted"><?php echo $q['perusahaan']?></small></p>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $q['pesan']?></p>
                                    <p class="text-right"><small class="text-muted"><?php echo $q['date'] ?></small></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- end komen -->

                        <!-- Form -->
                        <div class="col-md-6">
                            <form method="POST">
                                <?php
                                    $select = "SELECT MAX(id_user) AS id_baru FROM diskusi";
                                    $query = mysqli_query($koneksi, $select);
                                    $ambil =mysqli_fetch_array($query);
                                    $kodeuser = $ambil['id_baru'];
                                    $kodeuser++;

                                    if(isset($_POST['btn-submit'])){
                                        komen($_POST);
                                    }                
                                ?>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3" hidden>
                                        <label>ID User</label>
                                        <input type="text" class="form-control" name="id_user" value="<?php echo $kodeuser;?>">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault01">Name</label>
                                        <input type="text" class="form-control" id="validationDefault01" name="nama" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault03">Company</label>
                                        <input type="text" class="form-control" id="validationDefault03" name="company" required></input>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault05">Message</label>
                                        <textarea name="message" class="form-control" rows="4" required="required"></textarea>
                                    </div>
                                    <div class="col-md-4 mb-3" hidden>
                                        <label>Date</label>
                                        <input type="text" class="form-control" name="date" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("d/m/Y H:i");?>">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" name="btn-submit">Submit</button>
                            </form>
                        </div>
                        <!-- end form -->
                    </div>
                </div>
                <!-- end tab 1 -->

                <!-- Tab 2 -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- Komen2 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-center">Diskusi Anak Timbang</h5>
                            <hr style=" width: 250px; border-top: 3px solid maroon; display: block; margin-left: auto; margin-right: auto">
                        </div>
                        <br>
                        <div class="col-md-6" style="display: block; height: 450px; overflow: scroll">
                            <?php
                                $select = "SELECT * FROM diskusi_at";
                                $query = mysqli_query($koneksi, $select);                               
                            ?>
                            <?php foreach($query as $q) : ?>
                            <div class="card bg-light mb-3" style="max-width: 38rem;">
                                <div class="card-header">
                                    <h5><i class="bi bi-person-circle"></i> <?php echo $q['nama']?> </h5>
                                    <p class="text-right"><small class="text-muted"><?php echo $q['perusahaan']?></small></p>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $q['pesan']?></p>
                                    <p class="text-right"><small class="text-muted"><?php echo $q['date'] ?></small></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- end komen -->

                        <!-- Form -->
                        <div class="col-md-6">
                            <form method="POST">
                                <?php
                                    $select = "SELECT MAX(id_user) AS id_baru FROM diskusi_at";
                                    $query = mysqli_query($koneksi, $select);
                                    $ambil =mysqli_fetch_array($query);
                                    $kodeuser = $ambil['id_baru'];
                                    $kodeuser++;

                                    if(isset($_POST['btn_submit'])){
                                        diskusi($_POST);
                                    }
                                ?>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3" hidden>
                                        <label>ID User</label>
                                        <input type="text" class="form-control" name="id_user" value="<?php echo $kodeuser;?>">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault01">Name</label>
                                        <input type="text" class="form-control" id="validationDefault01" name="nama" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault03">Company</label>
                                        <input type="text" class="form-control" id="validationDefault03" name="company" required></input>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault05">Message</label>
                                        <textarea name="message" class="form-control" rows="4" required="required"></textarea>
                                    </div>
                                    <div class="col-md-4 mb-3" hidden>
                                        <label>Date</label>
                                        <input type="text" class="form-control" name="date" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("d/m/Y H:i");?>">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" name="btn_submit">Submit</button>
                            </form>
                        </div>
                        <!-- end form -->
                    </div>
                </div>
                <!-- end tab 2 -->

                <!-- Tab 3 -->
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <!-- Komen3 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-center">Diskusi Mikropipet/POVA</h5>
                            <hr style=" width: 250px; border-top: 3px solid maroon; display: block; margin-left: auto; margin-right: auto">
                        </div>
                        <br>
                        <div class="col-md-6" style="display: block; height: 450px; overflow: scroll">
                            <?php
                                $select = "SELECT * FROM diskusi_pova";
                                $query = mysqli_query($koneksi, $select);                               
                            ?>
                            <?php foreach($query as $q) : ?>
                            <div class="card bg-light mb-3" style="max-width: 38rem;">
                                <div class="card-header">
                                    <h5><i class="bi bi-person-circle"></i> <?php echo $q['nama']?> </h5>
                                    <p class="text-right"><small class="text-muted"><?php echo $q['perusahaan']?></small></p>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $q['pesan']?></p>
                                    <p class="text-right"><small class="text-muted"><?php echo $q['date'] ?></small></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- end komen -->

                        <!-- Form -->
                        <div class="col-md-6">
                            <form method="POST">
                                <?php
                                    $select = "SELECT MAX(id_user) AS id_baru FROM diskusi_pova";
                                    $query = mysqli_query($koneksi, $select);
                                    $ambil =mysqli_fetch_array($query);
                                    $kodeuser = $ambil['id_baru'];
                                    $kodeuser++;

                                    if(isset($_POST['btnsubmit'])){
                                        diskusi_pova($_POST);
                                    }
                                ?>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3" hidden>
                                        <label>ID User</label>
                                        <input type="text" class="form-control" name="id_user" value="<?php echo $kodeuser;?>">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault01">Name</label>
                                        <input type="text" class="form-control" id="validationDefault01" name="nama" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault03">Company</label>
                                        <input type="text" class="form-control" id="validationDefault03" name="company" required></input>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault05">Message</label>
                                        <textarea name="message" class="form-control" rows="4" required="required"></textarea>
                                    </div>
                                    <div class="col-md-4 mb-3" hidden>
                                        <label>Date</label>
                                        <input type="text" class="form-control" name="date" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("d/m/Y H:i");?>">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" name="btnsubmit">Submit</button>
                            </form>
                        </div>
                        <!-- end form -->
                    </div>                    
                </div>
                <!-- end tab 3 -->

                <!-- Tab 4 -->
                <div class="tab-pane fade" id="ph" role="tabpanel" aria-labelledby="ph-tab">
                    <!-- Komen4 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-center">Diskusi pH Meter</h5>
                            <hr style=" width: 250px; border-top: 3px solid maroon; display: block; margin-left: auto; margin-right: auto">
                        </div>
                        <br>
                        <div class="col-md-6" style="display: block; height: 450px; overflow: scroll">
                            <?php
                                $select = "SELECT * FROM diskusi_ph";
                                $query = mysqli_query($koneksi, $select);                               
                            ?>
                            <?php foreach($query as $q) : ?>
                            <div class="card bg-light mb-3" style="max-width: 38rem;">
                                <div class="card-header">
                                    <h5><i class="bi bi-person-circle"></i> <?php echo $q['nama']?> </h5>
                                    <p class="text-right"><small class="text-muted"><?php echo $q['perusahaan']?></small></p>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $q['pesan']?></p>
                                    <p class="text-right"><small class="text-muted"><?php echo $q['date'] ?></small></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- end komen -->

                        <!-- Form -->
                        <div class="col-md-6">
                            <form method="POST">
                                <?php
                                    $select = "SELECT MAX(id_user) AS id_baru FROM diskusi_ph";
                                    $query = mysqli_query($koneksi, $select);
                                    $ambil =mysqli_fetch_array($query);
                                    $kodeuser = $ambil['id_baru'];
                                    $kodeuser++;

                                    if(isset($_POST['btn'])){
                                        diskusi_ph($_POST);
                                    }
                                ?>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3" hidden>
                                        <label>ID User</label>
                                        <input type="text" class="form-control" name="id_user" value="<?php echo $kodeuser;?>">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault01">Name</label>
                                        <input type="text" class="form-control" id="validationDefault01" name="nama" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault03">Company</label>
                                        <input type="text" class="form-control" id="validationDefault03" name="company" required></input>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault05">Message</label>
                                        <textarea name="message" class="form-control" rows="4" required="required"></textarea>
                                    </div>
                                    <div class="col-md-4 mb-3" hidden>
                                        <label>Date</label>
                                        <input type="text" class="form-control" name="date" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("d/m/Y H:i");?>">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" name="btn">Submit</button>
                            </form>
                        </div>
                        <!-- end form -->
                    </div>                    
                </div>
                <!-- end tab 4 -->

            </div>
            <!-- end tab-content -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->

<br>