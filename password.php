<?php
include "conn.php";
include "sess.php";
if (isset($_POST['update'])) {
$passwordold = $_POST['passwordold'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$s = $conn->prepare($sql);
$s->execute();
$user = $s->fetch(PDO::FETCH_ASSOC);
if (password_verify($passwordold, $user['password'])) {
    if ($password == $password2) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET `password` = '$password' WHERE id = $id";
    $conn->exec($sql);
    session_start();
session_unset();
session_destroy();
    header('Location: login.php');
    die;
    }
    else { ?>
        <div class="alert alert-danger" role="alert">
Passwords Do Not Match.
</div>
<?php
    }
}
else { ?>
    <div class="alert alert-danger" role="alert">
 Incorrect Password.
</div>
<?php
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
include "nav.php";
?>
<form action="" method="post">
            <br>
            <div class="form-root">
                <label for="passwordold"><h4 class="text-info mr-1">Enter Old Password</h4></label>
                <input type="password" name="passwordold" id="passwordold" required>
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
            <button type="submit" class="btn btn-info" name="update"><h1>Change Password</h1></button>
        </form>
    </div>
</body>
</html>