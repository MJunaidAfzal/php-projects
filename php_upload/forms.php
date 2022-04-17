<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <title>php upload</title>
</head>
<body style="background-color: lightgray;">
    <style>
        
        body{
            background-image: url(assets/img/design.png);
            background-repeat: no-repeat;
            background-size: 210px;
            
        }
    </style>



    <div class="container">
    <div class="row">
        <div class="col-md-4 mt-4 bg-info" style="border-radius: 30px;height: 780px;">
            <div class="text-center mt-5">
                <img style="border-radius:20px ;" height="150px" width="150px" src="assets/img/avatar_business_costume_male_man_office_work_icon_628289.png" alt="">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input style="margin-top: 50px;" class="btn btn-primary" type="file" name="fileToUpload" id="fileToUpload">
                <button class="btn btn-outline-primary mt-3 text-light" type="submit" name="Upload Image" id="submit">Upload Image </button>
                </form>
                <h2 style="margin-top: 50px;"><b style="color: white; "> Welcome Back! </b></h2>
                <b style="color: white;">to keep connected us please use your real <br>login with your personal info</b><br>

                    
                   
            </div>
        </div>
        <div class="col-md-8 bg-light mt-4" style="border-radius: 30px;height: 780px;">
            <div class="text-center">
                <h1 class="text-info mt-5"><b>Create Account</b></h1>
                <b style="color: gray; " >Or Use Your Email To Register</b>
                <div style="margin-top: 150px;">
                
                <div class="input-group-prepend">
                    <span class="input-group-text bg-info text-light"><i class="fa fa-user "></i></span>
            <input style="padding: 25px;" type="text" name="first_name" id="name1" class="form-control" placeholder="Enter Your First Name">
        </div>
        <div class="input-group-prepend mt-3">
            <span class="input-group-text bg-info text-light"><i class="fa fa-envelope "></i></span>
    <input style="padding: 25px;" type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email">
</div>
<div class="input-group-prepend mt-3">
    <span class="input-group-text bg-info text-light"><i class="fa fa-lock "></i></span>
<input style="padding: 25px;" type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password">
</div>
    </div>
    <button class="btn btn-outline-info btn-lg mt-5" style="border-radius: 10px;padding-left: 20px;padding-right: 20px;padding-top: 5px;padding-bottom: 5px;">Submit</button>
            </div>

        </div>
    </div>
    </div>
    
</body>
</html>