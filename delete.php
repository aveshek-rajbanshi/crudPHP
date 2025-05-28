<?php

   include("connection.php");

   $ids = $_GET['id'];

    session_start();

    $email = $_SESSION['user_email'];
    $pwd = $_SESSION['user_password'];

    // SESSION AUTHENTICATION
    if($email == true && $pwd == true){

    }else{
        header("Location: login.php");
    }

   if($conn){
      echo "<script>confirm(`Are you sure want to Delete {$ids} Data ?`)</script>";

      $deleteQuery = "DELETE FROM person_info WHERE Id='$ids'";
      $delete_result = mysqli_query($conn, $deleteQuery);

     if($delete_result){
        echo "<script>alert('Data Deleted Successfully' );</script>";
        ?>
          <meta http-equiv = "refresh" content = "0; url = http://localhost/crudPHP/display.php" />
        <?php
        }else{
            echo "<script>alert('Data Deleted Failed' );</script>";
        }
    }

?>