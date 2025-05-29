<?php

   session_start();

   include("connection.php");

   $ids = $_GET['id'];

   $email = $_SESSION['user_email'];
   $pwd = $_SESSION['user_password'];

    // SESSION AUTHENTICATION
    if($email == true && $pwd == true){

    }else{
        header("Location: login.php");
    }

    $fetchQuery = "SELECT * FROM account_info WHERE Id='$ids'";
    $data = mysqli_query($conn,$fetchQuery);
    $getData = mysqli_fetch_assoc($data);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userprofile</title>
    <link rel="stylesheet" href="styling/userprofile.css">
</head>
<body>

  <div class="main">
    <nav>
        <h2 id="brand">crudPHP</h2>
        <a id="logout" href="logout.php">Logout</a>
    </nav>
    <div class="landingPage">
        <div id="profile-picContainer">
            <div id="img-container">
                <img src="<?php echo $getData['Profile']; ?>" alt="user-profile">
            </div>
            <div class="userInfo">
                <h4><?php echo $getData['FullName']; ?></h4>
                <h6><?php echo $getData['Email']; ?></h6>
            </div>
        </div>

    </div>
  </div>
    
</body>
</html>