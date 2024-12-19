<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $email_prodi = $_POST['email_prodi'];
    $status = $_POST['status'];

    include './koneksi.php';

    // Cek apakah NIM sudah ada di database
    $cek_id = mysqli_query($con, "SELECT * FROM `prodi` WHERE `id` = '$id'");
    $jumlah_data = mysqli_num_rows($cek_id); //Fungsi mysqli_num_rows() digunakan untuk menghitung jumlah baris yang ditemukan.

    //Jika $jumlah_data lebih besar dari 0, artinya NIM sudah ada di database.
    //Di sini, kita menampilkan pesan peringatan menggunakan alert(). Anda dapat memodifikasi pesan sesuai kebutuhan.
    
    if ($jumlah_data > 0) {
        // Jika NIM sudah ada, tampilkan pesan peringatan
        echo "<script>alert('NIM sudah digunakan, gunakan NIM yang lain')
            window.location.href='create_prodi.php'</script>";
    } else {
        // Jika NIM belum ada, lakukan insert data
        $query = "INSERT INTO `prodi` (`nama`, `jurusan`, `email_prodi`, `status`) VALUES ('$nama', '$jurusan', '$email_prodi', '$status')";
        $insert = mysqli_query($con, $query);

        if ($insert) {
            echo "<script>alert('Data berhasil disimpan')
            window.location.href='data_prodi.php'</script>";
        } else {
            echo " Data gagal disimpan";
        }
    }

    echo '<br><a href="data_prodi.php">Lihat Data</a>';
}
?>
