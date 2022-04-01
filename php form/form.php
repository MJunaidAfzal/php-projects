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
<body>
    <style>
        label{
            font-family: fantasy;
        };
    </style>
<div style="margin-top:50px; " class="container ">
    <form action="form.php" method="post">
    <div style="background-color:rgba(195, 201, 116, 0.39);  "   class="card">
        <div class="card-header">
            <h2 class="text-center"> REGISTRATION FORM </h2>
        </div>
        <div class="card-body">
        <div class="row mt-5">
                <div class="col-md-6 mt-3">
                    <label for="name1">First Name</label>
                    Welcome <?php echo $_POST["first_name"]; ?><br>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="name2">Last Name</label>
                    Your last name is <?php echo $_POST["last_name"]; ?><br>
                </div>
                <div class="col-md-6 mt-3">
                <label for="birth">Birth Date</label>
                Your date of birth is <?php echo $_POST["birth"]; ?><br>
            </div>
            <div class="col-md-6 mt-3">
                <label for="age">Age</label>
                Your age is <?php echo $_POST["age"]; ?><br>
            </div>
            <div class="col-md-12 mt-3">
                <label for="number">Phone Number</label>
                Your Phone Number is <?php echo $_POST["number"]; ?><br>
            </div>
            <div class="col-md-6 mt-3">
                <label for="email">Email</label>
                Your Email is <?php echo $_POST["email"]; ?><br>
             </div>
                <div class="col-md-6 mt-3">
            <label for="address">Address</label>
            Your address is <?php echo $_POST["address"]; ?><br>
         </div>
         <div class="col-md-6 mt-3">
                <label for="country">Country</label>
                Your country is <?php echo $_POST["country"]; ?><br>
             </div>
                <div class="col-md-6 mt-3">
            <label for="region">Region</label>
            Your region is <?php echo $_POST["region"]; ?><br>
         </div>
        
        </div>        
</div>
</div>
</div>
</body>
</html>