<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops break</title>
</head>
<body>
    <?php
    echo "<h2>LOOPS BREAK</h2>"."<br>";
    for ($x = 0; $x < 10; $x++){
        if ($x == 8){
            break;
        }
        echo "the number is:".$x."<br>";
    }


    ?>
</body>
</html>