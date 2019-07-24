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
        <br>
        <div class="card">
            <div class="card-body">
                <br>
                <div class="row">
                    <h1 class="text-warning">Smiley Happy - 10 Points</h1>
                    
                    <?php
                    if ($ownedone = "yes") { ?>
                        <button class="btn btn-danger mr-2 ml-2"><h4>Owned</h4></button>
                        <?php
                    }
                    else { ?>
                    <button class="btn btn-success mr-2 ml-2"><h4>Purchase</h4></button>
<?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction14() {
            <?php
            $id = $_SESSION['id'];
            $sql = "UPDATE users SET points = points-10 WHERE id = $id";
            $conn->exec($sql);
            $ownedone = "yes";
            ?>
        }
</body>
</html>