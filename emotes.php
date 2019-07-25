<?php
include "nav.php";
include "sess.php";
include "conn.php";
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
        echo "<h3 classd=text-success>You Have" . $_SESSION['points'] . "Points!</h3>";
        ?>
        <br>
         <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="col-4">
                    <h1 class="text-warning">Smiley Happy - 10 Points</h1>
                    
                    <?php
                    $ownedone = $_SESSION['ownedone'];
                    $points = $_SESSION['points'];
                    if ($ownedone = "true") { ?>
                        <button class="btn btn-danger mr-2 ml-2"><h4>Owned</h4></button>
                        <?php
                    }
                    else if ($points >= 10) { ?>
                        <button class="btn btn-success mr-2 ml-2" onclick="myFunction18()"><h4>Purchase</h4></button>
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
            <div class="card">
                <div class="card-body">
                    <div class="col-4">
                    <h1 class="text-warning">Angry - 50 Points</h1>
                    
                    <?php
                    $ownedtwo = $_SESSION['ownedtwo'];
                    $points = $_SESSION['points'];
                    if ($ownedtwo = "true") { ?>
                        <button class="btn btn-danger mr-2 ml-2"><h4>Owned</h4></button>
                        <?php
                    }
                    else if ($points >= 50) { ?>
                        <button class="btn btn-success mr-2 ml-2" onclick="myFunction18()"><h4>Purchase</h4></button>
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
            <div class="card">
                <div class="card-body">
                    <div class="col-4">
                    <h1 class="text-warning">Cool - 150 Points</h1>
                    <?php
                    $ownedthree = $_SESSION['ownedthree'];
                    $points = $_SESSION['points'];
                    if ($ownedthree = "true") { ?>
                        <button class="btn btn-danger mr-2 ml-2"><h4>Owned</h4></button>
                        <?php
                    }
                    else if ($points >= 150) { ?>
                        <button class="btn btn-success mr-2 ml-2" onclick="myFunction18()"><h4>Purchase</h4></button>
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
            <div class="card">
                <div class="card-body">
                    <div class="col-4">
                    <h1 class="text-warning">Cat - 250 Points</h1>
                    <?php
                    $ownedfour = $_SESSION['ownedfour'];
                    $points = $_SESSION['points'];
                    if ($ownedthree = "true") { ?>
                        <button class="btn btn-danger mr-2 ml-2"><h4>Owned</h4></button>
                        <?php
                    }
                    else if ($points >= 250) { ?>
                        <button class="btn btn-success mr-2 ml-2" onclick="myFunction18()"><h4>Purchase</h4></button>
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
            <div class="card">
                <div class="card-body">
                    <div class="col-4">
                    <h1 class="text-warning">Dog - 250 Points</h1>
                    <?php
                    $ownedfive = $_SESSION['ownedfive'];
                    $points = $_SESSION['points'];
                    if ($ownedfive = "true") { ?>
                        <button class="btn btn-danger mr-2 ml-2"><h4>Owned</h4></button>
                        <?php
                    }
                    else if ($points >= 250) { ?>
                    <button class="btn btn-success mr-2 ml-2" onclick="myFunction18()"><h4>Purchase</h4></button>
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
    <script>
        function myFunction18() {
            <?php
            $id = $_SESSION['id'];
            $sql = "UPDATE users SET points = points-250 WHERE id = $id";
            $conn->exec($sql);
            $ownedfive = "true";
            $sql = "UPDATE users SET ownedfive = $ownedfive WHERE id = $id";
            ?>
            document.location.reload(true);
        }
        function myFunction17() {
            <?php
            $id = $_SESSION['id'];
            $sql = "UPDATE users SET points = points-250 WHERE id = $id";
            $conn->exec($sql);
            $ownedfour = "true";
            $sql = "UPDATE users SET ownedfour = $ownedfour WHERE id = $id";
            $conn->exec($sql);
            ?>
            document.location.reload(true);
        }
        function myFunction16() {
            <?php
            $id = $_SESSION['id'];
            $sql = "UPDATE users SET points = points-150 WHERE id = $id";
            $conn->exec($sql);
            $ownedthree = "true";
            $sql = "UPDATE users SET ownedthree = $ownedthree WHERE id = $id";
            $conn.exec($sql);
            ?>
            document.location.reload(true);
        }
        function myFunction15() {
            <?php
            $id = $_SESSION['id'];
            $sql = "UPDATE users SET points = points-50 WHERE id = $id";
            $conn->exec($sql);
            $ownedtwo = "true";
            $sql = "UPDATE users SET ownedtwo = $ownedtwo WHERE id = $id";
            $conn->exec($sql);
            ?>
            document.location.reload(true);
        }
        function myFunction14() {
            <?php
            $id = $_SESSION['id'];
            $sql = "UPDATE users SET points = points-10 WHERE id = $id";
            $conn->exec($sql);
            $ownedone = "true";
            $sql = "UPDATE users SET ownedone = $ownedone WHERE id = $id";
            $conn->exec($sql);
            ?>
            document.location.reload(true);
        }
        </script>
</body>
</html>