<?php
    include 'koneksi.php';

    $id = $_GET['nomer'];

    $delete = "DELETE FROM dokumen WHERE `id_doc` = '$id'";

    $query = mysqli_query($koneksi, $delete);

    if($query){
        echo "<script>
            alert('berhasil menghapus data');
            document.location.href = 'host.php';
        </script>";
    }
    else{
        echo "<script>
            alert('gagal menghapus data');
            document.location.href = 'host.php';
        </script>";
        // .mysqli_error($koneksi);
    }
?>