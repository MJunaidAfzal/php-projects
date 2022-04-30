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
        label{
            font-family: fantasy;
        };
    </style>
<div style="margin-top:50px; " class="container ">
    <form action="form.php" method="post">
    
        
            <h2 class="text-center text-success" > REGISTRATION FORM </h2>
        
        
        <div class="row mt-5">
                <div class="col-md-6 mt-3">
                    <label for="name" class="text-success"> Name</label>
                    Welcome <?php echo $_POST["name"]; ?><br>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="email" class="text-success">E-mail</label>
                    Your E-mail is <?php echo $_POST["email"]; ?><br>
                </div>
                <div class="col-md-6 mt-3">
                <label for="number" class="text-success">Number</label>
                Your Number is <?php echo $_POST["number"]; ?><br>
            </div>
            <div class="col-md-6 mt-3">
                <label for="mess" class="text-success">message</label>
                Your Message is <?php echo $_POST["mess"]; ?><br>
            </div>
    </div>
        
    </body>
    </html>