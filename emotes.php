<?php
include "sess.php";
include "nav.php";
include "conn.php";
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$s = $conn->prepare($sql);
$s->execute();
$result = $s->fetch(PDO::FETCH_ASSOC);
$ownedone = $result['ownedone'];
$points = $result['points'];
$ownedtwo = $result['ownedtwo'];
$ownedthree = $result['ownedthree'];
$ownedfour = $result['ownedfour'];
$ownedfive = $result['ownedfive'];
if (isset($_POST['button14'])) {
    $sql = "UPDATE users SET points = points-10 WHERE id = $id";
    $conn->exec($sql);
    $ownedone = "true";
    $sql = "UPDATE users SET ownedone = '$ownedone' WHERE id = $id";
    $conn->exec($sql);
}
if (isset($_POST['button15'])) {
    $sql = "UPDATE users SET points = points-50 WHERE id = $id";
    $conn->exec($sql);
    $ownedtwo = "true";
    $sql = "UPDATE users SET ownedtwo = '$ownedtwo' WHERE id = $id";
    $conn->exec($sql);
}
if (isset($_POST['button16'])) {
    $sql = "UPDATE users SET points = points-150 WHERE id = $id";
    $conn->exec($sql);
    $ownedthree = "true";
    $sql = "UPDATE users SET ownedthree = '$ownedthree' WHERE id = $id";
    $conn->exec($sql);
}
if (isset($_POST['button17'])) {
    $sql = "UPDATE users SET points = points-250 WHERE id = $id";
    $conn->exec($sql);
    $ownedfour = "true";
    $sql = "UPDATE users SET ownedfour = '$ownedfour' WHERE id = $id";
    $conn->exec($sql);
}
if (isset($_POST['button18'])) {
    $sql = "UPDATE users SET points = points-250 WHERE id = $id";
    $conn->exec($sql);
    $ownedfive = "true";
    $sql = "UPDATE users SET ownedfive = '$ownedfive' WHERE id = $id";
    $conn->exec($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emote Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-info">Emote Store</h1>
        <br>
        <?php
        echo "<h3 class='text-success'>You Have " . $result['points'] . " Points!</h3>";
        ?>
        <br>
         <div class="row">
             <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-warning">Smiley Happy - 10 Points</h1>
                    <?php
                    if ($ownedone == "true") { ?>
                        <button class="btn btn-danger mr-2 ml-2"><h4>Owned</h4></button>
                        <?php
                    }
                    else if ($points >= 10) { ?>
                    <form action="" method="post">
                        <button id="button14" name="button14" class="btn btn-success mr-2 ml-2"><h4>Purchase</h4></button>
                    </form>
                        <?php
                        }
                        else { ?>
                        <button class="btn btn-secondary mr-2 ml-2"><h4>Can't Afford</h4></button>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-warning">Angry - 50 Points</h1>
                    
                    <?php
                    if ($ownedtwo == "true") { ?>
                        <button class="btn btn-danger mr-2 ml-2"><h4>Owned</h4></button>
                        <?php
                    }
                    else if ($points >= 50) { ?>
                        <form action="" method="post">
                        <button id="button14" name="button15" class="btn btn-success mr-2 ml-2"><h4>Purchase</h4></button>
                    </form>
                        <?php
                        }
                        else { ?>
                        <button class="btn btn-secondary mr-2 ml-2"><h4>Can't Afford</h4></button>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-warning">Cool - 150 Points</h1>
                    <?php
                    if ($ownedthree == "true") { ?>
                        <button class="btn btn-danger mr-2 ml-2"><h4>Owned</h4></button>
                        <?php
                    }
                    else if ($points >= 150) { ?>
                        <form action="" method="post">
                        <button id="button14" name="button16" class="btn btn-success mr-2 ml-2"><h4>Purchase</h4></button>
                    </form>
                        <?php
                        }
                        else { ?>
                        <button class="btn btn-secondary mr-2 ml-2"><h4>Can't Afford</h4></button>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="card-body">
        
            <div class="card">
                    <div class="col-4">
                    <h1 class="text-warning">Cat - 250 Points</h1>
                    <?php
                    if ($ownedfour == "true") { ?>
                        <button class="btn btn-danger mr-2 ml-2 mb-3"><h4>Owned</h4></button>
                        <?php
                    }
                    else if ($points >= 250) { ?>
                        <form action="" method="post">
                        <button id="button14" name="button17" class="btn btn-success mr-2 ml-2 mb-3"><h4>Purchase</h4></button>
                    </form>
                        <?php
                        }
                        else { ?>
                        <button class="btn btn-secondary mr-2 ml-2 mb-3"><h4>Can't Afford</h4></button>
                        <?php
                        }
                        ?>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-warning">Dog - 250 Points</h1>
                    <?php
                    if ($ownedfive =="true") { ?>
                        <button class="btn btn-danger mr-2 ml-2"><h4>Owned</h4></button>
                        <?php
                    }
                    else if ($points >= 250) { ?>
                    <form action="" method="post">
                        <button id="button14" name="button18" class="btn btn-success mr-2 ml-2"><h4>Purchase</h4></button>
                    </form>
                    <?php
                    }
                    else { ?>
                    <button class="btn btn-secondary mr-2 ml-2"><h4>Can't Afford</h4></button>
                    <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>