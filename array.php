<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
    <?php
    echo "<h2>PHP ARRAY</h2> <br>";
    $cars = array("Volvo", "BMW", "Toyota"); 
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ". <br>";


    echo "<h2>PHP ARRAY COUNT</h2> <br>";
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars). "<br>";

    
    ?>
</body>
</html>