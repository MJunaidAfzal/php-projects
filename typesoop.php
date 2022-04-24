<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP TYPES</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
<body style="background-color:gold; color:darkred;font-family:fantasy;text-align:center;" >
    <h1>OOP TYPES</h1><br>
    <h1>CONSTRUCTOR</h1>
    <?php
        class City {
            public $name;
            public $color;

            function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
  }
            function get_name() {
            return $this->name;
  }
            function get_color() {
            return $this->color;
  }
}

            $karachi = new City("Karachi", "green");
            echo $karachi->get_name();
            echo "<br>";
            echo $karachi->get_color();
?><br>

<h1>INHERITANCE</h1>
            <?php
                class Cars {
                public $name;
                public $color;
                public function __construct($name, $color) {
                    $this->name = $name;
                    $this->color = $color;
  }
                public function intro() {
                echo "The Car is {$this->name} and the color is {$this->color}.";
  }
}


            class BMW extends Cars {
                public function message() {
                echo "This is car or a truck? ";
  }
}
            $BMW = new BMW("BMW", "Black");
            $BMW->message();
            $BMW->intro();
?><br>
<h1>DESTRUCTOR</h1>

<?php
        class Vegetable {
            public $name;
            public $color;

            function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
  }
            function __destruct() {
            echo "The Vegetable is {$this->name} and the color is {$this->color}.";
  }
}

        $apple = new Vegetable("Potato", "Brown");
?>


    
</body>
</html>