<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php math</title>
</head>
<body>
    <?php
    echo "<h3>PI()</h3>";
    echo "pi ki value malum karne ke liye <br>";
    echo (pi());
    echo "<br>";

    echo "<h3>MIN,MAX</h3>";
    echo "min small value ko show karega or max large ko show karega <br>";
    echo(min(0, 150, 30, 20, -8, -200) . "<br>");
    echo(max(0, 150, 30, 20, -8, -200));
    echo "<br>";

    echo "<h3>ABS()</h3>";
    echo "negative value ko positive kardega <br>";
    echo (abs(-8.9));
    echo "<br>";

    echo "<h3>SQRT()</h3>";
    echo "kisi square ko maloom karne ke liye <br>";
    echo (sqrt(36));
    echo "<br>";
    
    echo "<h3>ROUND()</h3>";
    echo "50 se niche 0 or 50 se uper 1 kehlaegi isy round kehte he <br>";
    echo(round(0.60) . "<br>");
    echo(round(0.50) . "<br>");
    echo(round(0.49));
    echo "<br>";

    echo "<h3>RANDOM()</h3>";
    echo "random value show karta he <br>";
    echo (rand());

    ?>
</body>
</html>