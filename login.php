<?php
include 'conn.php';
//Check if user has submitted the form
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $s = $conn->prepare($sql);
    $s->execute();
    $user = $s->fetch(PDO::FETCH_ASSOC);
    if ($user['username'] == $username) {
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $user['id'];
            $_SESSION['loggedin'] = 'true';
            if ($user['type'] == "admin") {
                $_SESSION['admin'] = 'true';
            }
            header('Location: home.php');
            die;
        }
        else {
            echo "<div class='alert alert-danger' role='alert'>
            Incorrect Password.
            </div>";
        } 
    }
    else {
        echo "<div class='alert alert-danger' role='alert'>
        Invalid Username.
        </div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php include "nav.php"; ?>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-5">
                <br>
                <br>
        <h1 class="text-info" >Login</h1>
        <form action="" method="post">
            <br>
            <div class="form-root">
                <label for="username"><h4 class="text-info mr-1">Enter Username</h4></label>
                <input type="text" name="username" id="username" required>
            </div>
            <br>
            <div class="form-root">
                <label for="password"><h4 class="text-info mr-1">Enter Password</h4></label>
                <input type="password" name="password" id="password" required>
            </div>
            <br>
            <button type="submit" class="btn btn-info" name="login"><h1>Login</h1></button>
        </form>
            </div>
        </div>
    </div>
</body>
</html>