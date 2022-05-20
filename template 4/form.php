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
<body style ="background-color:lightgray; color:black;">
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
            label{
                color:darkred;
                font-family:fantasy;
            }
    </style>
<div style="margin-top:50px; " class="container ">
<div class="formb">
    <form action="form.php" method="post">
    
        
            <h2 class="text-center " > YOUR FORM INFORMATION </h2>
        
        
        <div class="row mt-5">
                <div class="col-md-6 mt-3">
                    <label for="name" > First Name</label>
                    Welcome <?php echo $_POST["name"]; ?><br>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="email" >Last Name</label>
                    Your Last Name is <?php echo $_POST["lastname"]; ?><br>
                </div>
                <div class="col-md-6 mt-3">
                <label for="email" >E-mail</label>
                Your E-mail is <?php echo $_POST["email"]; ?><br>
            </div>
            <div class="col-md-6 mt-3">
                <label for="password" >Password</label>
                Your Password is <?php echo $_POST["password"]; ?><br>
            </div>
            <div class="col-md-6 mt-3">
                <label for="message" >Message</label>
                Your Message is <?php echo $_POST["message"]; ?><br>
            </div>

    </form>
    </div>

    </div>
        
    </body>
    </html>