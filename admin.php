<?php
include "conn.php";
$sql = "SELECT * FROM users";
$s = $conn->prepare($sql);
$s->execute();
$users = $s->fetchALL();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <?php
if ($users && $s->rowCount() > 0) {
    foreach($users as $user) {
        echo $user['username'];
        echo ", ";
        echo $user['email'];
        echo ", ";
        echo $user['password'];
        echo "<br>";
    }
}
?>
</body>
</html>