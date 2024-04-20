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



function getInfoById($table, $col_name, $id){
  $db = new Database();
  $pdo = $db->connect();
  $sql = "SELECT * FROM $table WHERE $col_name = :id";
  $request = $pdo->prepare($sql);
  $request->execute([
      ':id' => $id 
  ]);
  $res = $request->fetchAll();
  return $res;

}
function getInfoByJoin($table1, $table2, $col_table2_asked , $col_joining ,$col_tabl1_asked, $col_table1_given){
  $db = new Database();
  $pdo = $db->connect();
  $sql = "SELECT students.*,members.$col_table2_asked
          FROM $table1
          INNER JOIN $table2
          ON $table1.$col_joining = $table2.id
          WHERE $table1.$col_tabl1_asked = :id";
  $request = $pdo->prepare($sql);
  $request->execute([
      ':id' => $col_table1_given 
  ]);
  $res = $request->fetchAll();
  return $res;

}

function dd($var){
  echo '<pre>';
  var_dump($var);
  echo '</pre>';
}