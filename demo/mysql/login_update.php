<?php
require_once('init.php');
require_once('functions.php');

if(isset($_POST['submit'])) { // SI la donnée a été envoyé

updateTable(); // fonction update username/password dans functions.php

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

        <form action="login_update.php" method="post">
            <div class="form-group">
                <label for="username">Username :</label>
                <input type="text" name="username" class="form-control">
            </div>


            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="form-group">
                <select name="id" id="">
                    <?php
                        showAllData();
                    ?>
                </select>
            </div>

            <button type="submit" value="submit" name="submit" class="btn btn-primary">Update</button>
            
        </form>

        </div> 

</div> <!-- container -->
</body>
</html>