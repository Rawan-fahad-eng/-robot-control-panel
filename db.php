<?php

$host = "sql303.infinityfree.com";      
$user = "if0_42416077";                
$pass = "Rawan123123r";           
$dbname = "if0_42416077_robot_db";   

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "فشل الاتصال: " . $conn->connect_error]));
}
?>
