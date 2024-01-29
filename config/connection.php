<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first_db";

try {
    $con = mysqli_connect($servername, $username, $password, $dbname);
    if (!$con) {
        throw new Exception("Connection failed: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}