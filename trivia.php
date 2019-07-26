<?php
include "sess.php";
include "nav.php";
include "conn.php";
$random = rand(1,10);
$randomtwo = rand(1,10);
$randomthree = rand(1,10);
$id = $_SESSION['id'];
//one pointer
if (isset($_POST['onepointer'])) {
    $sql = "UPDATE users SET points = points+1 WHERE id = $id";
    $conn->exec($sql);
    header("Location: trivia.php");
    alert("Correct!");
}
// five pointer
if (isset($_POST['fivepointer'])) {
    $sql = "UPDATE users SET points = points+5 WHERE id = $id";
    $conn->exec($sql);
    header("Location: trivia.php");
    alert("Correct!");
}
//ten pointer
if (isset($_POST['submit'])) {
if ($_POST['an'] == $_POST['answer']) { 
    $id = $_SESSION['id'];
    $sql = "UPDATE users SET points = points+10 WHERE id = $id";
    $conn->exec($sql);
    ?>
    <script>
alert("Correct!");
</script>
<?php
header("Location: trivia.php");
} 
else {
    ?>
<script>
alert("Incorrect.");
</script>
<?php
header("Location: trivia.php");
}
}
$sql = "SELECT * FROM users WHERE id = $id";
$s = $conn->prepare($sql);
$s->execute();
$result = $s->fetch(PDO::FETCH_ASSOC);
$points = $result['points'];
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
        echo "<h3 class='text-success'>You Have " . $result['points'] . " Points!</h3>";
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
</form>
    <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">2005</button></form>
    <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">1995</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="onepointer">1993</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">1999</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Dominaria</button></form>
                <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="onepointer">M20</button></form>
                <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">Masters 25</button></form>
                <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">Battlebond</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="onepointer">Dual Lands (Unlimited)</button></form>
    <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">Shock Lands (Ravnica)</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">Tap Lands (Ravnica)</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">Check Lands (Dominaria/Ixalan/M15)</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="onepointer">Commander</button></form>
    <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">Standard</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">Vintage</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">Oathbreaker</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Modern</button></form>
    <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">Commander</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">Legacy</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="onepointer">Standard</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="onepointer">Alpha</button></form>
    <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">Legends</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">Kamigawa</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">Rath</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Brian Kibler</button></form>
                <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="onepointer">Richard Garfield</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">Melissa DeTora</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">Ben Stark</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Unhinged</button></form>
                <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="onepointer">Unstable</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">Unglued</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Ixalan</button></form>
    <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">Guilds Of Ravnica</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">Dominaria</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="onepointer">Battle For Zendikar</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Commander</button></form>
    <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">Modern</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="onepointer">Oathbreaker</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">Standard</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Commander</button></form>
                <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">Modern</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="fivepointer">Oathbreaker</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">Legacy</button></form>
    <form action="" method="post"> <button class="btn btn-secondary mr-2 ml-2" name="incorrect">Standard</button></form>
    <form action="" method="post"> <button class="btn btn-warning mr-2 ml-2" name="incorrect">Vintage</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Battle For Zendikar</button></form>
                <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">Ixalan</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">War Of The Spark</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">M20</button></form>
    <form action="" method="post"> <button class="btn btn-secondary mr-2 ml-2" name="fivepointer">Dominaria</button></form>
    <form action="" method="post"> <button class="btn btn-warning mr-2 ml-2" name="incorrect">Guilds Of Ravnica</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Battle For Zendikar</button></form>
                <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">Unglued</button></form>
                <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">War Of The Spark</button></form>
                <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">Unhinged</button></form>
    <form action="" method="post"> <button class="btn btn-secondary mr-2 ml-2" name="fivepointer">Unstable</button></form>
    <form action="" method="post"> <button class="btn btn-warning mr-2 ml-2" name="incorrect">Ravnica Allegiance</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Melissa DeTora</button></form>
                <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="fivepointer">Richard Garfield</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">Ben Stark</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">Autumn Burchette</button></form>
    <form action="" method="post"> <button class="btn btn-secondary mr-2 ml-2" name="incorrect">Brian Kibler</button></form>
    <form action="" method="post"> <button class="btn btn-warning mr-2 ml-2" name="incorrect">Sean Plott</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Legends</button></form>
                <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">Ixalan</button></form>
                <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">Rath</button></form>
                <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="fivepointer">Alpha</button></form>
    <form action="" method="post"> <button class="btn btn-secondary mr-2 ml-2" name="incorrect">Revised</button></form>
    <form action="" method="post"> <button class="btn btn-warning mr-2 ml-2" name="incorrect">Unlimited</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Draft</button></form>
                <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="fivepointer">Standard</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">Comander</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">Vintage</button></form>
    <form action="" method="post"> <button class="btn btn-secondary mr-2 ml-2" name="incorrect">Modern</button></form>
    <form action="" method="post"> <button class="btn btn-warning mr-2 ml-2" name="incorrect">Legacy</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Standard</button></form>
                <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">Oathbreaker</button></form>
    <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="fivepointer">Comander</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">Vintage</button></form>
    <form action="" method="post"> <button class="btn btn-secondary mr-2 ml-2" name="incorrect">Modern</button></form>
    <form action="" method="post"> <button class="btn btn-warning mr-2 ml-2" name="incorrect">Brawl</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Shock Lands (Guilds Of Ravnica, Ravnica Allegiance)</button></form>
                <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">Tap Lands (Ravnica Block)</button></form>
                <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="fivepointer">Dual Lands (Alpha, Beta, Unlimited)</button></form>
    <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">Check Lands (Ixalan, Dominaria, M15)</button></form>
    <form action="" method="post"> <button class="btn btn-secondary mr-2 ml-2" name="incorrect">Basic Lands</button></form>
    <form action="" method="post"> <button class="btn btn-warning mr-2 ml-2" name="incorrect">Gain Lands (Fate Reforged, Khans Of Tarkir, M20)</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">Dominaria</button></form>
                <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">Guilds Of Ravnica</button></form>
                <form action="" method="post"> <button class="btn btn-danger mr-2 ml-2" name="incorrect">War Of The Spark</button></form>
                <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="incorrect">Kaladesh</button></form>
                <form action="" method="post"> <button class="btn btn-secondary mr-2 ml-2" name="incorrect">Ixalan</button></form>
                <form action="" method="post"> <button class="btn btn-warning mr-2 ml-2" name="fivepointer">M20</button></form>
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
                <form action="" method="post"> <button class="btn btn-success mr-2 ml-2" name="incorrect">1996</button></form>
                <form action="" method="post"> <button class="btn btn-primary mr-2 ml-2" name="incorrect">2013</button></form>
                <form action="" method="post"> <button class="btn btn-idanger mr-2 ml-2" name="incorrect">1989</button></form>
                <form action="" method="post"> <button class="btn btn-info mr-2 ml-2" name="fivepointer">1993</button></form>
    <form action="" method="post"> <button class="btn btn-secondary mr-2 ml-2" name="incorrect">2004</button></form>
    <form action="" method="post"> <button class="btn btn-warning mr-2 ml-2" name="incorrect">2007</button></form>
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
                <input type="hidden" name="an" value="Oathbreaker">
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button></form>
        </form>
            </div>
        </div>
    </div>
        <?php
        }
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
                <input type="hidden" name="an" value="Dominaria">
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button></form>
        </form>
            </div>
        </div>
            </div>
        <?php
        }
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
                <input type="hidden" name="an" value="Unstable">
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button></form>
        </form>
            </div>
        </div>
</body>
        <?php
        }
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
                <input type="hidden" name="an" value="Richard Garfield">
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button></form>
        </form>
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
                <input type="hidden" name="an" value="Alpha">
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button></form>
        </form>
            </div>
        </div>
            </div>
        <?php
        }
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
                <input type="hidden" name="an" value="Standard">
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button></form>
        </form>
            </div>
        </div>
            </div>
        <?php
        }
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
                <input type="hidden" name="an" value="Commander">
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button></form>
        </form>
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
                <input type="hidden" name="an" value="Dual Lands">
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button></form>
        </form>
        <?php
        }
        ?>
            </div>
        </div>
            </div>
        <?php
        }
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
                <input type="hidden" name="an" value="Core Set 2020">
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button></form>
        </form>
            </div>
        </div>
            </div>

        <?php
        }
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
                <button type="submit" class="btn btn-info" name="submit"><h1>Submit</h1></button></form>
        </form>
            </div>
        </div>
    </div>
    <?php
        }
        ?>
        </div>
</body>
</html>