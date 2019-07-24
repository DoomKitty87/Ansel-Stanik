<?php
include "sess.php";
include "nav.php";
include "conn.php";
$random = rand(1,3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trivia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <h3 class="text-success">Complete Trivia To Earn Points!</h3>
        <br>
        <br>
        <br>
        <?php
        if ($random == 1) { ?>
        <div class="card">
  <div class="card-body">
    <h2 class="text-primary">When Was Magic The Gathering Released?</h2>
    <br>
    <div class="row">
    <button class="btn btn-success mr-2 ml-2" onclick="myFunction13()">2005</button>
    <button class="btn btn-primary mr-2" onclick="myFunction13()">1995</button>
    <button class="btn btn-danger mr-2" onclick="myFunction12()">1993</button>
    <button class="btn btn-info mr-2" onclick="myFunction13()">1999</button>
    </div>
  </div>
</div>
<?php
        }
        if ($random == 2) { ?>
            <div class="card">
            <div class="card-body">
            <h2 class="text-danger">What Is The Newest MTG Set?</h2>
            <br>
            <div class="row">
                <button class="btn btn-success mr-2 ml-2" onclick="myFunction13()">Dominaria</button>
                <button class="btn btn-primary mr-2" onclick="myFunction12()">M20</button>
                <button class="btn btn-danger mr-2" onclick="myFunction13()">Masters 25</button>
                <button class="btn btn-info mr-2" onclick="myFunction13()">Battlebond</button>
            </div>
            </div>
            </div>
            <?php
        }
        if ($random == 3) { ?>
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Was The Most Powerful Land Cycle?</h2>
                <br>
                <div class="row">
                <button class="btn btn-success mr-2 ml-2" onclick="myFunction12()">Dual Lands (Unlimited)</button>
    <button class="btn btn-primary mr-2" onclick="myFunction13()">Shock Lands (Ravnica)</button>
    <button class="btn btn-danger mr-2" onclick="myFunction13()">Tap Lands (Ravnica)</button>
    <button class="btn btn-info mr-2" onclick="myFunction13()">Check Lands (Dominaria/Ixalan/M15)</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <script>
            function myFunction12() {
                <?php
                $id = $_SESSION['id'];
                $sql = "UPDATE users SET points = points+1 WHERE id = $id";
                $conn->exec($sql);
                ?>
                document.location.reload(true)
            }
            function myFunction13() {
                document.location.reload(true)
            }
            </script>
</body>
</html>