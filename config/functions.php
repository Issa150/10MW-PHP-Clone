<?php
  include_once "connection.php";

// if (isset($direPos) && $direPos == "subPage") {
//   include_once "../config/connection.php";
// }else{
//   include_once "config/connection.php";

// }

if (isset($_SESSION["user10MW"])) {
  $savedName = $_SESSION["user10MW"];
  $stmt = $pdo->prepare("SELECT * FROM users3 WHERE name = :name LIMIT 1");
  $stmt->bindParam(':name', $savedName);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
      $row = $stmt->fetch();
      $fullname = ucfirst($savedName) . " " . strtoupper($row["lastname"]);

      $country = $row["country"];
      $city = $row["city"];
      $email = $row["email"];
      $imageProfile = $row["image_profile"];
      $interests = $row["inretests"];
  }
} else {
  $fullname = "Unknown";
  $country = "...";
  $city = "...";
  $email = "...";
  $interests = "...";
}

