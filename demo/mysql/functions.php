<?php require_once('init.php'); 

function showAllData(){
    global $pdo;
$req = $pdo->query("SELECT * FROM users"); 
$req->execute();

if(!$req){ // boolean false ! = not
    die('Query FAILED' . mysqli_error());
}

while($row = $req->fetch()):
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
endwhile;
}

// update function
function updateTable(){
    global $pdo;
    $username = $_POST['username']; // recup l'username envoyé dans une variable
    $password = $_POST['password']; // recup le password envoyé dans une variable
    $id = $_POST['id']; // recup l'id selectionné

    $req = $pdo->prepare("UPDATE users SET username=:username, password=:password WHERE id=:id"); // : = marker requete preparé(safe)

    $req->execute(array(    // execute la requete donne une valeur au marker(valeur _POST du form)
        'username' => $username,
        'password' => $password,
        'id'       => $id
    ));
}

// delete function
function deleteRows(){
    global $pdo;
    $id = $_POST['id']; // recup l'id selectionné

    $req = $pdo->prepare("DELETE FROM users WHERE id=:id"); // : = marker requete preparé(safe)

    $req->execute(array(    // execute la requete donne une valeur au marker(valeur _POST du form)
        'id'    => $id
    ));
}