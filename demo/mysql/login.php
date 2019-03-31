
<?php

// CRUD = Create Read Update Delete

require_once('init.php');

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

}



if($pdo){
    echo "We are connected to BDD";
}
else{
    die("Database connection failed");
}

$result = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)"); // :=marker 
$result->execute(array(
    'username' => $_POST['username'], // donne la valeur au marker
    'password' => $_POST['password']
));

if(!$result){ // boolean false ! = not
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
            <form action="login.php" method="post">
                <div class="form-group">
                <label for="username">Username :</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" value="submit" name="submit" class="btn btn-primary">Connexion</button>
            
        </form>
    </div> <!-- container -->
</body>
</html>