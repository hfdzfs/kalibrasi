<?php
    include 'koneksi.php';

    $id = $_GET['nomer'];

    $delete = "DELETE FROM user WHERE `id_user` = '$id'";

    $query = mysqli_query($koneksi, $delete);

    if($query){
        echo "<script>
            alert('berhasil menghapus data');
            document.location.href = 'list-user.php';
        </script>";
    }
    else{
        echo "<script>
            alert('gagal menghapus data');
            document.location.href = 'list-user.php';
        </script>";
    }
?>