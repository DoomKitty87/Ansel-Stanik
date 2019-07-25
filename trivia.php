<?php
include "sess.php";
include "nav.php";
include "conn.php";
$random = rand(1,10);
$randomtwo = rand(1,10);
$randomthree = rand(1,10);
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
        <?php
        echo "<h3 classd=text-success>You Have" . $_SESSION['points'] . "Points!</h3>";
        ?>
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
            <h2 class="text-danger">What Is The Newest MTG Set? (Late July 2019)</h2>
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
        <br>
        <h4 class="text-warning">Medium Questions:</h4>
        <br>
        <?php
        if ($randomtwo == 1) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Format Includes A 60 - Card Deck With A Planeswalker And Signature Spell?</h2>
                <br>
                <div class="row">
    <button class="btn btn-success mr-2 ml-2" onclick="myFunction10()">Commander</button>
    <button class="btn btn-primary mr-2" onclick="myFunction10()">Modern</button>
    <button class="btn btn-danger mr-2" onclick="myFunction11()">Oathbreaker</button>
    <button class="btn btn-info mr-2" onclick="myFunction10()">Legacy</button>
    <button class="btn btn-secondary mr-2" onclick="myFunction10()">Standard</button>
    <button class="btn btn-warning mr-2" onclick="myFunction10()">Vintage</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($randomtwo == 2) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Revised Set Came Out In 2018?</h2>
                <br>
                <div class="row">
    <button class="btn btn-success mr-2 ml-2" onclick="myFunction10()">Battle For Zendikar</button>
    <button class="btn btn-primary mr-2" onclick="myFunction10()">Ixalan</button>
    <button class="btn btn-danger mr-2" onclick="myFunction10()">War Of The Spark</button>
    <button class="btn btn-info mr-2" onclick="myFunction10()">M20</button>
    <button class="btn btn-secondary mr-2" onclick="myFunction11()">Dominaria</button>
    <button class="btn btn-warning mr-2" onclick="myFunction10()">Guilds Of Ravnica</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($randomtwo == 3) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Was The Most Recent "Unset"?</h2>
                <br>
                <div class="row">
    <button class="btn btn-success mr-2 ml-2" onclick="myFunction10()">Battle For Zendikar</button>
    <button class="btn btn-primary mr-2" onclick="myFunction10()">Unglued</button>
    <button class="btn btn-danger mr-2" onclick="myFunction10()">War Of The Spark</button>
    <button class="btn btn-info mr-2" onclick="myFunction10()">Unhinged</button>
    <button class="btn btn-secondary mr-2" onclick="myFunction11()">Unstable</button>
    <button class="btn btn-warning mr-2" onclick="myFunction10()">Ravnica Allegiance</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($randomtwo == 4) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">Who Invented Magic The Gathering?</h2>
                <br>
                <div class="row">
    <button class="btn btn-success mr-2 ml-2" onclick="myFunction10()">Melissa DeTora</button>
    <button class="btn btn-primary mr-2" onclick="myFunction11()">Richard Garfield</button>
    <button class="btn btn-danger mr-2" onclick="myFunction10()">Ben Stark</button>
    <button class="btn btn-info mr-2" onclick="myFunction10()">Autumn Burchette</button>
    <button class="btn btn-secondary mr-2" onclick="myFunction10()">Brian Kibler</button>
    <button class="btn btn-warning mr-2" onclick="myFunction10()">Sean Plott</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($randomtwo == 5) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Was The First Magic "Set"?</h2>
                <br>
                <div class="row">
    <button class="btn btn-success mr-2 ml-2" onclick="myFunction10()">Legends</button>
    <button class="btn btn-primary mr-2" onclick="myFunction10()">Ixalan</button>
    <button class="btn btn-danger mr-2" onclick="myFunction10()">Rath</button>
    <button class="btn btn-info mr-2" onclick="myFunction11()">Alpha</button>
    <button class="btn btn-secondary mr-2" onclick="myFunction10()">Revised</button>
    <button class="btn btn-warning mr-2" onclick="myFunction10()">Unlimited</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($randomtwo == 6) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Format Involves Only Cards From The 4-8 Most Recent Sets?</h2>
                <br>
                <div class="row">
    <button class="btn btn-success mr-2 ml-2" onclick="myFunction10()">Draft</button>
    <button class="btn btn-primary mr-2" onclick="myFunction11()">Standard</button>
    <button class="btn btn-danger mr-2" onclick="myFunction10()">Comander</button>
    <button class="btn btn-info mr-2" onclick="myFunction10()">Vintage</button>
    <button class="btn btn-secondary mr-2" onclick="myFunction10()">Modern</button>
    <button class="btn btn-warning mr-2" onclick="myFunction10()">Legacy</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($randomtwo == 7) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Format Involves A 99 - Card Deck?</h2>
                <br>
                <div class="row">
    <button class="btn btn-success mr-2 ml-2" onclick="myFunction10()">Standard</button>
    <button class="btn btn-primary mr-2" onclick="myFunction10()">Oathbreaker</button>
    <button class="btn btn-danger mr-2" onclick="myFunction11()">Comander</button>
    <button class="btn btn-info mr-2" onclick="myFunction10()">Vintage</button>
    <button class="btn btn-secondary mr-2" onclick="myFunction10()">Modern</button>
    <button class="btn btn-warning mr-2" onclick="myFunction10()">Brawl</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($randomtwo == 8) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Was The Most Powerful Land Cycle?</h2>
                <br>
                <div class="row">
    <button class="btn btn-success mr-2 ml-2" onclick="myFunction10()">Shock Lands (Guilds Of Ravnica, Ravnica Allegiance)</button>
    <button class="btn btn-primary mr-2" onclick="myFunction10()">Tap Lands (Ravnica Block)</button>
    <button class="btn btn-danger mr-2" onclick="myFunction11()">Dual Lands (Alpha, Beta, Unlimited)</button>
    <button class="btn btn-info mr-2" onclick="myFunction10()">Check Lands (Ixalan, Dominaria, M15)</button>
    <button class="btn btn-secondary mr-2" onclick="myFunction10()">Basic Lands</button>
    <button class="btn btn-warning mr-2" onclick="myFunction10()">Gain Lands (Fate Reforged, Khans Of Tarkir, M20)</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($randomtwo == 9) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Is The Newest MTG Set? (Late July 2019)</h2>
                <br>
                <div class="row">
    <button class="btn btn-success mr-2 ml-2" onclick="myFunction10()">Dominaria</button>
    <button class="btn btn-primary mr-2" onclick="myFunction10()">Guilds Of Ravnica</button>
    <button class="btn btn-danger mr-2" onclick="myFunction10()">War Of The Spark</button>
    <button class="btn btn-info mr-2" onclick="myFunction10()">Kaladesh</button>
    <button class="btn btn-secondary mr-2" onclick="myFunction10()">Ixalan</button>
    <button class="btn btn-warning mr-2" onclick="myFunction11()">M20</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if ($randomtwo == 10) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">When Was Magic The Gathering Released?</h2>
                <br>
                <div class="row">
    <button class="btn btn-success mr-2 ml-2" onclick="myFunction10()">1996</button>
    <button class="btn btn-primary mr-2" onclick="myFunction10()">2013</button>
    <button class="btn btn-danger mr-2" onclick="myFunction10()">1989</button>
    <button class="btn btn-info mr-2" onclick="myFunction11()">1993</button>
    <button class="btn btn-secondary mr-2" onclick="myFunction10()">2004</button>
    <button class="btn btn-warning mr-2" onclick="myFunction10()">2007</button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <br>
        <h4 class="text-danger">Hard Questions</h4>
        <br>
        <?php
        if ($randomthree == 1) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Format Includes A 60 - Card Deck With A Planeswalker And Signature Spell?</h2>
                <br>
                <form action="" method="post">
            <br>
            <div class="form-root">
                <label for="answer"><h4 class="text-info mr-1">Answer (Capitalize All Words)</h4></label>
                <input type="text" name="answer" id="answer" required>
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button>
        </form>
        <?php
        if ($_POST == "Oathbreaker") { ?>
            <script>
            myFunction9();
            </script>
            <?php
        } 
        else { ?>
        <script>
            myFunction8();
            </script>
            <?php
        }
        ?>
            </div>
        </div>
    </div>
        <?php
        if ($randomthree == 2) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Revised Set Came Out In 2018?</h2>
                <br>
                <form action="" method="post">
            <br>
            <div class="form-root">
                <label for="answer"><h4 class="text-info mr-1">Answer (Capitalize All Words)</h4></label>
                <input type="text" name="answer" id="answer" required>
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button>
        </form>
        <?php
        if ($_POST == "Dominaria") { ?>
            <script>
            myFunction9();
            </script>
            <?php
        } 
        else { ?>
        <script>
            myFunction8();
            </script>
            <?php
        }
        ?>
            </div>
        </div>
            </div>
        <?php
        if ($randomthree == 3) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Was The Most Recent "Unset"?</h2>
                <br>
                <form action="" method="post">
            <br>
            <div class="form-root">
                <label for="answer"><h4 class="text-info mr-1">Answer (Capitalize All Words)</h4></label>
                <input type="text" name="answer" id="answer" required>
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button>
        </form>
        <?php
        if ($_POST == "Unstable") { ?>
            <script>
            myFunction9();
            </script>
            <?php
        } 
        else { ?>
        <script>
            myFunction8();
            </script>
            <?php
        }
        ?>
            </div>
        </div>
            </div>
        <?php
        if ($randomthree == 4) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">Who Invented Magic The Gathering?</h2>
                <br>
                <form action="" method="post">
            <br>
            <div class="form-root">
                <label for="answer"><h4 class="text-info mr-1">Answer (Capitalize All Words)</h4></label>
                <input type="text" name="answer" id="answer" required>
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button>
        </form>
        <?php
        if ($_POST == "Richard Garfield") { ?>
            <script>
            myFunction9();
            </script>
            <?php
        } 
        else { ?>
        <script>
            myFunction8();
            </script>
            <?php
        }
        ?>
            </div>
        </div>
            </div>
        <?php
        if ($randomthree == 5) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Was The First Magic "Set"?</h2>
                <br>
                <form action="" method="post">
            <br>
            <div class="form-root">
                <label for="answer"><h4 class="text-info mr-1">Answer (Capitalize All Words)</h4></label>
                <input type="text" name="answer" id="answer" required>
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button>
        </form>
        <?php
        if ($_POST == "Alpha") { ?>
            <script>
            myFunction9();
            </script>
            <?php
        } 
        else { ?>
        <script>
            myFunction8();
            </script>
            <?php
        }
        ?>
            </div>
        </div>
            </div>
        <?php
        if ($randomthree == 6) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Format Involves Only Cards From The 4-8 Most Recent Sets? (Without A Commander)</h2>
                <br>
                <form action="" method="post">
            <br>
            <div class="form-root">
                <label for="answer"><h4 class="text-info mr-1">Answer (Capitalize All Words)</h4></label>
                <input type="text" name="answer" id="answer" required>
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button>
        </form>
        <?php
        if ($_POST == "Standard") { ?>
            <script>
            myFunction9();
            </script>
            <?php
        } 
        else { ?>
        <script>
            myFunction8();
            </script>
            <?php
        }
        ?>
            </div>
        </div>
            </div>
        <?php
        if ($randomthree == 7) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Format Involves A 99 - Card Deck?</h2>
                <br>
                <form action="" method="post">
            <br>
            <div class="form-root">
                <label for="answer"><h4 class="text-info mr-1">Answer (Capitalize All Words)</h4></label>
                <input type="text" name="answer" id="answer" required>
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button>
        </form>
        <?php
        if ($_POST == "Commander") { ?>
            <script>
            myFunction9();
            </script>
            <?php
        } 
        else { ?>
        <script>
            myFunction8();
            </script>
            <?php
        }
        ?>
            </div>
        </div>
            </div>
        <?php
        if ($randomthree == 8) { ?> 
        <div class="card">
            <div class="card-body">
            <h2 class="text-warning">What Was The Most Powerful Land Cycle?</h2>
                <br>
                <form action="" method="post">
            <br>
            <div class="form-root">
                <label for="answer"><h4 class="text-info mr-1">Answer (Capitalize All Words)</h4></label>
                <input type="text" name="answer" id="answer" required>
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button>
        </form>
        <?php
        if ($_POST == "Dual Lands") { ?>
            <script>
            myFunction9();
            </script>
            <?php
        } 
        else { ?>
        <script>
            myFunction8();
            </script>
            <?php
        }
        ?>
            </div>
        </div>
            </div>
        <?php
        if ($randomthree == 9) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">What Was The Most Recent MTG Set (Late July 2019)?</h2>
                <br>
                <form action="" method="post">
            <br>
            <div class="form-root">
                <label for="answer"><h4 class="text-info mr-1">Answer (Capitalize All Words)</h4></label>
                <input type="text" name="answer" id="answer" required>
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button>
        </form>
        <?php
        if ($_POST == "Core Set 2020") { ?>
            <script>
            myFunction9();
            </script>
            <?php
        } 
        else { ?>
        <script>
            myFunction8();
            </script>
            <?php
        }
        ?>
            </div>
        </div>
            </div>

        <?php
        if ($randomthree == 10) { ?> 
        <div class="card">
            <div class="card-body">
                <h2 class="text-warning">When Was Magic The Gathering Released?</h2>
                <br>
                <form action="" method="post">
            <br>
            <div class="form-root">
                <label for="answer"><h4 class="text-info mr-1">Answer (Capitalize All Words)</h4></label>
                <input type="text" name="answer" id="answer" required>
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button>
        </form>
        <?php
        if ($_POST == "1993") { ?>
            <script>
            myFunction9();
            </script>
            <?php
        } 
        else { ?>
        <script>
            myFunction8();
            </script>
            <?php
        }
        ?>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <script>
            function myFunction9() {
                <?php
                $id = $_SESSION['id'];
                $sql = "UPDATE users SET points = points+10 WHERE id = $id";
                $conn->exec($sql);
                ?>
                alert("Correct!");
                document.location.reload(true);
            }
            function myFunction8() {
                alert("Incorrect.");
                document.location.reload(true);
            }
            function myFunction11() {
                <?php
                $id = $_SESSION['id'];
                $sql = "UPDATE users SET points = points+5 WHERE id = $id";
                $conn->exec($sql);
                ?>
                alert("Correct!");
                document.location.reload(true);
            }
            function myFunction10() {
                alert("Incorrect.");
                document.location.reload(true);
            }
            function myFunction12() {
                <?php
                $id = $_SESSION['id'];
                $sql = "UPDATE users SET points = points+1 WHERE id = $id";
                $conn->exec($sql);
                ?>
                alert("Correct!");
                document.location.reload(true);
            }
            function myFunction13() {
                alert("Incorrect.");
                document.location.reload(true);
            }
    </script>
</body>
</html>