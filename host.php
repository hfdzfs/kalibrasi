<?php
    session_start();
    $judul = "Dokumen Internal Lab Kalibrasi";
    include "nav-li.php";
    include 'koneksi.php';

    if(!$_SESSION['host']){
        header('location:login-internal.php');
    }
   else if(empty($_SESSION['host'])){
        header('location:login-internal.php');
   }
?>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
        <h2 class="text-center mt-5">Dokumen Internal Lab Kalibrasi Almega Sejahtera</h2>
        <hr>
    </div>
    <div class="col-lg-3">
            <?php
                $select = "SELECT * FROM user WHERE `username`='$_SESSION[host]'";

                $query = mysqli_query($koneksi, $select);
            
                while($ambil = mysqli_fetch_array($query)){
                    $user_db = $ambil['username'];
                    $pass_db = $ambil['password'];
                    $level_db = $ambil['level'];
                    $almega = $ambil['almega'];
                    $email = $ambil['email'];
                }
            ?>
            <h3> <i class="bi bi-person-circle"></i> <?php echo ucfirst($user_db) ?> </h3>
            <hr>
            <h5><i class="bi bi-file-person"></i> <?php echo ucfirst($level_db) ?> </h5>
            <h6><i class="bi bi-geo-alt"></i> PT Almega Sejahtera <?php echo ucfirst($almega) ?></h6>
            <h6><i class="bi bi-envelope"></i> <?php echo $email    ?> </h6>
            <a href="logout_doc.php" class="btn btn-danger my-3">Logout</a>
            <br>
            <img class="logo-kan" src="./img/LogoKan.png">
    </div>
    <div class="col-lg-9">
      <div class="text-left">
        <a href="tambah_doc.php" class="btn btn-primary my-2 mx-1">Tambahkan data</a>
        <a href="list-user.php" class="btn btn-secondary my-2 mx-1">List User</a>
        <a href="host_materi_pelatihan.php" class="btn btn-success my-2 mx-1">Materi Pelatihan Teknisi Kalibrasi</a>
        <a href="admin.php" class="btn my-2 mx-1" style="color: white; background-color: mediumblue">Cek Sertifikat Kalibrasi</a>
      </div>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        
        <!-- 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#llk" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                Legalitas Lab Kalibrasi
            </button>
          </h2>
          <div id="llk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Legalitas Lab Kalibrasi</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `kategori` = 'legalitas lab kalibrasi'";
                    $query = mysqli_query($koneksi, $select);
                  ?>

                    <tr class="text-center">
                      <th>Nama Dokumen</th>
                      <th>File Dokumen</th>
                      <th colspan="4">Action</th>
                    </tr>

                    <?php foreach($query as $q) : ?>
                    <tr>
                        <td><?php echo $q['judul']?></td>
                        <td><?php echo $q['file']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="./doc/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                        </td>
                        <td>
                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                        </td>
                        <td>
                            <a href="edit_doc.php?nomor=<?php echo $q['id_doc']?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_doc.php?nomer=<?php echo $q['id_doc']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
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
                Surat Keputusan Direktur
            </button>
          </h2>
          <div id="skd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Surat Keputusan Direktur</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `kategori` = 'sk direktur'";
                    $query = mysqli_query($koneksi, $select);
                  ?>

                    <tr class="text-center">
                      <th>Nama Dokumen</th>
                      <th>File Dokumen</th>
                      <th colspan="4">Action</th>
                    </tr>

                    <?php foreach($query as $q) : ?>
                    <tr>
                        <td><?php echo $q['judul']?></td>
                        <td><?php echo $q['file']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="./doc/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                        </td>
                        <td>
                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                        </td>
                        <td>
                            <a href="edit_doc.php?nomor=<?php echo $q['id_doc']?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_doc.php?nomer=<?php echo $q['id_doc']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
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
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pd" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                Peraturan Direktur
            </button>
          </h2>
          <div id="pd" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Peraturan Direktur</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `kategori` = 'peraturan direktur'";
                    $query = mysqli_query($koneksi, $select);
                  ?>

                    <tr class="text-center">
                      <th>Nama Dokumen</th>
                      <th>File Dokumen</th>
                      <th colspan="4">Action</th>
                    </tr>

                    <?php foreach($query as $q) : ?>
                    <tr>
                        <td><?php echo $q['judul']?></td>
                        <td><?php echo $q['file']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="./doc/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                        </td>
                        <td>
                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                        </td>
                        <td>
                            <a href="edit_doc.php?nomor=<?php echo $q['id_doc']?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_doc.php?nomer=<?php echo $q['id_doc']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
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
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pmu" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                Panduan Mutu
            </button>
          </h2>
          <div id="pmu" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Panduan Mutu</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `kategori` = 'panduan mutu'";
                    $query = mysqli_query($koneksi, $select);
                  ?>

                    <tr class="text-center">
                      <th>Nama Dokumen</th>
                      <th>File Dokumen</th>
                      <th colspan="4">Action</th>
                    </tr>

                    <?php foreach($query as $q) : ?>
                    <tr>
                        <td><?php echo $q['judul']?></td>
                        <td><?php echo $q['file']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="./doc/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                        </td>
                        <td>
                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                        </td>
                        <td>
                            <a href="edit_doc.php?nomor=<?php echo $q['id_doc']?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_doc.php?nomer=<?php echo $q['id_doc']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
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

        <!-- 5 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pm" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
                Prosedur Mutu
            </button>
          </h2>
          <div id="pm" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Prosedur Mutu</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `kategori` = 'prosedur mutu'";
                    $query = mysqli_query($koneksi, $select);
                  ?>

                    <tr class="text-center">
                      <th>Nama Dokumen</th>
                      <th>File Dokumen</th>
                      <th colspan="4">Action</th>
                    </tr>

                    <?php foreach($query as $q) : ?>
                    <tr>
                        <td><?php echo $q['judul']?></td>
                        <td><?php echo $q['file']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="./doc/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                        </td>
                        <td>
                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                        </td>
                        <td>
                            <a href="edit_doc.php?nomor=<?php echo $q['id_doc']?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_doc.php?nomer=<?php echo $q['id_doc']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
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

        <!-- 6 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mk" aria-expanded="false" aria-controls="mk" style="background-color: silver">
                Metode Kalibrasi
            </button>
          </h2>
          <div id="mk" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Metode Kalibrasi</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `kategori` = 'metode kerja'";
                    $query = mysqli_query($koneksi, $select);
                  ?>

                    <tr class="text-center">
                      <th>Nama Dokumen</th>
                      <th>File Dokumen</th>
                      <th colspan="4">Action</th>
                    </tr>

                    <?php foreach($query as $q) : ?>
                    <tr>
                        <td><?php echo $q['judul']?></td>
                        <td><?php echo $q['file']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="./doc/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                        </td>
                        <td>
                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                        </td>
                        <td>
                            <a href="edit_doc.php?nomor=<?php echo $q['id_doc']?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_doc.php?nomer=<?php echo $q['id_doc']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
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

        <!-- 7 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ik" aria-expanded="false" aria-controls="flush-collapseThree" style="background-color: silver">
              Instruksi Kerja
            </button>
          </h2>
          <div id="ik" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Instruksi Kerja</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `kategori` = 'instruksi kerja'";
                    $query = mysqli_query($koneksi, $select);
                  ?>

                    <tr class="text-center">
                      <th>Nama Dokumen</th>
                      <th>File Dokumen</th>
                      <th colspan="4">Action</th>
                    </tr>

                    <?php foreach($query as $q) : ?>
                    <tr>
                        <td><?php echo $q['judul']?></td>
                        <td><?php echo $q['file']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="./doc/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                        </td>
                        <td>
                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                        </td>
                        <td>
                            <a href="edit_doc.php?nomor=<?php echo $q['id_doc']?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_doc.php?nomer=<?php echo $q['id_doc']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
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

        <!-- 8 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fm" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: silver">
              Formulir Mutu
            </button>
          </h2>
          <div id="fm" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Formulir Mutu</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `kategori` = 'formulir mutu'";
                    $query = mysqli_query($koneksi, $select);
                  ?>

                    <tr class="text-center">
                      <th>Nama Dokumen</th>
                      <th>File Dokumen</th>
                      <th colspan="4">Action</th>
                    </tr>

                    <?php foreach($query as $q) : ?>
                    <tr>
                        <td><?php echo $q['judul']?></td>
                        <td><?php echo $q['file']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="./doc/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                        </td>
                        <td>
                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                        </td>
                        <td>
                            <a href="edit_doc.php?nomor=<?php echo $q['id_doc']?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_doc.php?nomer=<?php echo $q['id_doc']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
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

        <!-- 9 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ft" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: silver">
              Formulir Teknik
            </button>
          </h2>
          <div id="ft" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Formulir Teknik</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `kategori` = 'formulir teknik'";
                    $query = mysqli_query($koneksi, $select);
                  ?>

                    <tr class="text-center">
                      <th>Nama Dokumen</th>
                      <th>File Dokumen</th>
                      <th colspan="4">Action</th>
                    </tr>

                    <?php foreach($query as $q) : ?>
                    <tr>
                        <td><?php echo $q['judul']?></td>
                        <td><?php echo $q['file']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="./doc/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                        </td>
                        <td>
                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                        </td>
                        <td>
                            <a href="edit_doc.php?nomor=<?php echo $q['id_doc']?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_doc.php?nomer=<?php echo $q['id_doc']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
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

        <!-- 10 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fa" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: silver">
              Formulir Administrasi
            </button>
          </h2>
          <div id="fa" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Formulir Administrasi</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `kategori` = 'formulir administrasi'";
                    $query = mysqli_query($koneksi, $select);
                  ?>

                    <tr class="text-center">
                      <th>Nama Dokumen</th>
                      <th>File Dokumen</th>
                      <th colspan="4">Action</th>
                    </tr>

                    <?php foreach($query as $q) : ?>
                    <tr>
                        <td><?php echo $q['judul']?></td>
                        <td><?php echo $q['file']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="./doc/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                        </td>
                        <td>
                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                        </td>
                        <td>
                            <a href="edit_doc.php?nomor=<?php echo $q['id_doc']?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_doc.php?nomer=<?php echo $q['id_doc']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
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

        <!-- 11 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sak" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: silver">
                Sertifikat Akreditasi KAN
            </button>
          </h2>
          <div id="sak" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Sertifikat Akreditasi KAN</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `kategori` = 'sertifikat akreditasi'";
                    $query = mysqli_query($koneksi, $select);
                  ?>

                    <tr class="text-center">
                      <th>Nama Dokumen</th>
                      <th>File Dokumen</th>
                      <th colspan="4">Action</th>
                    </tr>

                    <?php foreach($query as $q) : ?>
                    <tr>
                        <td><?php echo $q['judul']?></td>
                        <td><?php echo $q['file']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="./doc/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                        </td>
                        <td>
                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                        </td>
                        <td>
                            <a href="edit_doc.php?nomor=<?php echo $q['id_doc']?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_doc.php?nomer=<?php echo $q['id_doc']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
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

        <!-- 12 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rlak" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: silver">
                Ruang Lingkup Akreditasi KAN
            </button>
          </h2>
          <div id="rlak" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Ruang Lingkup Akreditasi KAN</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `kategori` = 'ruang lingkup'";
                    $query = mysqli_query($koneksi, $select);
                  ?>

                    <tr class="text-center">
                      <th>Nama Dokumen</th>
                      <th>File Dokumen</th>
                      <th colspan="4">Action</th>
                    </tr>

                    <?php foreach($query as $q) : ?>
                    <tr>
                        <td><?php echo $q['judul']?></td>
                        <td><?php echo $q['file']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="./doc/<?php echo $q['file']?>#toolbar=0" target="_blank"><i class="bi bi-eye"></i></a>
                        </td>
                        <td>
                            <a href="<?php echo $q['link']?>" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-download"></i></a>
                        </td>
                        <td>
                            <a href="edit_doc.php?nomor=<?php echo $q['id_doc']?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete_doc.php?nomer=<?php echo $q['id_doc']?> " class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus?')">
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

      </div>
    </div>
 </div>
</div>

<br>

<?php
    include 'footer.php';
?>