<?php
include "conn.php";
include "sess.php";
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$s = $conn->prepare($sql);
$s->execute();
$user = $s->fetch(PDO::FETCH_ASSOC);
$username = $user['username'];
$password = $user['password'];
$email = $result['email'];
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $status = $_POST['status'];
    $points = $_POST['points'];
    $sql = "UPDATE users SET username = '$username', email = '$email', password = '$password' WHERE id = $id";
    $conn->exec($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        include "nav.php";
        ?>
    <br>
    <h1 class="text-info">My Account</h1>
    <br>
    <h1 class="text-info">Update Info</h1>
        <form action="" method="post">
        <br>
            <div class="form-root">
                <label for="username"><h4 class="text-info mr-1">Edit Username</h4></label>
                <input type="text" name="username" id="username" value="<?php echo $user['username'];?>"required>
            </div>
            <br>
            <div class="form-root">
                <label for="email"><h4 class="text-info mr-1">Edit Email</h4></label>
                <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>"required>
            </div>
            <br>
            <div class="form-root">
                <label for="username"><h4 class="text-info mr-1">Points</h4></label>
                <input type="text" name="username" id="username" value="<?php echo $user['points']; ?>"readonly>
            </div>
            <br>
            </form>
            <a href="password.php" class="btn btn-warning">Change Password</a>
            <br>
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <button type="submit" class="btn btn-info" name="update"><h1>Update</h1></button>
        </form>
        <br>
        </form>
            <form class="float-right" action="" method="post">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
        </form>
    </div>
</body>
</html>