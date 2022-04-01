<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array sorting</title>
</head>
<body>
    <?php
    echo "<h3>ARRAY SORT</h3> <br>";
    echo "<b> sort words ko assending order me chalata he </b> <br>";

    $fruits = array("apple","mango","banana");
    sort($fruits);
    $count = count($fruits);
    for ($x = 0; $x < $count; $x++){
        echo $fruits[$x]."<br>";
    }

    echo "<h3>ARRAY SORT NUM</h3> <br>";
    echo "<b> sort number ko assending order me chalata he </b> <br>";

    $num = array(88,21,15,100,10);
    sort($num);
    $count = count($num);
    for ($x = 0; $x < $count; $x++){
        echo $num[$x]."<br>";
    }

    echo "<h3>ARRAY RSORT</h3> <br>";
    echo "<b> rsort words ko dessending order me chalata he </b> <br>";

    $fruits = array("apple","mango","banana");
    rsort($fruits);
    $count = count($fruits);
    for ($x = 0; $x < $count; $x++){
        echo $fruits[$x]."<br>";
    }

    echo "<h3>ARRAY RSORT NUM</h3> <br>";
    echo "<b> rsort number ko dessending order me chalata he </b> <br>";

    $num = array(88,21,15,100,10);
    rsort($num);
    $count = count($num);
    for ($x = 0; $x < $count; $x++){
        echo $num[$x]."<br>";
    }

    echo "<h3>ARRAY ASORT </h3> <br>";
    echo "<b> asort assosiative array me kaam ata he or value ko assending order me show karwata he. </b> <br>";
    $age = array("Zohaib"=>"19", "Junaid"=>"16", "Ahmed"=>"21");
    asort($age);

    foreach($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
}

    echo "<h3>ARRAY KSORT </h3> <br>";
    echo "<b> ksort assosiative array me kaam ata he or key ko assending order me show karwata he. </b> <br>";
    $age = array("Zohaib"=>"19", "Junaid"=>"16", "Ahmed"=>"21");
    ksort($age);

    foreach($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
}

    echo "<h3>ARRAY ARSORT </h3> <br>";
    echo "<b> arsort assosiative array me kaam ata he or value ko dessending order me show karwata he. </b> <br>";
    $age = array("Zohaib"=>"19", "Junaid"=>"16", "Ahmed"=>"21");
    arsort($age);

    foreach($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
}

    echo "<h3>ARRAY KRSORT </h3> <br>";
    echo "<b> krsort assosiative array me kaam ata he or value ko dessending order me show karwata he. </b> <br>";
    $age = array("Zohaib"=>"19", "Junaid"=>"16", "Ahmed"=>"21");
    krsort($age);

    foreach($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
}

    ?>
</body>
</html>