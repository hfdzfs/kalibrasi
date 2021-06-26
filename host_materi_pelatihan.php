<?php
    $judul = "Materi Pelatihan Teknisi Kalibrasi";
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

<br><br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">Materi Pelatihan Teknisi Kalibrasi</h3>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-left mt-5">
                        <a href="tambah_materi.php" class="btn btn-success my-2 mx-1">Tambahkan data</a>
                        <a href="host.php" class="btn btn-warning my-2 mx-1">Back</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-right">
                        <img class="logo-kan" src="./img/LogoKan.png">
                    </div>
                </div>
            </div>
            <hr>
            <ul class="nav nav-tabs nav-pills" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Kalibrasi Timbangan Elektronik</button>
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
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="ph-tab" data-bs-toggle="tab" data-bs-target="#ukur" type="button" role="tab" aria-controls="ukur" aria-selected="false">Kalibrasi Bejana Ukur dan Glassware</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="ph-tab" data-bs-toggle="tab" data-bs-target="#suhu" type="button" role="tab" aria-controls="suhu" aria-selected="false">Kalibrasi Bidang Suhu</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent"> <br>

                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-center">Materi Pelatihan Kalibrasi Timbangan Elektronik</h5>
                            <hr style=" width: 250px; border-top: 3px solid maroon; display: block; margin-left: auto; margin-right: auto">

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                
                                <!-- 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#llk" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                                            Teori Dasar
                                        </button>
                                    </h2>
                                    <div id="llk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Teori dasar</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'timbangan' AND `kategori` = 'teori dasar'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#skd" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                                            Metode Kalibrasi dan Lembar Kerja
                                        </button>
                                    </h2>
                                    <div id="skd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Metode Kalibrasi dan Lembar Kerja</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'timbangan' AND `kategori` = 'metode kalibrasi'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ref" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Referensi
                                        </button>
                                    </h2>
                                    <div id="ref" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Referensi</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'timbangan' AND `kategori` = 'referensi'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fpmd" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Form Permintaan Mentoring dan Diskusi
                                        </button>
                                    </h2>
                                    <div id="fpmd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Form Permintaan Mentoring dan Diskusi</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeK77vwJgjw2gNcNoaEySoYN36V2rCZ4YNgwaTKUrZPEwjvKw/viewform?embedded=true" width="640" height="999" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fpuk" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Form Permintaan Uji Kompetensi
                                        </button>
                                    </h2>
                                    <div id="fpuk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Form Permintaan Uji Kompetensi</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSePeAOI37phElbvD_UUkkzeDggdj3NB0HoI9I-glQ0jxOtclQ/viewform?embedded=true" width="640" height="832" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pjtukp" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Permintaan Jadwal Training dan Uji Kompetensi Praktek
                                        </button>
                                        </h2>
                                    <div id="pjtukp" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Permintaan Jadwal Training dan Uji Kompetensi Praktek</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSds_HZ4z1LBu-IhPSEeFshJd6KxqKsuPFE8degZGILpggjk5w/viewform?embedded=true" width="640" height="1041" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab 1 -->

                <!-- Tab 2 -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- Komen2 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-center">Materi Pelatihan Kalibrasi Anak Timbang</h5>
                            <hr style=" width: 250px; border-top: 3px solid maroon; display: block; margin-left: auto; margin-right: auto">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                
                                <!-- 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#llk" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                                            Teori Dasar
                                        </button>
                                    </h2>
                                    <div id="llk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Teori dasar</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'anak timbang' AND `kategori` = 'teori dasar'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#skd" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                                            Metode Kalibrasi dan Lembar Kerja
                                        </button>
                                    </h2>
                                    <div id="skd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Metode Kalibrasi dan Lembar Kerja</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'anak timbang' AND `kategori` = 'metode kalibrasi'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ref" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Referensi
                                        </button>
                                    </h2>
                                    <div id="ref" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Referensi</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'anak timbang' AND `kategori` = 'referensi'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fpmd" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Form Permintaan Mentoring dan Diskusi
                                        </button>
                                    </h2>
                                    <div id="fpmd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Form Permintaan Mentoring dan Diskusi</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeK77vwJgjw2gNcNoaEySoYN36V2rCZ4YNgwaTKUrZPEwjvKw/viewform?embedded=true" width="640" height="999" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fpuk" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Form Permintaan Uji Kompetensi
                                        </button>
                                    </h2>
                                    <div id="fpuk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Form Permintaan Uji Kompetensi</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSePeAOI37phElbvD_UUkkzeDggdj3NB0HoI9I-glQ0jxOtclQ/viewform?embedded=true" width="640" height="832" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pjtukp" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Permintaan Jadwal Training dan Uji Kompetensi Praktek
                                        </button>
                                        </h2>
                                    <div id="pjtukp" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Permintaan Jadwal Training dan Uji Kompetensi Praktek</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSds_HZ4z1LBu-IhPSEeFshJd6KxqKsuPFE8degZGILpggjk5w/viewform?embedded=true" width="640" height="1041" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab 2 -->

                <!-- Tab 3 -->
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <!-- Komen3 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-center">Materi Pelatihan Kalibrasi Mikropipet/POVA</h5>
                            <hr style=" width: 250px; border-top: 3px solid maroon; display: block; margin-left: auto; margin-right: auto">

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                
                                <!-- 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#llk" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                                            Teori Dasar
                                        </button>
                                    </h2>
                                    <div id="llk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Teori dasar</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'pova' AND `kategori` = 'teori dasar'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#skd" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                                            Metode Kalibrasi dan Lembar Kerja
                                        </button>
                                    </h2>
                                    <div id="skd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Metode Kalibrasi dan Lembar Kerja</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'pova' AND `kategori` = 'metode kalibrasi'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ref" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Referensi
                                        </button>
                                    </h2>
                                    <div id="ref" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Referensi</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'pova' AND `kategori` = 'referensi'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fpmd" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Form Permintaan Mentoring dan Diskusi
                                        </button>
                                    </h2>
                                    <div id="fpmd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Form Permintaan Mentoring dan Diskusi</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeK77vwJgjw2gNcNoaEySoYN36V2rCZ4YNgwaTKUrZPEwjvKw/viewform?embedded=true" width="640" height="999" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fpuk" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Form Permintaan Uji Kompetensi
                                        </button>
                                    </h2>
                                    <div id="fpuk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Form Permintaan Uji Kompetensi</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSePeAOI37phElbvD_UUkkzeDggdj3NB0HoI9I-glQ0jxOtclQ/viewform?embedded=true" width="640" height="832" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pjtukp" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Permintaan Jadwal Training dan Uji Kompetensi Praktek
                                        </button>
                                        </h2>
                                    <div id="pjtukp" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Permintaan Jadwal Training dan Uji Kompetensi Praktek</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSds_HZ4z1LBu-IhPSEeFshJd6KxqKsuPFE8degZGILpggjk5w/viewform?embedded=true" width="640" height="1041" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>                    
                </div>
                <!-- end tab 3 -->

                <!-- Tab 4 -->
                <div class="tab-pane fade" id="ph" role="tabpanel" aria-labelledby="ph-tab">
                    <!-- Komen4 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-center">Materi Pelatihan Kalibrasi pH Meter</h5>
                            <hr style=" width: 250px; border-top: 3px solid maroon; display: block; margin-left: auto; margin-right: auto">

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                
                                <!-- 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#llk" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                                            Teori Dasar
                                        </button>
                                    </h2>
                                    <div id="llk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Teori dasar</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'ph meter' AND `kategori` = 'teori dasar'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#skd" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                                            Metode Kalibrasi dan Lembar Kerja
                                        </button>
                                    </h2>
                                    <div id="skd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Metode Kalibrasi dan Lembar Kerja</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'ph meter' AND `kategori` = 'metode kalibrasi'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ref" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Referensi
                                        </button>
                                    </h2>
                                    <div id="ref" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Referensi</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'ph meter' AND `kategori` = 'referensi'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fpmd" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Form Permintaan Mentoring dan Diskusi
                                        </button>
                                    </h2>
                                    <div id="fpmd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Form Permintaan Mentoring dan Diskusi</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeK77vwJgjw2gNcNoaEySoYN36V2rCZ4YNgwaTKUrZPEwjvKw/viewform?embedded=true" width="640" height="999" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fpuk" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Form Permintaan Uji Kompetensi
                                        </button>
                                    </h2>
                                    <div id="fpuk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Form Permintaan Uji Kompetensi</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSePeAOI37phElbvD_UUkkzeDggdj3NB0HoI9I-glQ0jxOtclQ/viewform?embedded=true" width="640" height="832" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pjtukp" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Permintaan Jadwal Training dan Uji Kompetensi Praktek
                                        </button>
                                        </h2>
                                    <div id="pjtukp" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Permintaan Jadwal Training dan Uji Kompetensi Praktek</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSds_HZ4z1LBu-IhPSEeFshJd6KxqKsuPFE8degZGILpggjk5w/viewform?embedded=true" width="640" height="1041" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>                    
                </div>
                <!-- end tab 4 -->

                <!-- Tab 5 -->
                <div class="tab-pane fade" id="ukur" role="tabpanel" aria-labelledby="ukur-tab">
                    <!--  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-center">Materi Pelatihan Kalibrasi Bejana Ukur dan Glassware</h5>
                            <hr style=" width: 250px; border-top: 3px solid maroon; display: block; margin-left: auto; margin-right: auto">

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                
                                <!-- 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#llk" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                                            Teori Dasar
                                        </button>
                                    </h2>
                                    <div id="llk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Teori dasar</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'glassware' AND `kategori` = 'teori dasar'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#skd" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                                            Metode Kalibrasi dan Lembar Kerja
                                        </button>
                                    </h2>
                                    <div id="skd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Metode Kalibrasi dan Lembar Kerja</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'glassware' AND `kategori` = 'metode kalibrasi'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ref" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Referensi
                                        </button>
                                    </h2>
                                    <div id="ref" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Referensi</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'glassware' AND `kategori` = 'referensi'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fpmd" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Form Permintaan Mentoring dan Diskusi
                                        </button>
                                    </h2>
                                    <div id="fpmd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Form Permintaan Mentoring dan Diskusi</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeK77vwJgjw2gNcNoaEySoYN36V2rCZ4YNgwaTKUrZPEwjvKw/viewform?embedded=true" width="640" height="999" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fpuk" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Form Permintaan Uji Kompetensi
                                        </button>
                                    </h2>
                                    <div id="fpuk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Form Permintaan Uji Kompetensi</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSePeAOI37phElbvD_UUkkzeDggdj3NB0HoI9I-glQ0jxOtclQ/viewform?embedded=true" width="640" height="832" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pjtukp" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Permintaan Jadwal Training dan Uji Kompetensi Praktek
                                        </button>
                                        </h2>
                                    <div id="pjtukp" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Permintaan Jadwal Training dan Uji Kompetensi Praktek</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSds_HZ4z1LBu-IhPSEeFshJd6KxqKsuPFE8degZGILpggjk5w/viewform?embedded=true" width="640" height="1041" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab 5 -->

                <!-- Tab 6 -->
                <div class="tab-pane fade" id="suhu" role="tabpanel" aria-labelledby="suhu-tab">
                    <!--  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-center">Materi Pelatihan Kalibrasi Bidang Suhu</h5>
                            <hr style=" width: 250px; border-top: 3px solid maroon; display: block; margin-left: auto; margin-right: auto">

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                
                                <!-- 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#llk" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                                            Teori Dasar
                                        </button>
                                    </h2>
                                    <div id="llk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Teori dasar</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'suhu' AND `kategori` = 'teori dasar'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#skd" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                                            Metode Kalibrasi dan Lembar Kerja
                                        </button>
                                    </h2>
                                    <div id="skd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Metode Kalibrasi dan Lembar Kerja</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'suhu' AND `kategori` = 'metode kalibrasi'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ref" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Referensi
                                        </button>
                                    </h2>
                                    <div id="ref" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Referensi</h3>
                                            <br>
                                            <div class="table-reponsive">
                                                <table class="table table-bordered">
                                                    <?php
                                                        $select = "SELECT * FROM materi WHERE `pelatihan` = 'suhu' AND `kategori` = 'referensi'";
                                                        $query = mysqli_query($koneksi, $select);
                                                    ?>

                                                    <tr class="text-center">
                                                    <th>Nama Materi</th>
                                                    <th>File Materi</th>
                                                    <th colspan="4">Action</th>
                                                    </tr>

                                                    <?php foreach($query as $q) : ?>
                                                    <tr>
                                                        <td><?php echo $q['materi']?></td>
                                                        <td><?php echo $q['file']?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="./materi/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_materi.php?nomor=<?php echo $q['id_materi']?>" class="btn btn-sm btn-warning">
                                                            <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete_materi.php?nomer=<?php echo $q['id_materi']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
                                                            <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fpmd" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Form Permintaan Mentoring dan Diskusi
                                        </button>
                                    </h2>
                                    <div id="fpmd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Form Permintaan Mentoring dan Diskusi</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeK77vwJgjw2gNcNoaEySoYN36V2rCZ4YNgwaTKUrZPEwjvKw/viewform?embedded=true" width="640" height="999" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fpuk" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Form Permintaan Uji Kompetensi
                                        </button>
                                    </h2>
                                    <div id="fpuk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Form Permintaan Uji Kompetensi</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSePeAOI37phElbvD_UUkkzeDggdj3NB0HoI9I-glQ0jxOtclQ/viewform?embedded=true" width="640" height="832" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pjtukp" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                                            Permintaan Jadwal Training dan Uji Kompetensi Praktek
                                        </button>
                                        </h2>
                                    <div id="pjtukp" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Permintaan Jadwal Training dan Uji Kompetensi Praktek</h3>
                                            <br>
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSds_HZ4z1LBu-IhPSEeFshJd6KxqKsuPFE8degZGILpggjk5w/viewform?embedded=true" width="640" height="1041" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>                    
                </div>
                <!-- end tab 6 -->

            </div>
            <!-- end tab-content -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->

<br>

<?php
    include 'footer.php';
?>