<?php 

   include("connection.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create-account</title>
    <link rel="stylesheet" href="styling/form.css">
</head>
<body>

   <div class="form-container">
    <div class="actionBtn"><a href="sessionvalid.php">Back</a></div>
    <h2 id="form-header">Create an Account.</h2>
    <div class="form-wrapper">
        <form action="#" method="POST">

           <div class="input-wrapper">
            <input type="text" id="name" name="name" required>
            <label for="name">FullName</label>
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
            <input id="submitBtn" name="signup" type="submit" value="Sign up">
           </div> 

        </form>
    </div>
   </div>
    
</body>
</html>

<?php 

  if(isset($_POST['signup'])){

    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($username != "" && $email != "" && $password != ""){
        $insertQuery = "INSERT INTO account_info (FullName, Email, Password) VALUES('$username','$email','$password')";
        $query_data = mysqli_query($conn,$insertQuery);
        
        if($query_data){
            // echo "<script>alert('Data Insert Successfully' );</script>";
            header("Location:login.php");
        }else{
            // echo "<script>alert('Data Inserted Failed' );</script>";
            header("Location:signup.php");

        }

    }else{
        echo "<script>alert('Please fill up the form.' );</script>";   
    }
  }

?>