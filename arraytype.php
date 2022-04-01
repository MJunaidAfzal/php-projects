<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array type</title>
</head>
<body>
    <?php
    echo "<h2>PHP ASSOCIATIVE ARRAY</h2> <br>";
    $age = array("Zohaib"=>"19", "Junaid"=>"16", "Jawaid"=>"11");
    echo "Junaid is " . $age['Junaid'] . " years old.";

    echo "<h2>PHP MULTIDIMENSIONAL ARRAY</h2> <br>";
    $cars = array (
        array("Volvo",12,8),
        array("BMW",5,3),
        array("Saab",15,12),
        array("civic",17,16)
      );
        
      echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
      echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
      echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
      echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

      echo "<h2>PHP MULTIDIMENSIONAL UL li ARRAY</h2> <br>";
      $cars = array (
        array("Volvo",12,8),
        array("BMW",5,3),
        array("Saab",15,12),
        array("civic",17,16)
      );
      for($row = 0; $row < 4; $row++){
        echo "<p><b>Row Number".$row."</b></p>";
        echo "<ul>";
        for($col = 0; $col < 3; $col++){
        echo "<li>".$cars [$row][$col]."</li>";
        }
        echo "<ul>";
      }
    ?>
</body>
</html>