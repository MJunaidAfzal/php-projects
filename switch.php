<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php switch</title>
</head>
<body>
    
<?php
$favcar = "BMW";

switch ($favcar) {    
    case "BMW":
     echo "Your favorite car is BMW!";
    break;
    case "civic":
     echo "Your favorite car is civic!";
    break;
    case "corola":
      echo "Your favorite car is corola!";
     break;
     default:
        echo "Your favorite color is neither BMW, civic, nor corola!";
};
    ?>
</body>
</html>