<?php

if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    http_response_code(403);
    die("no");
}

function connectDB() {
    $servername = "localhost";
    $username = "dev";
    $password = "php";
    $database = "media";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("no");
    }

    return $conn;
}
