<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

    $number = array( // tableau classique
        10,
        20,
        30,
        40,
        50
    );

    echo $number[3] . '<br><br>';

    $names = array( // tableau associatif key(remplace l'index d'un tableau classique) => value
        'first_name' => 'Rakon',
        'Last_Name'  => 'Rikon'
    );
    

    echo $names['first_name'] . ' ' . $names['Last_Name']; // echo via key 

    ?>
</body>
</html>