<?php
    $judul = "Dokumen Internal Lab Kalibrasi";
    include "nav-li.php";
    include 'koneksi.php';

    session_start();
    if(!$_SESSION['teknisi']){
        header('location:login-internal.php');
    }
   else if(empty($_SESSION['teknisi'])){
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
                $select = "SELECT * FROM user WHERE `username`='$_SESSION[teknisi]'";

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
      <div class="accordion accordion-flush" id="accordionFlushExample">
        
        <!-- 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver" name="btn-kategori">
                Metode Kalibrasi
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Metode Kalibrasi</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `akses` LIKE '%$level_db%' AND `kategori` = 'metode kerja'";
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
                    </tr>
                    <?php endforeach; ?>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: silver">
              Formulir Lembar Kerja
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Formulir Lembar Kerja</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `akses` LIKE '%$level_db%' AND `kategori` = 'lembar kerja'";
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
                    </tr>
                    <?php endforeach; ?>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="background-color: silver">
              Instruksi Kerja
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Instruksi Kerja</h3>
              <br>
              <div class="table-reponsive">
                <table class="table table-bordered">
                  <?php
                    $select = "SELECT * FROM dokumen WHERE `akses` LIKE '%$level_db%' AND `kategori` = 'instruksi kerja'";
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