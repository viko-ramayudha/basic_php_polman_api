<?php
    // Example PHP code to check if NIM exists in database
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Simulate database query
        $existingNIMs = array("12345", "67890"); // Example existing NIMs in your database

        $nimToCheck = $_POST['nim'];

        if (in_array($nimToCheck, $existingNIMs)) {
            echo 'exists';
        } else {
            echo 'not_exists';
        }
    }
?>