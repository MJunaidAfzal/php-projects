<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php function</title>
</head>
<body>
    <?php
    echo "<h2>PHP FUNCTION</h2>"."<br>";
    function familyName($fname, $year) {
        echo $fname."Born in".$year."<br>";
      }     
      familyName("Zohaib","2002");
      familyName("Junaid","2005");
      familyName("Jawaid","2010");
      echo "<br>";

      echo "<h2>PHP ADD FUNCTION</h2>"."<br>";
      function add($add1,$add2){
          echo $add1 + $add2."<br>";
      }
      add(2,2);
      add(3,2);
      add(4,5);
      echo "<br>";

      echo "<h2>PHP MULTIPLY FUNCTION</h2>"."<br>";
      function multiply($num1,$num2){
          echo $num1 * $num2."<br>";
      }
      multiply(2,2);
      multiply(3,2);
      multiply(4,5);
      echo "<br>";

      echo "<h2>PHP SUBTRACT FUNCTION</h2>"."<br>";
      function subtract($sub1,$sub2){
          echo $sub1 - $sub2."<br>";
      }
      subtract(2,2);
      subtract(3,2);
      subtract(4,5);
      echo "<br>";

      echo "<h2>PHP DIVIDE FUNCTION</h2>"."<br>";
      function divide($div1,$div2){
          echo $div1 / $div2."<br>";
      }
      divide(2,2);
      divide(3,2);
      divide(4,5);
      echo "<br>";
    ?>
</body>
</html>