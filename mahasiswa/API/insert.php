<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include "../koneksi.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'] ?? '';
    $nama = $_POST['nama'] ?? '';
    $prodi = $_POST['prodi'] ?? '';

    $sql = "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";

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