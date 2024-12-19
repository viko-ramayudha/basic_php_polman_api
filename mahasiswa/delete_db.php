<?php 
    if (isset($_GET['nim'])) {
        $nim = $_GET['nim'];

        include 'koneksi.php';

        $query = "DELETE FROM mahasiswa WHERE nim = '$nim' ";
        $update = mysqli_query($con, $query);

        if ($update) {
            echo "Data berhasil dihapus!";
        } else {
            echo "Data gagal dihapus:(";
        }

        header("location: data_read.php");
        echo '<br><a href="data_read.php">Lihat Data</a>';
    }
?>