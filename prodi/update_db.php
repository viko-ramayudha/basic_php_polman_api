<?php
    include "./koneksi.php";

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $email_prodi = $_POST['email_prodi'];
        $status = $_POST['status'];

        // Query untuk melakukan update
        $query = "UPDATE prodi SET nama='$nama', jurusan='$jurusan', email_prodi='$email_prodi', status = '$status' WHERE id='$id'";
        
        // Eksekusi query
        $result = mysqli_query($con, $query);

        if($result) {
            // Jika update berhasil, arahkan kembali ke halaman data_read.php atau halaman lainnya
            header("Location: ./data_prodi.php");
            exit();
        } else {
            // Jika terjadi kesalahan
            echo "Update gagal. Silakan coba lagi.";
        }
    }
?>
