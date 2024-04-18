<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "first_db";



// try {
//     $charset = 'utf8mb4';
//     $dsn = "mysql:host=$servername;dbname=$dbname;charset=$charset";
//     $options = [
//         PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//         PDO::ATTR_EMULATE_PREPARES   => false,
//     ];

//     $pdo = new PDO($dsn, $username, $password, $options);

//     if ($pdo === false) {
//         throw new Exception("Connection failed: " . $pdo->errorInfo());
//     }
// } catch (Exception $e) {
//     echo "Connection failed: " . $e->getMessage();
// }
//////////////////

class Database {
    private $host;
    private $user;
    private $password;
    private $dbname;
    private $connection;

    public function __construct() {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = "";
        $this->dbname = '10mw';
    }

    public function connect() {
        try{
            $charset = 'utf8mb4';
            $dsn = "mysql:host=". $this->host. ";dbname=". $this->dbname. ";charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                // PDO::ATTR_EMULATE_PREPARES   => false,
            ];  

            // Return the connection object
           return $this->connection = new PDO($dsn, $this->user, $this->password, $opt); 

        }catch(PDOException $e){
            die('Connection failed: '. $e->getMessage());
        }
        // Return the existing connection
        // return $this->connection;
    }
}

//self::$password