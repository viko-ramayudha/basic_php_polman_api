<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include "../koneksi.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nim = $_GET['nim'] ?? '';

        $sql = "DELETE FROM `mahasiswa` WHERE nim = '$nim' ";

        if ($con->query($sql) == TRUE) {
            http_response_code(201);
            echo json_encode(array("message" => "Data deleted successfully"));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => "Error:" . $con->error));
        }
    } else {
        http_response_code(405);
        echo json_encode(array("message" => "Method Not Allowed"));
    }
?>