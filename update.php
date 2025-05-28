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

   $selectQuery = "SELECT * FROM person_info WHERE Id = '$ids' ";
   $selectDate = mysqli_query($conn, $selectQuery);
   $update_result = mysqli_fetch_assoc($selectDate);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-Info</title>
    <link rel="stylesheet" href="styling/form.css">
</head>
<body>

   <div class="form-container">
    <div class="actionBtn"><a href="index.php">Back</a></div>
    <h2 id="form-header">Update Personal Info.</h2>
    <div class="form-wrapper">
        <form action="#" method="POST">

           <div class="input-wrapper">
            <input type="text" id="name" name="name" value="<?php echo $update_result['FullName'] ?>" required>
            <label for="name">FullName</label>
           </div>
           
           <div class="input-wrapper">
            <input type="text" id="profession" name="profession" value="<?php echo $update_result['JobTitle'] ?>" required>
            <label for="profession">Job-Title</label>
           </div> 

           <div class="input-wrapper">
            <input type="text" id="email" name="email" value="<?php echo $update_result['Email'] ?>" required>
            <label for="email">Email</label>
           </div> 
           <div class="input-wrapper">
            <input type="text" id="password" name="password" value="<?php echo $update_result['Password'] ?>" required>
            <label for="password">Password</label>
           </div> 

           <div class="input-wrapper">
            <input id="updateBtn" name="update" type="submit" value="update">
           </div> 

        </form>
    </div>
   </div>
    
</body>
</html>

<?php 

  if(isset($_POST['update'])){

    $username = $_POST['name'];
    $jobtitle = $_POST['profession'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($username != "" && $jobtitle != "" && $email != "" && $password != ""){
        // $insertQuery = "INSERT INTO person_info (FullName, JobTitle, Email, Password) VALUES('$username','$jobtitle','$email','$password')";
        $updateQuery = "UPDATE person_info SET FullName='$username', JobTitle='$jobtitle', Email='$email', Password='$password' WHERE Id='$ids'";
        $updatequery_data = mysqli_query($conn,$updateQuery);
        
        if($updatequery_data){
            echo "<script>alert('Data Updated Successfully' );</script>";
            ?>
             <meta http-equiv = "refresh" content = "0; url = http://localhost/crudPHP/display.php" />
            <?php
        }else{
            echo "<script>alert('Data Updated Failed' );</script>";
        }

    }else{
        echo "<script>alert('Please fill up the form.' );</script>";   
    }
  }

?>