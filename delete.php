<?php

   include("connection.php");

   $ids = $_GET['id'];

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