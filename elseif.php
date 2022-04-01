<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php elseif</title>
</head>
<body>
    <?php

    $x = 2;
    $y = 9;
    $z = 9;
    
    if ($x == $z){
        echo $x ."is equal to". $z; //false
    }
    elseif ($y != $z){
        echo $y ."is not equal to". $z; //false
    }
    else {
        echo $x ."is not equal to". $y; //true
    }
    ?>
</body>
</html>