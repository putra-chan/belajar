<?php
  $serverName = "localhost";
  $username   = "root";
  $password   = "";
  $dbName     = "belajar_web";

  $connect = new mysqli($serverName, $username, $password, $dbName);
  if ($connect->connect_error) {
    die("Connection Failed: ". $connect->connect_error);
  }
  // $sql = "Select id, firstname, lastname from users";
  // $result = $connect->query($sql);
  //
  // if($result->num_rows > 0){
  //   while ($row = $result->fetch_assoc()) {
  //     echo $row["id"];
  //     echo $row["firstname"];
  //     echo $row["lastname"];
  //   }
  // }
  // else {
  //   echo "No Result Found!";
  // }
  $connect->close();
?>
