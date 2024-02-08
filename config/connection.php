<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first_db";

// try {
//     $con = mysqli_connect($servername, $username, $password, $dbname);
//     if (!$con) {
//         throw new Exception("Connection failed: " . mysqli_connect_error());
//     }
// } catch (Exception $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

try {
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $username, $password, $options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    if ($pdo === false) {
        throw new Exception("Connection failed: " . $pdo->errorInfo());
    }
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}