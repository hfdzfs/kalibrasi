<?php
    include 'koneksi.php';

    $id = $_GET['nomer'];

    $delete = "DELETE FROM materi WHERE `id_materi` = '$id'";

    $query = mysqli_query($koneksi, $delete);

    if($query){
        echo "<script>
            alert('berhasil menghapus data');
            document.location.href = 'host_materi_pelatihan.php';
        </script>";
    }
    else{
        echo "<script>
            alert('gagal menghapus data');
            document.location.href = 'host_materi_pelatihan.php';
        </script>";
    }
?>