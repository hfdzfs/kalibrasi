<?php
    $judul = 'Lab Kalibrasi Almega';
    include 'nav-home.php';
?>

    <!-- atas -->
<div class="container" style="max-width: 75%; margin: 0px auto;">
  <div class="row">

      <!-- slide -->
      <div class="col-lg-9">
        <br>
        <div id="carouselExampleControlsNoTouching" class="carousel slide carousel-dark" data-bs-touch="false" data-bs-interval="false">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <iframe width="100%" height="450px" src="https://www.youtube.com/embed/MVKTpNLwQVU?rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                  
            </div>
            <div class="carousel-item">
              <iframe width="100%" height="450px" src="https://www.youtube.com/embed/B9J7kmnH59E?rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="carousel-item">
              <video width="100%" height="450px" controls>
                <source src="./img/VID-LAB KALIBRASI.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video width="100%" height="450px" controls>
                <source src="./img/KALIBRASI MIKROPIPET.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video width="100%" height="450px" controls>
                <source src="./img/KALIBRASI pH Meter 221220.mp4" type="video/mp4">
              </video>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- end slide -->

    <div class="col-md-3">
    <br>
      <div class="head-side" style="background: maroon; color: white;">
              <h5 class="header" style="padding-left: 0.5cm;">Event</h5>
      </div>
      <div class="event" style="display: block; height: 450px; overflow: scroll">
        <div class="card mb-3">
            <img class="card-img-top h-50" src="./img/web-mp.jpeg" alt="Card image cap">
            <div class="card-body">
              <a style="color: black;" href="webinar-mikropipet.php"><h5 class="card-title">Webinar Mikropipet</h5></a>
              <p class="card-text"><small class="text-muted">31 Mar 2021</small></p>
            </div>
        </div>
        <div class="card mb-3">
          <img class="card-img-top h-50" src="./img/web-ph.jpeg" alt="Card image cap">
          <div class="card-body">
            <a style="color: black;" href="./ev-ph.html"><h5 class="card-title">Webinar pH Meter</h5></a>
            <p class="card-text"><small class="text-muted">17 Mar 2021</small></p>
          </div>
        </div>
      </div>
    </div>
    <!-- end ev -->

  </div>
</div>
<!-- end col-9 -->

<!-- hr -->
<div class="container" style="max-width: 100%;">
  <div class="row" style="background-color: blue; height: 10px; line-height: 10px; margin-bottom: 0cm;">
    <div class="col-sm-12">
    </div>
  </div>
</div>
<br>

<!-- pofile -->
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h4 class="text-center">Our Profile</h4>
      <hr style=" width: 150px; border-top: 3px solid maroon; display: block; margin-left: auto; margin-right: auto">
      <div class="text-center">
        <img src="./img/Picture2.png" style="height: 100px;">
        <img class="logo-kan" src="./img/LogoKan.png">
      </div>
      <br>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: silver">
              About Us
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">About Us</h3>
              <br>
              <p class="about-us">Lab Kalibrasi PT. Almega Sejahtera  merupakan Laboratorium Kalibrasi yang menggunakan methode Internasional dengan menerapkan ISO 17025 dalam sistem manajemennya dan mulai diakreditasi pada tahun 2005 oleh Komite Akreditasi Nasional dengan No Registrasi LK-081-IDN.</p>

              <p class="about-us">Dengan ruang lingkup awal Kalibrasi Timbangan sampai kapasitas 300 kg menggunakan methode Internasional, Lab Kalibrasi PT. Almega mengembangkan lingkupnya tahun 2009 selain Kalibrasi Timbangan sampai 3 Ton, juga menambah ruang lingkup untuk Kalibrasi Anak Timbang.</p>
              
              <p class="about-us">Tahun 2013 menambah peralatan kalibrasi dengan akurasi yang lebih tinggi sehingga bisa mencapai CMC yang lebih baik. Seiring dengan kebutuhan pelanggan kami dan dukungan dari Management, Kami melengkapi peralatan Standar Kalibrasi dengan peralatan yang memiliki akurasi yang tinggi.</p>
              
              <p class="about-us">Lab Kalibrasi PT. Almega Sejahtera mengembangkan lingkup dan juga meningkatkan akurasi layanan kalibrasi yang diberikan dan Semakin memberikan kepercayaan dari pelanggan Kami.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: silver">
              Visi & Misi
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Visi & Misi</h3>
              <br>
              <div class="text-center">
                  <h4 class="text-center" style="color: blue;">"VISI"</h4>
                  <hr style="width: 150px; border-top: 3px solid mediumblue; display: block; margin-left: auto; margin-right: auto">
                  <p class="visi-misi">Menjadi Lab. Kalibrasi yang profesional, mengutamakan mutu dan layanan.</p>

                  <h4 class="text-center" style="color: blue;">"MISI"</h4>
                  <hr style="width: 150px; border-top: 3px solid mediumblue; display: block; margin-left: auto; margin-right: auto">
                  <p class="visi-misi" style="text-align: left; display: block; margin-left: auto; margin-right: auto">
                      1. Menjadi Lab. Kalibrasi yang mendapat pengakuan Internasional.<br>
                      2. Menjamin ketelusuran pengukuran ke standar Nasional /Internasional.<br>
                      3. Melakukan perbaikan terus menerus dengan menerapkan evaluasi internal dan eksernal.<br>
                      4. Meningkatkan kompetensi/attitude SDM dengan memberikan pelatihan yang terstruktur dan berkesinambungan.<br>
                      5. Lab kalibrasi yg bukan hanya memberikan kepuasan pelanggan tetapi mengesankan pelanggan.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="background-color: silver">
              Jaminan Mutu
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <h3 class="text-center" style="color: whitesmoke; background-color: blue;">Jaminan Mutu</h3>
              <br>
              <div class="paragraph" style="text-align: justify;">
                <p class="Jaminan-mutu">Lab Kalibrasi PT. Almega Sejahtera merupakan Laboratorium Kalibrasi yang menggunakan methode Internasional dengan menerapkan ISO 17025 dalam sistem manajemennya dan mulai diakreditasi pada tahun 2005 oleh Komite Akreditasi Nasional dengan No Registrasi LK-081-IDN. Dengan tempat layanan yang berada di 4 Kota Besar Bandung, Jakarta, Semarang dan Surabaya memberikan kemudahan pelayanan Kalibrasi.
                </p>
                <p class="Jaminan-mutu">Dengan Jaminan Mutu Yang diberikan : <br><br>
                    1. Personil Kalibrasi Terlatih dan Kompeten.<br>
                    2. Peralatan yang digunakan memiliki akurasi tinggi.<br> 
                    3. Methode Internasional.<br> 
                    4. Pengerjaan cepat dan memuaskan pelanggan.<br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end profile -->

    <!-- sertif -->
    <div class="col-lg-6">
    <br>
    <h4 class="text-center">Sertifikat Akreditasi</h4>
    <hr style=" width: 250px; border-top: 3px solid maroon; display: block; margin-left: auto; margin-right: auto">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/sertif.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/Picture0.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/Picture1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/sertf3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/sertif4.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- end sertif -->

  </div>
</div>
<br>
<!-- end row -->

<!-- hr -->
<div class="container" style="max-width: 100%;">
  <div class="row" style="background-color: blue; height: 10px; line-height: 10px; margin-bottom: 0cm;">
    <div class="col-sm-12">
    </div>
  </div>
</div>
<br>

<!-- diskusi -->
<?php
  include 'diskusi.php';
?>
<br>

<!-- hr -->
<div class="container" style="max-width: 100%;">
  <div class="row" style="background-color: blue; height: 10px; line-height: 10px; margin-bottom: 0cm;">
    <div class="col-sm-12">
    </div>
  </div>
</div>
<br>

      <!-- slide lokasi -->
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h4 class="text-center">Lokasi Pelayanan</h4>
      <hr>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner text-center">
          <div class="carousel-item active">
              <h4 style="color: whitesmoke; background-color: blue;">Almega Sejahtera Jakarta</h4>
              <br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9471723211846!2d106.86967171476874!3d-6.137799995555999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f56988b98909%3A0x2a0f7935cf9ebc5e!2sPT.%20Almega%20Sejahtera!5e0!3m2!1sid!2sid!4v1607843807005!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="carousel-item">
              <h4 style="color: whitesmoke; background-color: blue;">Almega Sejahtera Bandung</h4>
              <br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8560513009957!2d107.58339431434743!3d-6.907810669523707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e672a5e9f92d%3A0xabdb8f2e3a3daf85!2sAlmega%20Sejahtera%20Bandung!5e0!3m2!1sid!2sid!4v1607844325613!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="carousel-item">
              <h4 style="color: whitesmoke; background-color: blue;">Almega Sejahtera Semarang</h4>
              <br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3819546721993!2d110.38753611434792!3d-6.9641888701211325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4d033563387%3A0xd1a209903a5a058e!2sPT.%20Almega%20Sejahtera!5e0!3m2!1sid!2sid!4v1607844482722!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="carousel-item">
              <h4 style="color: whitesmoke; background-color: blue;">Almega Sejahtera Surabaya</h4>
              <br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7497111253583!2d112.7479173143511!3d-7.269297673444543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd9782615db%3A0x2938668064f79ceb!2sAlmega%20Geosystem!5e0!3m2!1sid!2sid!4v1607844568713!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black;"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>       
  </div>
</div>
<!-- end lokasi -->
<br>

<?php
  include 'footer.php';
?>