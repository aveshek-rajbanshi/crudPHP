<?php

include("connection.php"); 

$fetchQuery = "SELECT * FROM person_info";
$data = mysqli_query($conn,$fetchQuery);
$totaldata = mysqli_num_rows($data);
// $query_result = mysqli_fetch_assoc($data);
// print_r($query_result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data-Fetch</title>
    <link rel="stylesheet" href="styling/display.css">
</head>
<body>

<div class="actionBtn"><a href="index.php">Back</a></div>
<div class="data-header-content">
    <h3>Professional Personality Information.</h3>
    <h5>All Information Fetched.</h5>
</div>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>Job Title</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
               if($totaldata != 0){

                   while($query_result = mysqli_fetch_assoc($data)){
                       
                       echo "<tr>
                       <td>".$query_result['Id']."</td>
                       <td>".$query_result['FullName']."</td>
                       <td>".$query_result['JobTitle']."</td>
                       <td>".$query_result['Email']."</td>
                       <td>".$query_result['Password']."</td>
                       <td><a class='updateBtn' href='update.php?id=$query_result[Id]'>Update</a> || <a class='deleteBtn' href='delete.php?id=$query_result[Id]'>Delete</a></td>
                       </tr>";
                    }
                }
            ?>
        </tbody>
    </table> 
</div>

</body>
</html>