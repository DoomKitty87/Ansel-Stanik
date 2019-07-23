<?php
include 'conn.php';
//Check if user has submitted the form
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if ($password == $password2) {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }
    else {
        echo "<div class='alert alert-danger' role='alert'>
        Passwords Do Not Match.
      </div>";
    }
    //Insert into database
    $sql = "INSERT INTO users (username, email, `password`) VALUES ('$username','$email','$password')";
    $conn->exec($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Your Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-5">
                <br>
                <br>
        <h1 class="text-info" >Register</h1>
        <form action="" method="post">
            <br>
            <div class="form-root">
                <label for="username"><h4 class="text-info mr-1">Enter Username</h4></label>
                <input type="text" name="username" id="username" required>
            </div>
            <br>
            <div class="form-root">
                <label for="email"><h4 class="text-info mr-1">Enter Email</h4></label>
                <input type="email" name="email" id="email" required>
            </div>
            <br>
            <div class="form-root">
                <label for="password"><h4 class="text-info mr-1">Enter Password</h4></label>
                <input type="password" name="password" id="password" required>
            </div>
            <br>
            <div class="form-root">
                <label for="password2"><h4 class="text-info mr-1">Confirm Password</h4></label>
                <input type="password" name="password2" id="password2" required>
            </div>
            <br>
            <button type="submit" class="btn btn-info" name="register"><h1>Register</h1></button>
        </form>
            </div>
        </div>
    </div>
</body>
</html>