<?php
if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    include '../koneksi.php';

    // Cek apakah NIM sudah ada di database
    $cek_nim = mysqli_query($con, "SELECT * FROM `mahasiswa` WHERE `nim` = '$nim'");
    $jumlah_data = mysqli_num_rows($cek_nim); //Fungsi mysqli_num_rows() digunakan untuk menghitung jumlah baris yang ditemukan.

    //Jika $jumlah_data lebih besar dari 0, artinya NIM sudah ada di database.
    //Di sini, kita menampilkan pesan peringatan menggunakan alert(). Anda dapat memodifikasi pesan sesuai kebutuhan.
    
    if ($jumlah_data > 0) {
        // Jika NIM sudah ada, tampilkan pesan peringatan
        echo "<script>alert('NIM sudah digunakan, gunakan NIM yang lain')
            window.location.href='create.php'</script>";
    } else {
        // Jika NIM belum ada, lakukan insert data
        $query = "INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`) VALUES ('$nim', '$nama', '$prodi')";
        $insert = mysqli_query($con, $query);

        if ($insert) {
            echo "<script>alert('Data berhasil disimpan')
            window.location.href='data_read.php'</script>";
        } else {
            echo " Data gagal disimpan";
        }
    }

    echo '<br><a href="data_read.php">Lihat Data</a>';
}
?>
