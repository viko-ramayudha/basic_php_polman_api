<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include "../koneksi.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'] ?? '';
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $email_prodi = $_POST['email_prodi'];
        $status = $_POST['status'];

        $sql = "UPDATE `prodi` SET `nama`='$nama', `jurusan`='jurusan', `email_prodi`='$email_prodi', `status`='$status' WHERE `id`='$id' ";

        if ($con->query($sql) === TRUE) {
            http_response_code(201);
            echo json_encode(array("message" => "Data updated successfully"));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => "Error:" . $con->error));
        }
    } else {
        http_response_code(405);
        echo json_encode(array("message" => "Method Not Allowed"));
    }
?>