<ul class="nav justify-content-center">
<?php
  if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin'] == "true") { ?>
  <li class="nav-item">
    <a class="nav-link active text-info" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-info" href="home.php">Dashboard</a>
    </li>
    
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
  if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == "true") { ?>
        <li class="nav-item">
        <a class="nav-link text-info" href="admin.php">Admin</a>
      </li> <?php
    }
}
  ?>
</ul>