<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    
    // Inisialisasi cURL
    $ch = curl_init();
    
    // Set URL dan opsi lainnya
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Nonaktifkan verifikasi sertifikat SSL
    
    // Eksekusi cURL dan ambil respons
    $response = curl_exec($ch);
    
    // Periksa untuk kesalahan cURL
    if(curl_errno($ch)) {
        http_response_code(500);
        echo json_encode(array("message" => "Failed to fetch content from the specified URL: " . curl_error($ch)));
    } else {
        echo $response;
    }
    
    // Tutup cURL
    curl_close($ch);
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Missing 'url' parameter"));
}
?>