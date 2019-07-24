<?php
include "conn.php";
include "sessadmin.php";
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    $conn->exec($sql);
}
$sql = "SELECT * FROM users";
$s = $conn->prepare($sql);
$s->execute();
$users = $s->fetchALL();
//Handle Deleting User

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <?php
    include "nav.php";
if ($users && $s->rowCount() > 0) { ?>
<div class="row">
    <div class="col">
        <h3 class="text-info">Username</h3>
    </div>
    <div class="col">
        <h3 class="text-info">Email</h3>
    </div>
    <div class="col">
        <h3 class="text-info">Update</h3>
    </div>
    <div class="col">
        <h3 class="text-info">Delete</h3>
    </div>
</div>
<?php
    foreach($users as $user) {
        ?>
        <div class="row mb-3">
            <div class="col">
               <h5> <?php
            echo $user['username'];
            ?></h5>
            </div>
            <div class="col">
                <h5>
                    <?php echo $user['email']; ?>
                </h5>
            </div>
            <div class="col">
            <form action="adminupdateuser.php" method="get">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <button type="submit" name="update" class="btn btn-info">Update</button>
        </form>
            </div>
            <div class="col">
            <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
        </form>
            </div>
        </div>
       <?php 
    }
}
?>
</div>
</body>
</html>