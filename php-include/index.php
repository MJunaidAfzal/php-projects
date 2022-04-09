<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOYOTA CAR TEMPLATE</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <style>
        .DD1{
            background-image: url(assets/img/DD1.png);
            background-repeat: no-repeat;
            background-size: 110px;
        }
        .design{
          background-image: url(assets/img/design.png);
            background-repeat: no-repeat;
            background-size: 110px;
        }
        
    </style>
</head>
<body>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
          <img src="assets/img/blatoy.PNG" alt="logo" width="85%" height="75px">
        </a> 
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="Home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Modal.php">Modal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Join_us.php">Join_us</a>
          </li>
        </ul>
      </nav>
      
      
    </ul>
 
    </div>

    <div class="Home">
      <?php echo include "Home.php";  ?>
    </div>
    <div class="Modal">
      <?php echo include "Modal.php";  ?>
    </div>
    <div class="About">
      <?php echo include "About.php";  ?>
    </div>

      <div class="Contact">
        <?php echo include "Contact.php" ?>
      </div>
          
<div class="Join_us">
  <?php echo include "Join_us.php"  ?>
</div>

        <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    
</body>
</html>