
<?php

// CRUD = Create Read Update Delete

require_once('init.php');



$req = $pdo->query("SELECT * FROM users"); 
$req->execute();

if(!$req){ // boolean false ! = not
    die('Query FAILED' . mysqli_error());
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
    
        <div class="col-6">

    <?php
        while($row = $req->fetch()) {

            echo '<pre>';
            print_r($row);
            echo '</pre>';
        }



    ?>

    </div> <!-- container -->
</body>
</html>