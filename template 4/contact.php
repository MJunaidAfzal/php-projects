<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">



	<body>
        <style>
            body{
                background-image: url(assets/img/151-1512693_house-image-real-estate.jpg);
                background-repeat: no-repeat;
                background-size: 1800px;
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                
            }
            .formb{
                background-image: url(assets/img/white-abstract-background-3d-paper-style_23-2148390818.webp);
                background-repeat: no-repeat;
                height: 800px;
                margin-top: 60px;
                border-radius: 20px;
                padding: 50px;
            }
        </style>

<div class="container-fluid">
    <nav style=" background-color: black;   font-family:Arial, Helvetica, sans-serif;" class= "  navbar navbar-expand-sm  navbar-dark">
        <a class="navbar-brand" href="#">
          <img src="assets/img/trck.PNG" alt="logo" width="100%" height="60px">
        </a> 
        <ul class="navbar-nav">
          <li style="margin-left: 120px;"  class="nav-item  ">
            <a   class="nav-link" href="truck.php"> <b> TRUCK </b></a>
          </li>
          <li  class="nav-item pl-3">
            <a   class="nav-link" href="Bike.php"> <b> BIKE </b></a>
          </li>
          <li  class="nav-item pl-3">
            <a   class="nav-link" href="car.php"> <b> CAR </b></a>
          </li>
          <li  class="nav-item pl-3">
            <a   class="nav-link" href="contact.php"> <b> CONTACT </b></a>
          </li>
          
        </ul>
      </nav>
      </div>

        <div class="container">
            <div class="formb">
                <h2 style=" text-align: center;" ><b>REGISTRATION FORM</b></h2>
                <form action="form.php" method ="post">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3 mt-5">
                            <label for="name">
                                First Name
                            </label>
                        </div>
                        <div class="col-md-3 mt-5">
                            <label for="lastname">
                                Last Name
                            </label>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3 ">
                            <input type="text" name="name" id="name" class="form-control p-4" style="border-radius:20px;  text-align: center;">
                        </div>
                        <div class="col-md-3 ">
                            <input type="text" name="lastname" id="lastname" class="form-control p-4" style="border-radius:20px;  text-align: center;">

                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 mt-4">
                            <label for="email">
                                E-mail
                            </label>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <input type="text" name="email" id="email" class="form-control p-4" style="border-radius:20px;  text-align: center;">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 mt-4">
                            <label for="password">
                                Password
                            </label>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <input type="password" name="password" id="password" class="form-control p-4" style="border-radius:20px;  text-align: center;">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 mt-4">
                            <label for="message">
                                Message
                            </label>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                          <textarea name="message" id="message" cols="30" rows="5" class="form-control" style="border-radius:20px;"></textarea>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="text-center">
                    <button class="btn btn-dark mt-4 pb-2 pt-2 pl-5 pr-5" style="border-radius:20px;">SUBMIT</button>
                </div>
                </form>
            </div>
        </div>
    
        
        <footer>
            <div style="margin-top: 50px; height: 250px; background-color: rgb(196, 196, 196);" class="container-fluid">
              <div class="container">
                <div class="row">
                  <div style="margin-top:80px ;" class="col-md-6 ">
                    <img src="assets/img/logobike.PNG" alt="bike"><br><br>
                    <p class="ml-3" style="font-family:Arial, Helvetica, sans-serif; font-size:13px;">Copyright © 2018 Cycle News.  </p>
                  </div>
                  <div style="margin-top: 80px;" class="col-md-6  ">
                    <img style="margin-left: 50px;" src="assets/img/facbike.PNG" alt="bikes">
                  </div>
                </div>
              </div>
            </div>
            </footer>




</body>
</html>