<?php
 
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "crudlearning_php";

  $conn = mysqli_connect($server, $username, $password, $database);

  if($conn){
    // echo "connected to db";
  }else{
    echo "connection failed".mysqli_connect_error();
  }

?>