<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: black;">
    



<link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <?php
          include ("Header.php");
        ?>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6 mt-5">
          <h1 style="color: white;font-size: 50px;font-family: fantasy;">FORM <span style="color: white;font-size: 150px;">___</span> </h1>
          <h1  style="color: goldenrod;font-size: 70px;font-family: fantasy;">CONTACT US</h1>
          <h1  style="color: white;font-size: 40px;font-family: fantasy;">PLZ FILL YOUR FORM</h1>

        </div>
        <div  class="col-md-6 mt-5">
          <form style="margin-top: 120px;" action="Form.php" method="post">
            <input style="background-color: black;color: white;border: 4px white groove;" type="text" name="name" id="name" class="form-control p-4"  placeholder="ENTER YOUR NAME"><br>
            <input style="background-color: black;color: white;border: 4px white groove;" type="text" name="email" id="email" class="form-control p-4"  placeholder="ENTER YOUR E-MAIL"><br>
            <input style="background-color: black;color: white;border: 4px white groove;" type="text" name="number" id="number" class="form-control p-4"  placeholder="ENTER YOUR NUMBER"><br>
            <textarea name="mess" id="mess" cols="30" rows="10" class="form-control" style="background-color: black;color: white;border: 4px white groove;" placeholder="ENTER YOUR MESSAGE"></textarea> 
              <button style="float: right;" class="mt-3 btn btn-outline-light pl-4 pr-4 pt-2 pb-2 ">SUBMIT</button>
          </form>
        </div>
      </div>
      
    </div>


    <?php
          include ("Footer.php");
        ?>


<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>

    </body>
</html>