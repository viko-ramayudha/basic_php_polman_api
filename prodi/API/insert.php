<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include "../koneksi.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $email_prodi = $_POST['email_prodi'];
        $status = $_POST['status'];

    $sql = "INSERT INTO prodi (nama, jurusan, email_prodi, status) VALUES ('$nama', '$jurusan', '$email_prodi', '$status')";

        if ($con->query($sql) == TRUE) {
            http_response_code(201);
            echo json_encode(array("message" => "Data inserted successfully"));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => "Error:" . $con->error));
        }
    } else {
        http_response_code(405);
        echo json_encode(array("message" => "Method Not Allowed"));
    }

?>