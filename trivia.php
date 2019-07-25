<?php
include "sess.php";
include "nav.php";
include "conn.php";
$random = rand(1,10);
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
        <h4 class="text-success">Easy Questions:</h4>
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
        <?php
        if ($random == 4) { ?>
        <div class="card">
            <div class="card-body">
                <h2 class="text-secondary">What Format Involves A 99-Card Deck?</h2>
                <br>
                <div class="row">
                <button class="btn btn-success mr-2 ml-2" onclick="myFunction12()">Commander</button>
    <button class="btn btn-primary mr-2" onclick="myFunction13()">Standard</button>
    <button class="btn btn-danger mr-2" onclick="myFunction13()">Vintage</button>
    <button class="btn btn-info mr-2" onclick="myFunction13()">Oathbreaker</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($random == 5) { ?>
        <div class="card">
            <div class="card-body">
                <h2 class="text-danger">What Format Involves Only Cards From The 4-8 Most Recent Sets?</h2>
                <br>
                <div class="row">
                <button class="btn btn-success mr-2 ml-2" onclick="myFunction13()">Modern</button>
    <button class="btn btn-primary mr-2" onclick="myFunction13()">Commander</button>
    <button class="btn btn-danger mr-2" onclick="myFunction13()">Legacy</button>
    <button class="btn btn-info mr-2" onclick="myFunction12()">Standard</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($random == 6) { ?>
        <div class="card">
            <div class="card-body">
                <h2 class="text-primary">What Was The First MTG "Set"?</h2>
                <br>
                <div class="row">
                <button class="btn btn-success mr-2 ml-2" onclick="myFunction12()">Alpha</button>
    <button class="btn btn-primary mr-2" onclick="myFunction13()">Legends</button>
    <button class="btn btn-danger mr-2" onclick="myFunction13()">Kamigawa</button>
    <button class="btn btn-info mr-2" onclick="myFunction13()">Rath</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($random == 7) { ?>
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">Who Invented Magic The Gathering?</h2>
                <br>
                <div class="row">
                <button class="btn btn-success mr-2 ml-2" onclick="myFunction13()">Brian Kibler</button>
    <button class="btn btn-primary mr-2" onclick="myFunction12()">Richard Garfield</button>
    <button class="btn btn-danger mr-2" onclick="myFunction13()">Melissa DeTora</button>
    <button class="btn btn-info mr-2" onclick="myFunction13()">Ben Stark</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($random == 8) { ?>
        <div class="card">
            <div class="card-body">
                <h2 class="text-secondary">What Was The Most Recent "Unset"?</h2>
                <br>
                <div class="row">
                <button class="btn btn-success mr-2 ml-2" onclick="myFunction13()">Unhinged</button>
    <button class="btn btn-primary mr-2" onclick="myFunction12()">Unstable</button>
    <button class="btn btn-danger mr-2" onclick="myFunction13()">Unglued</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($random == 9) { ?>
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Revised Set Came Out In 2018?</h2>
                <br>
                <div class="row">
                <button class="btn btn-success mr-2 ml-2" onclick="myFunction13()">Ixalan</button>
    <button class="btn btn-primary mr-2" onclick="myFunction13()">Guilds Of Ravnica</button>
    <button class="btn btn-danger mr-2" onclick="myFunction13()">Dominaria</button>
    <button class="btn btn-info mr-2" onclick="myFunction12()">Battle For Zendikar</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($random == 10) { ?>
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Format Includes A 60 - Card Deck With A Planeswalker And Signature Spell?</h2>
                <br>
                <div class="row">
                <button class="btn btn-success mr-2 ml-2" onclick="myFunction13()">Commander</button>
    <button class="btn btn-primary mr-2" onclick="myFunction13()">Modern</button>
    <button class="btn btn-danger mr-2" onclick="myFunction12()">Oathbreaker</button>
    <button class="btn btn-info mr-2" onclick="myFunction13()">Standard</button>
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