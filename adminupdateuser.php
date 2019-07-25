<?php
include "conn.php";
include "sessadmin.php";
//Handle Deleting User
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    $conn->exec($sql);
    header('Location: admin.php');
    die;
}
//Handle Updating User Info
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $status = $_POST['status'];
    $points = $_POST['points'];
    $sql = "UPDATE users SET username = '$username', email = '$email', `type` = '$type', `status` = '$status', points = $points WHERE id = $id";
    $conn->exec($sql);
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $s = $conn->prepare($sql);
    $s->execute();
    $user = $s->fetch(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Update User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        include "nav.php";
        ?>
        <h1 class="text-info">Update User</h1>
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
                <label for="type"><h4 class="text-info mr-1">Edit Type</h4></label>
                <input type="text" name="type" id="type" value="<?php echo $user['type']; ?>"required>
            </div>
            <br>
            <div class="form-root">
                <label for="status"><h4 class="text-info mr-1">Edit Status</h4></label>
                <input type="text" name="status" id="status" value="<?php echo $user['status']; ?>"required>
            </div>
            <br>
            <div class="form-root">
                <label for="points"><h4 class="text-info mr-1">Edit Points</h4></label>
                <input type="integer" name="points" id="points" value="<?php echo $user['points']; ?>"required>
            </div>
            <br>
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <button type="submit" class="btn btn-info" name="update"><h1>Update</h1></button>
        </form>
        </form>
            <form class="float-right" action="" method="post">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
        </form>
</div>
</body>
</html>