<?php
    include 'koneksi.php';

    function tambah($data){
        global $koneksi;
    
    $order = $data['no_order'];
    $id = $data['id_pt'];
    $alat = $data['alat'];
    $seri = $data['no_seri'];
    $tanggal = $data['tanggal'];
    $progress = $data['progress'];
    $sertif = $data['sertifikat'];
    $link = $data['link'];
    
    $insert = "INSERT INTO kalibrasi VALUES ('$order', '$id', '$alat', '$seri', '$tanggal', '$progress', '$sertif', '$link')";

    if(empty($order) || empty($id) || empty($alat) || empty($seri) || empty($tanggal) || empty($progress) || empty($sertif) || empty($link)){ 
        echo "
                <script>
                    alert('Form tidak boleh ada yang kosong');
                    document.location.href = 'tambah-data.php';
                </script>";
    }
    else{
        $query = mysqli_query($koneksi, $insert);
        if($query){
            echo "<script>
                    alert('berhasil menambah data');
                    document.location.href = 'admin.php';
            </script>";
        return $query;
        }
        else{
            echo "gagaal"
            // echo "<script>
            //         alert('gagal menambah data');
            //         document.location.href = 'tambah-data.php';
            // </script>";
            .mysqli_error($koneksi);
        }
    }
}

// fungsi komen/diskusi
function komen($data){
    global $koneksi;

$id = $data['id_user'];
$nama = $data['nama'];
$email = $data['email'];
$comp = $data['company'];
$message = $data['message'];
$date = $data['date'];

$insert = "INSERT INTO diskusi VALUES ('$id', '$nama', '$email', '$comp', '$message', '$date')";

if(empty($id) || empty($nama) || empty($email) || empty($comp) || empty($message) || empty($date)){ 
    echo "
            <script>
                alert('Form tidak boleh ada yang kosong');
                document.location.href = 'diskusi.php';
            </script>";
}
else{
        $query = mysqli_query($koneksi, $insert);
        if($query){
            echo "<script>
                    alert('Pesan anda berhasil terkirim');
                    document.location.href = 'index.php';
            </script>";
        return $query;
        }
        else{
            echo "<script>
                    alert('gagal mengirim pesan');
                    document.location.href = 'index.php';
            </script>";
            // .mysqli_error($koneksi);
        }
    }
}


// fungsi komen/diskusi AT
function diskusi($data){
    global $koneksi;

$id = $data['id_user'];
$nama = $data['nama'];
$email = $data['email'];
$comp = $data['company'];
$message = $data['message'];
$date = $data['date'];

$insert = "INSERT INTO diskusi_at VALUES ('$id', '$nama', '$email', '$comp', '$message', '$date')";

if(empty($id) || empty($nama) || empty($email) || empty($comp) || empty($message) || empty($date)){ 
    echo "
            <script>
                alert('Form tidak boleh ada yang kosong');
                document.location.href = 'diskusi.php';
            </script>";
}
else{
        $query = mysqli_query($koneksi, $insert);
        if($query){
            echo "<script>
                    alert('Pesan anda berhasil terkirim');
                    document.location.href = 'index.php';
            </script>";
        return $query;
        }
        else{
            echo "<script>
                    alert('gagal mengirim pesan');
                    document.location.href = 'index.php';
            </script>";
            // .mysqli_error($koneksi);
        }
    }
}


// fungsi komen/diskusi pova
function diskusi_pova($data){
    global $koneksi;

$id = $data['id_user'];
$nama = $data['nama'];
$email = $data['email'];
$comp = $data['company'];
$message = $data['message'];
$date = $data['date'];

$insert = "INSERT INTO diskusi_pova VALUES ('$id', '$nama', '$email', '$comp', '$message', '$date')";

if(empty($id) || empty($nama) || empty($email) || empty($comp) || empty($message) || empty($date)){ 
    echo "
            <script>
                alert('Form tidak boleh ada yang kosong');
                document.location.href = 'diskusi.php';
            </script>";
}
else{
        $query = mysqli_query($koneksi, $insert);
        if($query){
            echo "<script>
                    alert('Pesan anda berhasil terkirim');
                    document.location.href = 'index.php';
            </script>";
        return $query;
        }
        else{
            echo "<script>
                    alert('gagal mengirim pesan');
                    document.location.href = 'index.php';
            </script>";
            // .mysqli_error($koneksi);
        }
    }
}


// fungsi komen/diskusi ph
function diskusi_ph($data){
    global $koneksi;

$id = $data['id_user'];
$nama = $data['nama'];
$email = $data['email'];
$comp = $data['company'];
$message = $data['message'];
$date = $data['date'];

$insert = "INSERT INTO diskusi_ph VALUES ('$id', '$nama', '$email', '$comp', '$message', '$date')";

if(empty($id) || empty($nama) || empty($email) || empty($comp) || empty($message) || empty($date)){ 
    echo "
            <script>
                alert('Form tidak boleh ada yang kosong');
                document.location.href = 'diskusi.php';
            </script>";
}
else{
        $query = mysqli_query($koneksi, $insert);
        if($query){
            echo "<script>
                    alert('Pesan anda berhasil terkirim');
                    document.location.href = 'index.php';
            </script>";
        return $query;
        }
        else{
            echo "<script>
                    alert('gagal mengirim pesan');
                    document.location.href = 'index.php';
            </script>";
            // .mysqli_error($koneksi);
        }
    }
}

?>