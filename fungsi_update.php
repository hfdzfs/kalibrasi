<?php
    include 'koneksi.php';

    function update($data){
        global $koneksi;
    
    $order = $data['no_order'];
    $id = $data['id_pt'];
    $alat = $data['alat'];
    $seri = $data['no_seri'];
    $tanggal = $data['tanggal'];
    $progress = $data['progress'];
    $sertif = $data['sertifikat'];
    $link = $data['link'];

    $update = "UPDATE kalibrasi SET `nama perusahaan` = '$id', `alat` = '$alat', `no_seri` = '$seri', `tanggal_masuk` = '$tanggal', `progress` = '$progress', `sertifikat` = '$sertif', `link` = '$link'  WHERE `no_order` = '$order'";

    if(empty($id) || empty($alat) || empty($seri) || empty($tanggal) || empty($progress) || empty($sertif)){ 
        echo "kosong"
        .mysqli_error($koneksi);
        // echo "
        //         <script>
        //             alert('Form tidak boleh ada yang kosong');
        //             document.location.href = 'update.php?nomor=$order';
        //         </script>";
    }
    else{
        $query = mysqli_query($koneksi, $update);
        if($query){
            echo "<script>
                    alert('berhasil mengubah data');
                    document.location.href = 'admin.php';
            </script>";
        return $query;
        }
        else{
            // echo 'gagal'
            echo "<script>
                    alert('gagal mengubah data');
                    document.location.href = 'update.php?nomor=$order';
            </script>";
            // .mysqli_error($koneksi);
        }
    }
}

function edit($data){
    global $koneksi;

    $id = $data['id_user'];
    $pt = $data['txt_pt'];
    $address = $data['txt_address'];
    $user = $data['txt_user'];
    $pass = $data['txt_pass'];
    $level = $data['txt_level'];

    $insert = "UPDATE customer SET `nama perusahaan` = '$pt', `alamat perusahaan` = '$address', `email` = '$user', `password` = md5('$pass'), `level` = '$level' WHERE `id_user` = '$id'";

    if(empty($id) OR empty($pt) OR empty($address) OR empty($user) OR empty($pass) OR $level == "kosong"){
        echo "<script>alert('form tidak boleh ada yang kosong')</script>";
    }
    elseif(!filter_var($user, FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('email harus benar ex: admin@gmail.com')</script>";
    }
    else{
        $query = mysqli_query($koneksi, $insert);
        if($query){
            echo "<script>
                    alert('berhasil mengubah data');
                    document.location.href = 'data-user.php';                
                </script>";
            return $query;
        }
        else{
            echo "<script>
                    alert('gagal mengubah data');
                    document.location.href = 'edit-user.php';
            </script>";
        }
    }
}

?>