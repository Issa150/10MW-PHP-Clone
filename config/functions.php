<?php
  // include_once "connectionDB.php";
  function getUserInfo($userId){
    $db = new Database();
    $pdo = $db->connect();
    $sql = "SELECT * FROM users3 WHERE id = :id";
    $request = $pdo->prepare($sql);
    $request->execute([
        ':id' => $userId 
    ]);
    $res = $request->fetch();
    return $res;

}

// echo '<pre>';
// var_dump();
// echo '</pre>';