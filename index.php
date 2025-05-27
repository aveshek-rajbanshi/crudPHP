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
        <li><a href="index.php">Home</a></li>
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

<div id="content">
  <h2>CRUD Operation.</h2>
  <div id="paragraph-container">
    <p>CRUD is an acronym that stands for Create, Read, Update, and Delete — the four basic<br>
     functions required to manage data in a database or application. The Create operation<br>
     is used to add new records or data entries, typically through a form or input interface.<br>
      Read allows users to retrieve or view existing data without making changes to it, often using<br>
       queries or filters. Update enables modification of existing data, allowing users to<br>
        change values within a record. Delete is used to remove data that is no longer needed or<br> 
        is incorrect. Together, these operations form the foundation of most web and software<br>
         applications, enabling full data lifecycle management. In databases, CRUD maps to SQL<br> 
         commands such as INSERT, SELECT, UPDATE, and DELETE. CRUD is also integral to<br> 
         RESTful APIs, where HTTP methods like POST, GET, PUT/PATCH, and DELETE correspond to<br>
          these actions. Implementing CRUD correctly ensures that data is handled efficiently and securely<br>,
           with proper validation and access control. Overall, CRUD operations are essential for<br> 
           building dynamic, interactive, and reliable systems.</p>
  </div>
</div>

<div class="crudimg-container">
  <img src="image/rinng.jpg" alt="model1">
</div>

<div class="footer">
  <p>All right&copy; reserved by Aveshek | Preyanch Rajbanshi 2025 AD.</p>
</div>
  </div>
   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
  <script src="scripting/index.js"></script>
</body>
</html>