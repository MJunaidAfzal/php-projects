<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP OOP</h1>
<?php
class Fruit {
  
  public $name;
  public $color;

  
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
        $Fruit = new Fruit();
        $Fruit->set_name("red");
        echo $Fruit->get_name()."<br>";
        $Fruit->set_name("green");
        echo $Fruit->get_name()."<br>";
        $Fruit->set_name("blue");
        echo $Fruit->get_name();
?>
</body>
</html>