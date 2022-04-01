<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php numbers</title>
</head>
<body>
    <?php
    echo "<h2>PHP IS_INT</h2>";
    echo "php is_int integer ko true or float ko false karega";
    echo "<br>";
    $x = 5985;
    var_dump(is_int($x));
    echo "<br>";
    $x = 59.85;
    var_dump(is_int($x));
    echo "<br>";

    echo "<h2>PHP VAR_DUMP IS_FLOAT</h2>";
    echo "php is_float boolean number ke zarie bataega";
    echo "<br>";
    $x = 59.85;
    var_dump(is_float($x));
    echo "<br>";

    echo "<h2>PHP IS_NUMERIC</h2>";
    echo "php is_numeric number ko true or alphabet ko false karega <br>";
    $x = "5985";
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "Hello";
    var_dump(is_numeric($x));
    echo "<br>";

    echo "<h2>PHP INT_COST</h2>";
    echo "php int_cost point ke baad wali value show nhi karega <br>";
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;
    ?>

</body>
</html>