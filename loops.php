<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php loops</title>
</head>
<body>
    <?php
    echo "<h4>While Loop</h4> <br>";  
    $x = 1;

    while($x <= 5) {
      echo "The number is: $x <br>";
      $x++;
    } ;
    echo "<br>";

    echo "<h4>Do While Loop</h4> <br>";
    $x = 1;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 6);
    echo "<br>";

    echo "<h4>for Loop</h4> <br>";
    for ($x = 0; $x <= 7; $x++) {
        echo "The number is: $x <br>";
      };
      echo "<br>";

      echo "<h4>foreach Loop</h4> <br>";
      $fruits = array("apple", "mango", "kiwi", "banana"); 

        foreach ($fruits as $value) {
      echo "$value <br>";
};
    $age = array("Zohaib"=>"19", "Junaid"=>"16", "Jawaid"=>"11");

    foreach($age as $x => $val) {
     echo $x ."=". $val."<br>";
};
    ?>
</body>
</html>