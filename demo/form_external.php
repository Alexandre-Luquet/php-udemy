<?php
if (isset($_POST['submit'])){

$name = array('Edwin', 'Student', 'Peter', 'Samid', 'Mohad','Maria',
'Jane', 'Tom');
$minimum = 5;
$maximum = 10;

$username = $_POST['username'];
$password = $_POST['password'];

    if(strlen($username) < $minimum ){

        echo 'Le pseudo ne peut pas faire moin de 5 charactères <br>';
    }
    
    if(strlen($username) >= $maximum ){

        echo 'Le pseudo ne doit pas dépasser 10 charactères <br>';
    }

    if(!in_array($username,$name)) { // username not in array
        Echo "Sorry you're not allowed to login <br>";
    }

    else{
        echo "Welcome";
    }


}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
    <form action="form_process.php" method="post">
    
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placehold="Password"><br>
    <input type="submit" name="submit">
    
    
    </form>
</body>
</html>