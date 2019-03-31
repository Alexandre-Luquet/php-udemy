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

    $fruits = array('Pomme','Fraise','Framboise','Banane','Kiwi','Poire');

    // foreach permet de parcourir des tableaux
    // pour parcourir un tableaux assoc foreach ($fruits as $key => $fruit):
    foreach ($fruits as $fruit):

        echo $fruit . '<br>';

    endforeach;

    ?>
</body>
</html>