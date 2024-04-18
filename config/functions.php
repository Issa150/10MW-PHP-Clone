<?php
  // include_once "connectionDB.php";
  function getUserInfo($userId){
    $db = new Database();
    $pdo = $db->connect();
    $sql = "SELECT * FROM members WHERE id = :id";
    $request = $pdo->prepare($sql);
    $request->execute([
        ':id' => $userId 
    ]);
    $res = $request->fetch();
    return $res;

}



function getInfoById($table, $col, $userId){
  $db = new Database();
  $pdo = $db->connect();
  $sql = "SELECT * FROM $table WHERE $col = :id";
  $request = $pdo->prepare($sql);
  $request->execute([
      ':id' => $userId 
  ]);
  $res = $request->fetchAll();
  return $res;

}

function dd($var){
  echo '<pre>';
  var_dump($var);
  echo '</pre>';
}