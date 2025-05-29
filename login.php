<?php 

   session_start();

   include("connection.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Account</title>
    <link rel="stylesheet" href="styling/form.css">
</head>
<body>

   <div class="form-container">
    <div class="actionBtn"><a href="sessionvalid.php">Back</a></div>
    <h2 id="form-header">Login an Account.</h2>
    <div class="form-wrapper">
        <form action="#" method="POST">

           <div class="input-wrapper">
            <input type="text" id="email" name="email" required>
            <label for="email">Email</label>
           </div> 
           <div class="input-wrapper">
            <input type="text" id="password" name="password" required>
            <label for="password">Password</label>
           </div> 

           <div class="input-wrapper">
            <input id="submitBtn" name="login" type="submit" value="Login">
           </div> 
           <div class="exits-account"><span>Don't have an account? <a href="signup.php">Login</a></span></div>
        </form>
    </div>
   </div>
    
</body>
</html>

<?php 

  if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];


    if($email != "" && $password != ""){
        $dataFetchQuery = "SELECT * FROM account_info WHERE Email='$email'AND Password='$password'";
        $query_data = mysqli_query($conn,$dataFetchQuery);
        $totalQueryData = mysqli_num_rows($query_data);
        
        if($totalQueryData == 1){
            // echo "<script>alert('login Successfully' );</script>";
            $_SESSION['user_email'] = $email;
            $_SESSION['user_password'] = $password;
            header("Location: index.php");
        }else{
            // echo "<script>alert('login Failed' );</script>";
            header("Location: login.php");
        }

    }else{
        echo "<script>alert('Please fill up the form.' );</script>";   
    }
  }

?>