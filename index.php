<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page</title>
    <link rel="stylesheet" href="styling/index.css">
</head>
<body>
  <!-- git push origin main -->


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

<div class="section"></div>
  </div>
   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js" integrity="sha512-P2IDYZfqSwjcSjX0BKeNhwRUH8zRPGlgcWl5n6gBLzdi4Y5/0O4zaXrtO4K9TZK6Hn1BenYpKowuCavNandERg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="scripting/index.js"></script>
</body>
</html>