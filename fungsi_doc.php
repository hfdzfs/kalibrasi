<?php
    include 'koneksi.php';

    function login_doc($data){
        global $koneksi;

        $username = $data['txt_user'];
        $password = md5($data['txt_pass']);
        $level = $data['txt_level'];

        $select = "SELECT * FROM user WHERE `username` = '$username' AND `password` = '$password' AND `level` = '$level'";

        $query = mysqli_query($koneksi, $select);
        $rQuery = mysqli_num_rows($query);

        if($rQuery > 0){

            $lev = mysqli_fetch_assoc($query);

            if($lev['level'] == "direktur"){
                $_SESSION['direktur'] = $username;
                $_SESSION['level'] = "direktur";
                header("location: direktur.php");
                exit();
            }
            elseif($lev['level'] == "ka_laboratorium"){
                $_SESSION['ka_laboratorium'] = $username;
                $_SESSION['level'] = "ka_laboratorium";
                header("location: ka_lab.php");
                exit();
            }
            elseif($lev['level'] == "ka_teknik"){
                $_SESSION['ka_teknik'] = $username;
                $_SESSION['level'] = "ka_teknik";
                header("location: ka_teknik.php");
                exit();
            }
            elseif($lev['level'] == "staff_mutu"){
                $_SESSION['staff_mutu'] = $username;
                $_SESSION['level'] = "staff_mutu";
                header("location: staff_mutu.php");
                exit();
            }
            elseif($lev['level'] == "penyelia"){
                $_SESSION['penyelia'] = $username;
                $_SESSION['level'] = "penyelia";
                header("location: penyelia.php");
                exit();
            }
            elseif($lev['level'] == "admin"){
                $_SESSION['admin'] = $username;
                $_SESSION['level'] = "admin";
                header("location: doc_admin.php");
                exit();
            }
            elseif($lev['level'] == "teknisi"){
                $_SESSION['teknisi'] = $username;
                $_SESSION['level'] = "teknisi";
                header("location: teknisi.php");
                exit();
            }
            elseif($lev['level'] == "host"){
                $_SESSION['host'] = $username;
                $_SESSION['level'] = "host";
                header("location: host.php");
                exit();
            }
        }
        else{
            if(empty($username) || empty($password) || $level == "kosong"){
                echo "<script>
                alert('Form tidak boleh ada yang kosong');
                document.location.href = 'login-internal.php';
                </script>";
            }
            else if($username != $user_db){
                echo "<script>
                alert('Username / Password salah');
                document.location.href = 'login-internal.php';
                </script>";
                // echo "us salahh"
                // .mysqli_error($koneksi);
            }
            else if($password != $pass_db){
                echo "<script>
                alert('Username / Password salah');
                document.location.href = 'login-internal.php';
                </script>";
                // echo "psw salahh"
                // .mysqli_error($koneksi);
            }
            else if($level != $level_db){
                echo "<script>
                alert('Login As salah');
                document.location.href = 'login-internal.php';
                </script>";
            }
        }
    }

    function regist($data){
        global $koneksi;

        $id = $data['id_user'];
        $user = $data['txt_user'];
        $pass = $data['txt_pass'];
        $email = $data['email'];
        $pt = $data['txt_pt'];
        $level = $data['txt_level'];

        $insert = "INSERT INTO user VALUES ('$id', '$user', md5('$pass'), '$email', '$pt', '$level')";

        if(empty($id) OR empty($user) OR empty($pass) OR empty($email) OR $pt =="kosong" OR $level == "kosong"){
            echo "<script>alert('form tidak boleh ada yang kosong')</script>";
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('email harus benar ex: admin@gmail.com')</script>";
        }
        else{
            $query = mysqli_query($koneksi, $insert);
            if($query){
                echo "<script>
                        alert('berhasil mendaftar');
                        document.location.href = 'login-internal.php';                
                    </script>";
                return $query;
            }
            else{
                echo "<script>
                        alert('gagal mendaftar');
                        document.location.href = 'daftar_akun.php';
                </script>";
            }
        }
    }

    function tambah($data){
        global $koneksi;
    
    $id = $data['id_doc'];
    $judul = $data['name_doc'];
    $checkbox=$data['akses'];
        $akses="";
        foreach($checkbox as $check)
        {
            $akses .= $check.",";
        }
    $link = $data['link_doc'];

    // multi-part
    $namaFile = $_FILES['doc']['name'];
    $ukuran = $_FILES['doc']['size'];
    $tipe = $_FILES['doc']['type'];
    $lokasi = $_FILES['doc']['tmp_name'];

    $direktori = "doc/" . $namaFile;
    $format = ['application/pdf'];
    
    $insert = "INSERT INTO dokumen VALUES ('$id', '$judul', '$namaFile', '$akses', '$link')";

    if(empty($judul) || empty($namaFile) || empty($akses) || empty($link)){
        echo "
                <script>
                    alert('Form tidak boleh ada yang kosong');
                    document.location.href = 'tambah_doc.php';
                </script>
             ";
        }
    else if(!in_array($tipe, $format)){
        echo "               
            <script>
                alert('type file harus PDF');
                document.location.href = 'tambah_doc.php';
            </script>
        ";
    }
    else if($query = mysqli_query($koneksi, $insert)
    ){
        move_uploaded_file($lokasi, $direktori);
        echo "               
            <script>
                alert('berhasil menambah data');
                document.location.href = 'host.php';
            </script>
        ";
        return $query;
    }
    else{
        echo "               
            <script>
                alert('gagal menambah data');
                document.location.href = 'tambah_doc.php';
            </script>
        ";
    }
}


function edit($data){
    global $koneksi;

    $id = $data['id_doc'];
    $judul = $data['name_doc'];
    $checkbox=$data['akses'];
        $akses="";
        foreach($checkbox as $check)
        {
            $akses .= $check.",";
        }
    $link = $data['link_doc'];

    // multi-part
    $namaFile = $_FILES['doc']['name'];
    $ukuran = $_FILES['doc']['size'];
    $tipe = $_FILES['doc']['type'];
    $lokasi = $_FILES['doc']['tmp_name'];

    $direktori = "doc/" . $namaFile;
    $format = ['application/pdf'];

    $insert = "UPDATE dokumen SET `judul` = '$judul', `file` = '$namaFile', `akses` = '$akses', `link` = '$link' WHERE `id_doc` = '$id'";

    if(empty($judul) || empty($namaFile) || empty($akses) || empty($link)){
        echo "
                <script>
                    alert('Form tidak boleh ada yang kosong');
                    document.location.href = 'edit_doc.php?id_doc=$id';
                </script>
            ";
        }
    else if(!in_array($tipe, $format)){
        echo "               
            <script>
                alert('type file harus PDF');
                document.location.href = 'edit_doc.php?id_doc=$id';
            </script>
        ";
    }
    else if($query = mysqli_query($koneksi, $insert)
    ){
        move_uploaded_file($lokasi, $direktori);
        echo "               
            <script>
                alert('berhasil mengubah data');
                document.location.href = 'host.php';
            </script>
        ";
        return $query;
    }
    else{
        echo "
            <script>
                alert('gagal mengubah data');
                document.location.href = 'edit_doc.php?id_doc=$id';
            </script>
        ";
    }
}

function edit_user($data){
    global $koneksi;

    $id = $data['id_user'];
    $user = $data['txt_user'];
    $pass = $data['txt_pass'];
    $address = $data['email'];
    $pt = $data['txt_pt'];
    $level = $data['txt_level'];

    $insert = "UPDATE user SET `username` = '$user', `password` = md5('$pass'),  `email` = '$address', `almega` = '$pt', `level` = '$level' WHERE `id_user` = '$id'";

    if(empty($id) OR empty($pt) OR empty($address) OR empty($user) OR empty($pass) OR $level == "kosong"){
        echo "<script>alert('form tidak boleh ada yang kosong')</script>";
    }
    elseif(!filter_var($address, FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('email harus benar ex: admin@gmail.com')</script>";
    }
    else{
        $query = mysqli_query($koneksi, $insert);
        if($query){
            echo "<script>
                    alert('berhasil mengubah data');
                    document.location.href = 'list-user.php';                
                </script>";
            return $query;
        }
        else{
            echo "<script>
                    alert('gagal mengubah data');
                    document.location.href = 'edit_user.php';
            </script>";
        }
    }
}

function add($data){
    global $koneksi;

    $id = $data['id_user'];
    $user = $data['txt_user'];
    $pass = $data['txt_pass'];
    $email = $data['email'];
    $pt = $data['txt_pt'];
    $level = $data['txt_level'];

    $insert = "INSERT INTO user VALUES ('$id', '$user', md5('$pass'), '$email', '$pt', '$level')";

    if(empty($id) OR empty($user) OR empty($pass) OR empty($email) OR $pt =="kosong" OR $level == "kosong"){
        echo "<script>alert('form tidak boleh ada yang kosong')</script>";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('email harus benar ex: admin@gmail.com')</script>";
    }
    else{
        $query = mysqli_query($koneksi, $insert);
        if($query){
            echo "<script>
                    alert('berhasil mendaftar');
                    document.location.href = 'list-user.php';
                </script>";
            return $query;
        }
        else{
            echo "<script>
                    alert('gagal mendaftar');
                    document.location.href = 'tambah_user.php';
            </script>";
        }
    }
}

function materi($data){
    global $koneksi;

    $id = $data['id_mat'];
    $judul = $data['name_mat'];
    $materi = $data['mat_kal'];
    $kategori = $data['kategori'];
    $link = $data['link'];

    // multi-part
    $namaFile = $_FILES['materi']['name'];
    $ukuran = $_FILES['materi']['size'];
    $tipe = $_FILES['materi']['type'];
    $lokasi = $_FILES['materi']['tmp_name'];

    $direktori = "materi/" . $namaFile;
    $format = ['application/pdf'];

    $insert = "INSERT INTO materi VALUES ('$id', '$judul', '$namaFile', '$materi', '$kategori', '$link')";

    if(empty($judul) || empty($namaFile) || empty($materi) || empty($kategori) || empty($link)){
        echo "
                <script>
                    alert('Form tidak boleh ada yang kosong');
                    document.location.href = 'tambah_materi.php';
                </script>
            ";
        }
    else if(!in_array($tipe, $format)){
        echo "               
            <script>
                alert('type file harus PDF');
                document.location.href = 'tambah_materi.php';
            </script>
        ";
    }
    else if($query = mysqli_query($koneksi, $insert)){
        move_uploaded_file($lokasi, $direktori);
        echo "               
            <script>
                alert('berhasil menambah data');
                document.location.href = 'host_materi_pelatihan.php';
            </script>
        ";
        return $query;
    }
    else{
        echo "               
            <script>
                alert('gagal menambah data');
                document.location.href = 'tambah_materi.php';
            </script>
        ";
    }
}

function edit_materi($data){
    global $koneksi;

    $id = $data['id_mat'];
    $judul = $data['name_mat'];
    $materi = $data['mat_kal'];
    $kategori = $data['kategori'];
    $link = $data['link'];

    // multi-part
    $namaFile = $_FILES['materi']['name'];
    $ukuran = $_FILES['materi']['size'];
    $tipe = $_FILES['materi']['type'];
    $lokasi = $_FILES['materi']['tmp_name'];

    $direktori = "materi/" . $namaFile;
    $format = ['application/pdf'];

    $insert = "UPDATE materi SET `materi` = '$judul', `file` = '$namaFile', `pelatihan` = '$materi', `kategori` = '$kategori', `link` = '$link' WHERE `id_materi` = '$id'";

    if(empty($judul) || empty($namaFile) || empty($materi) || empty($kategori) || empty($link)){
        echo "
                <script>
                    alert('Form tidak boleh ada yang kosong');
                    document.location.href = 'tambah_materi.php';
                </script>
            ";
        }
    else if(!in_array($tipe, $format)){
        echo "               
            <script>
                alert('type file harus PDF');
                document.location.href = 'tambah_materi.php';
            </script>
        ";
    }
    else if($query = mysqli_query($koneksi, $insert)){
        move_uploaded_file($lokasi, $direktori);
        echo "               
            <script>
                alert('berhasil menambah data');
                document.location.href = 'host_materi_pelatihan.php';
            </script>
        ";
        return $query;
    }
    else{
        echo "               
            <script>
                alert('gagal menambah data');
                document.location.href = 'tambah_materi.php';
            </script>
        ";
    }
}
?>