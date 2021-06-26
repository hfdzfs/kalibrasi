<?php
    include 'koneksi.php';

    $id = $_GET['iduser'];

    $delete = "DELETE FROM customer WHERE `id_user` = '$id'";

    $query = mysqli_query($koneksi, $delete);

    if($query){
        echo "<script>
            alert('berhasil menghapus data');
            document.location.href = 'data-user.php';
        </script>";
    }
    else{
        echo "<script>
            alert('gagal menghapus data');
            document.location.href = 'data-user.php';
        </script>";
        // .mysqli_error($koneksi);
    }
?>