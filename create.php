<?php 

   include("connection.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data-Create</title>
    <link rel="stylesheet" href="styling/form.css">
</head>
<body>

   <div class="form-container">
    <div class="actionBtn"><a href="index.php">Back</a></div>
    <h2 id="form-header">Bio-Form</h2>
    <div class="form-wrapper">
        <form action="#" method="POST">

           <div class="input-wrapper">
            <input type="text" id="name" name="name" required>
            <label for="name">FullName</label>
           </div>
           
           <div class="input-wrapper">
            <input type="text" id="profession" name="profession" required>
            <label for="profession">Job-Title</label>
           </div> 

           <div class="input-wrapper">
            <input type="text" id="email" name="email" required>
            <label for="email">Email</label>
           </div> 
           <div class="input-wrapper">
            <input type="text" id="password" name="password" required>
            <label for="password">Password</label>
           </div> 

           <div class="input-wrapper">
            <input id="submitBtn" name="submit" type="submit" value="submit">
           </div> 

        </form>
    </div>
   </div>
    
</body>
</html>

<?php 

  if(isset($_POST['submit'])){

    $username = $_POST['name'];
    $jobtitle = $_POST['profession'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($username != "" && $jobtitle != "" && $email != "" && $password != ""){
        $insertQuery = "INSERT INTO person_info (FullName, JobTitle, Email, Password) VALUES('$username','$jobtitle','$email','$password')";
        $query_data = mysqli_query($conn,$insertQuery);
        
        if($query_data){
            echo "<script>alert('Data Insert Successfully' );</script>";
        }else{
            echo "<script>alert('Data Inserted Failed' );</script>";
        }

    }else{
        echo "<script>alert('Please fill up the form.' );</script>";   
    }
  }

?>