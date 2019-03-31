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

    $number = 34;

    switch($number):

        case 34:
        echo 'it is 34';
        break;      // arrete le switch s'il trouve un case correspondante

        case 37:
        echo 'it is 34';
        break;

        case 35:
        echo 'it is 34';
        break;

        case 24:
        echo 'it is 34';
        break;

        default: // equivalent au ELSE
            echo 'We could not find anything';

    endswitch;






    ?>
</body>
</html>