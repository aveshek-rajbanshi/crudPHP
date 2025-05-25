<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page</title>
    <link rel="stylesheet" href="styling/index.css">
</head>
<body>

  <div class="overlay">
    <div class="overlay-menu">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <br><br>
        <li><a href="create.php" class="crudLink">Create</a></li>
        <li><a href="display.php" class="crudLink">Display</a></li>
      </ul>
    </div>
  </div>

  <div class="main">
    <h1>CRUD.</h1>
    <div class="landing-page">
      <div class="logo">
        <h3 id="brand">crudPHP</h3>
        <div class="menubox">
          <h5 id="menuOperation">MENU</h5>
        </div>
      </div>
      <div class="img-container">
        <img src="image/nightmodel.jpg" alt="Modle">
      </div>

    </div>
  </div>
   
  <script src="scripting/index.js"></script>
</body>
</html>