<?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        include 'koneksi.php';

        $query = "DELETE FROM prodi WHERE id = '$id' ";
        $update = mysqli_query($con, $query);

        if ($update) {
            echo "Data berhasil dihapus!";
        } else {
            echo "Data gagal dihapus:(";
        }

        header("location: ./data_prodi.php");
        echo '<br><a href="./data_prodi.php">Lihat Data</a>';
    }
?>