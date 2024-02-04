<?php
if (isset($_SESSION["user"])) {
  $savedName = $_SESSION["user"];
  $query = "SELECT * FROM users3 WHERE name = '$savedName' LIMIT 1";
  $res = mysqli_query($con, $query);

  if ($res && mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    $fullname =  ucfirst($_SESSION["user"]) . " " . strtoupper($row["lastname"]);

    $country = $row["country"];
    $city = $row["city"];
    $email = $row["email"];
    $imageProfile = $row["image_profile"];
  }
} else {
  $fullname =  "Unknown";
  $country = "...";
  $city = "...";
  $email = "...";
}

// function dumping($var){
//   echo "<pre>";
//   var_dump($var);
//   echo "</pre>";
// }
