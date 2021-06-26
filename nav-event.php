<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
    <title><?php echo $judul;?></title>
</head>
<body>

<!-- navigasi -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark Navigasi ml-auto">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img class="logo" src="./img/Picture2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav navigasi ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Layanan Kalibrasi</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="./Kalibrasi timbangan elektronik.html">Kalibrasi Timbangan Elektronik</a>
            <a class="dropdown-item" href="./Kalibrasi Anak Timbang.html">Kalibrasi Anak Timbang</a>
            <a class="dropdown-item" href="./Kalibrasi pH meter.html">Kalibrasi PH Meter</a>
            <a class="dropdown-item" href="./Kalibrasi Mikropipet.html">Kalibrasi Mikropipet, Buret, dan Dispenser</a>
            </div>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="./login.php">Cek Sertifikat Kalibrasi</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="./gallery.html">Gallery</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="https://www.almega.co.id/product" target="_blank">Product</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="./news&event.html"  style="box-sizing: border-box; background-color: maroon;">News & Event</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="./Kontak Kami.html">Kontak Kami</a>
        </li>
        </ul> 
    </div>
    </div>
</nav>
<br><br><br>

<!-- hr -->
<div class="container" style="max-width: 100%;">
    <div class="row" style="background-color: maroon; height: 40px; line-height: 50px;">
        <div class="col-sm-12">
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="./Js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

<script>
    // dropdown
$('.dropdown').hover(function(){
    $('.dropdown-menu').toggleClass('show');
});
</script>
