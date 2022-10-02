<?php

function initDB()
{

    $config = file_get_contents("./connect.json");

    $decoded_json = json_decode($config, false);

    $servername = $decoded_json->server;
    $username   = $decoded_json->username;
    $password   = $decoded_json->password;
    $dbname     = $decoded_json->database;

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("<p style=\"font-size:25px; font-weight: 500; color: red;\">เชื่อมต่อระบบฐานข้อมูลล้มเหลว: ติดต่อผู้พัฒนาระบบ<br>" . $conn->connect_error . "<p>");
    }
    return $conn;
}