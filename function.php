<?php

    include 'koneksi.php';

    function tambah($data){
        global $koneksi;

        $id = $data['id_user'];
        $pt = $data['txt_pt'];
        $address = $data['txt_address'];
        $user = $data['txt_user'];
        $pass = $data['txt_pass'];
        $level = $data['txt_level'];

        $insert = "INSERT INTO customer VALUES ('$id', '$pt', '$address' ,'$user', md5('$pass'), '$level')";

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
                        alert('berhasil mendaftar');
                        document.location.href = 'login.php';                
                    </script>";
                return $query;
            }
            else{
                echo "<script>
                        alert('gagal mendaftar');
                        document.location.href = 'daftar.php';
                </script>";
            }
        }
    }

    function login($data){
        global $koneksi;

        $username = $data['txt_user'];
        $password = md5($data['txt_pass']);
        $level = $data['txt_level'];
    
        $select = "SELECT * FROM customer";
    
        $query = mysqli_query($koneksi, $select);

        while($ambil = mysqli_fetch_array($query)){
            $user_db = $ambil['perusahaan'];
            $pass_db = $ambil['password'];
    
            if(empty($username) || empty($password)){
                echo " <script>
                alert('Form tidak boleh ada yang kosong');
                document.location.href = 'login.php';
                </script>";
            }
            else if($username != $user_db){
                echo " <script>
                alert('Username/Password salah');
                document.location.href = 'login.php';
                </script>";
            }
            else if($password != $pass_db){
                echo " <script>
                alert('Username/Password salah');
                document.location.href = 'login.php';
                </script>";
            }
            else{
                if($level == "admin"){
                    $_SESSION['admin'] = $username;
                    header("location: admin.php");
                    exit();
                }
                else{
                    $_SESSION['user'] = $username;
                    header("location: user.php");
                    exit();
                }
            }
        }
    }

function daftar($data){
        global $koneksi;

        $id = $data['id_user'];
        $pt = $data['txt_pt'];
        $address = $data['txt_address'];
        $user = $data['txt_user'];
        $pass = $data['txt_pass'];
        $level = $data['txt_level'];

        $insert = "INSERT INTO customer VALUES ('$id', '$pt', '$address' ,'$user', md5('$pass'), '$level')";

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
                        alert('berhasil mendaftar');
                        document.location.href = 'data-user.php';                
                    </script>";
                return $query;
            }
            else{
                echo "<script>
                        alert('gagal mendaftar');
                        document.location.href = 'tambah-user.php';
                </script>";
            }
        }
    }

?>
