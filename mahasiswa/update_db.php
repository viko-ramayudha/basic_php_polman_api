
<?php
    include "./koneksi.php";

    if(isset($_POST['update'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];

        // Query untuk melakukan update
        $query = "UPDATE mahasiswa SET nama = '$nama', prodi = '$prodi' WHERE nim = '$nim'";
        
        // Eksekusi query
        $result = mysqli_query($con, $query);

        if($result) {
            // Jika update berhasil, arahkan kembali ke halaman data_read.php atau halaman lainnya
            header("Location: data_read.php");
            exit();
        } else {
            // Jika terjadi kesalahan
            echo "Update gagal. Silakan coba lagi.";
        }
    }
?>
