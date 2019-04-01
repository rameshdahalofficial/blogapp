<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet"  href="./assets/css/dashboard.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Dashboard</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Logout</a>
      </li>
     
    </ul>
   
  </div>
 </div>
</nav>
<div class="container my-4">
<div class="row">
 <div class="col-lg-3 sidenav ">
 <ul class="nav flex-column shadow">
  <li>
    <a href="users.php">Users</a>
  </li>
  <li>
    <a href="#">Pages</a>
  </li>
  <li>
    <a href="blogs.php">Blogs</a>
  </li>
  <li>
    <a href="#">Categories</a>
  </li>
  <li>
    <a href="#">Contact</a>
  </li>
 </ul>
 </div>
 <div class="col-lg-9">
  <h1>Welcome 
  <?php 
    if(isset($_GET['username'])){
      echo $_GET['username']; 
    }
  ?>
  </h1>
 </div>
</div>
</div>
  
</body>
</html>