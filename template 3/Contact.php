<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
<body style="background-color: rgb(231, 231, 231);">
<?php
    include ("header.php");
    ?>
<style>
    .contact{
            background-image: url(assets/img/contact.webp);
            background-repeat: no-repeat;
            width: 100%;
            height: 900px;
            background-size: 1400px;
        }
</style>
    
<div class="container-fluid">
            <div class="contact">
              <div class="container">
                <div class="row">
                  <div style="margin-top: 150px;" class="col-md-6">
                    <b style="color: black;font-size: 22px;font-family: Arial, Helvetica, sans-serif;">JOIN OUR NEWSLETTER</b><br>
                    <b style="color: black;font-family: Arial, Helvetica, sans-serif;font-size: 45px;"> Contact us </b>
                    <p  style="margin-top: 30px; font-size: 24px; font-family: Arial, Helvetica, sans-serif;">3045 10 Sunrize Avenue, 123-456-7890 <br>
                      Mon – Fri: 9:00 am – 8:00 pm,<br>
                      Sat – Sun: 9:00 am – 10 pm</p><br><br><br>
                    <b style="color: black;font-family: Arial, Helvetica, sans-serif;font-size: 45px;"> Follow us </b><br>
                    <img src="assets/img/facc.PNG" alt=""><br><br>
                    <p style="font-size: 24px;font-family: Arial, Helvetica, sans-serif;">©2022 Privacy policy
                    </p>
                  </div>
                  <div   class="col-md-6 ">
                  <div style="border: 1px white groove;height: 700px;width: 100%;border-radius: 30px;margin-top: 100px;" class="card p-5">
                    <div class="card-body">
                      
                        <form  action="Form.php" method="post">
                          <input style="border-radius: 15px; color: rgba(255, 187, 0, 0.966);border: rgba(255, 187, 0, 0.966) 4px groove;" type="text" name="name" id="name" class="form-control p-4"  placeholder="ENTER YOUR NAME"><br>
                          <input style="border-radius: 15px; color: rgba(255, 187, 0, 0.966);border: rgba(255, 187, 0, 0.966) 4px groove;"  type="text" name="email" id="email" class="form-control p-4"  placeholder="ENTER YOUR E-MAIL"><br>
                          <input style="border-radius: 15px; color: rgba(255, 187, 0, 0.966);border: rgba(255, 187, 0, 0.966) 4px groove;"  type="text" name="number" id="number" class="form-control p-4"  placeholder="ENTER YOUR NUMBER"><br>
                          <textarea name="mess" id="mess" cols="30" rows="10" class="form-control" style="border-radius: 15px; color: rgba(255, 187, 0, 0.966);border: rgba(255, 187, 0, 0.966) 4px groove;"  placeholder="ENTER YOUR MESSAGE"></textarea> 
                        <button class="btn btn-warning pt-2 pb-2 pl-5 pr-5 mt-3" style="color: white; float: right; border-radius: 10px; font-size: 20px;"><b> SUBMIT </b></button>           
              
                        </form>
                      </div>
                    </div>
                  </div>
                  </div>
                  

                </div>
              </div>

            </div>
   


            <?php
    include ("footer.php");
    ?>




    </body>
</html>