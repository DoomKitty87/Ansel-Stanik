<?php
include "sess.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <?php
    include "nav.php";
    if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == "true") { ?>
    <a href="admin.php"><h3 class="text-warning">Admin Page</h3></a>
    <?php
    }
}
    ?>
    <?php
    echo "<h1 class='text-info'>Hello, " . $_SESSION['username'] . "!</h1>";
    ?>
    <br>
    <br>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
            <h3 class="text-success">My Account</h3>
            <br>
            <a class="btn btn-primary border border-primary bg-primary" href="#" role="button">Account Details</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
            <h3 class="text-warning">Earn Points</h3>
            <a class="btn btn-primary border border-primary bg-primary" href="trivia.php" role="button">Trivia</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
            <h3 class="text-danger">Emotes</h3>
            <a class="btn btn-primary border border-primary bg-primary" href="#" role="button">Chat</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
            <h3 class="text-primary">Main Webpage</h3>
            <a class="btn btn-primary border border-primary bg-primary" href="index.php" role="button">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>