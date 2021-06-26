<?php
    include 'koneksi.php';

    $id = $_GET['nomer'];

    $delete = "DELETE FROM kalibrasi WHERE `no_order` = '$id'";

    $query = mysqli_query($koneksi, $delete);

    if($query){
        echo "<script>
            alert('berhasil menghapus data');
            document.location.href = 'admin.php';
        </script>";
    }
    else{
        echo "<script>
            alert('gagal menghapus data');
            document.location.href = 'admin.php';
        </script>";
        // .mysqli_error($koneksi);
    }
?>