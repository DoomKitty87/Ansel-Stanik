<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <ul class="nav justify-content-center">
        <?php
  if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin'] == "true") { ?>
  <li class="nav-item">
    <a class="nav-link active text-info" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-info" href="index2.php">Videos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-info" href="index3.php">Info</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-info" href="home.php">Dashboard</a>
    <?php
    }
  }
  ?>
  <li class="nav-item">
    <a class="nav-link text-info" href="register.php">Register</a>
  </li>
  <?php
 if (empty($_SESSION)) { ?>
  <li class="nav-item">
    <a class="nav-link text-info" href="login.php">Login</a>
  </li>
  <?php
 }
  if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin'] == "true") { ?>
  <li class="nav-item">
    <a class="nav-link active text-info" href="logout.php">Logout</a>
  </li>
  <?php
    }
  }
  if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin'] == "true") { ?>
  <li class="nav-item">
    <a class="nav-link text-info" href="index4.php" tabindex="-1" aria-disabled="true">Calendar</a>
  </li>
  <?php
    }
  }
  ?>
</ul>
<h1 class="text-info">Our Content</h1>
<div class="row">


</div>
    </div>
</body>
</html>