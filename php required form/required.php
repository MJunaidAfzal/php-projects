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
    <?php
    $first_nameErr = $last_nameErr = $birthErr = $ageErr = $numberErr = $emailErr = $addressErr = $countryErr = $regionErr = "";
    $first_name = $last_name = $birth = $age = $number = $email = $address = $country = $region = "";
     
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["first_name"])) {
          $first_nameErr = "Name is required";
        } else {
          $first_name = test_input($_POST["first_name"]);
        }
        
        if (empty($_POST["last_name"])) {
          $last_nameErr = "last_name is required";
        } else {
          $last_name = test_input($_POST["last_name"]);
        }
          
        if (empty($_POST["birth"])) {
          $birthErr = "birth date is required";
        } else {
          $birth = test_input($_POST["birth"]);
        }
      
        if (empty($_POST["age"])) {
          $ageErr = "age is required";
        } else {
          $age = test_input($_POST["age"]);
        }
      
        if (empty($_POST["number"])) {
          $numberErr = "number is required";
        } else {
          $number = test_input($_POST["number"]);
        }
        if (empty($_POST["email"])) {
            $emailErr = "email is required";
          } else {
            $email = test_input($_POST["email"]);
          }
            
          if (empty($_POST["address"])) {
            $addressErr = "address  is required";
          } else {
            $address = test_input($_POST["address"]);
          }
        
          if (empty($_POST["country"])) {
            $countryErr = "country is required";
          } else {
            $country = test_input($_POST["country"]);
          }
        
          if (empty($_POST["region"])) {
            $regionErr = "region is required";
          } else {
            $region = test_input($_POST["region"]);
          }
      }
      
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

?>


<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">>
    <div style="background-color:rgba(195, 201, 116, 0.39);font-family: fantasy;  "   class="card">
        <div class="card-header">
            <h2 class="text-center"> REGISTRATION FORM </h2>
        </div>
        <div class="card-body">
           
            <div class="row mt-5">
                <div class="col-md-6">
                    <label for="name1">First Name</label>
                </div>
                <div class="col-md-6">
                    <label for="name2">Last Name</label>
                </div>
                
                <div class="col-md-6">
                    
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-light"><i class="fa fa-user "></i></span>
                    <input type="text" name="first_name" id="name1" class="form-control" placeholder="Enter Your First Name">
                    <span style = "color: red; font-size: 13px;font-family:none;"  >* <?php echo $first_nameErr;?></span>

                </div>
                
                </div>

                <div class="col-md-6">
                    
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning "><i class="fa fa-user "></i></span>
                <input type="text" name="last_name" id="name2" class="form-control" placeholder="Enter Your last Name">
                <span style = "color: red; font-size: 13px;font-family:none;"  >* <?php echo $last_nameErr;?></span>

            </div>
            </div>
            </div>

            <div class="row mt-5">
            <div class="col-md-4">
                <label for="birth">Birth Date</label>
            </div>
            <div class="col-md-4">
                <label for="age">Age</label>
            </div>
            <div class="col-md-4">
                <label for="number">Phone Number</label>
            </div>

            <div class="col-md-4">
                    
                <div class="input-group-prepend">
                    <span class="input-group-text bg-info text-light"><i class="fa fa-birthday-cake "></i></span>
            <input type="date" name="birth" id="birth" class="form-control" placeholder="Enter Birth Date">
            <span style = "color: red; font-size: 13px;font-family:none;"  >* <?php echo $birthErr;?></span>

        </div>
        
        </div>

        <div class="col-md-4">
            
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark text-light "><i class="fa fa-address-book "></i></span>
        <input type="number" name="age" id="age" class="form-control" placeholder="Enter Your Age">
        <span style = "color: red; font-size: 13px;font-family:none;"  >* <?php echo $ageErr;?></span>

    </div>
    </div>

    <div class="col-md-4">
            
        <div class="input-group-prepend">
            <span class="input-group-text bg-success text-light "><i class="fa fa-phone "></i></span>
    <input type="text" name="number" id="nuber" class="form-control" placeholder="Enter Your Phone Number">
    <span style = "color: red; font-size: 13px;font-family:none;"  >* <?php echo $numberErr;?></span>


</div>
</div>

<img  style=" border-radius: 50px; margin-left: 450px; margin-top: 20px; width: 150px;height: 150px;" src="assets/img/avatar_business_costume_male_man_office_work_icon_628289.png" alt="avatar">

              <div class="col-md-6 mt-3">
                <label for="email">Email</label>
             </div>
                <div class="col-md-6 mt-3">
            <label for="address">Address</label>
         </div>
 <div class="col-md-6 ">
            
            <div class="input-group-prepend">
                <span class="input-group-text bg-warning text-light "><i class="fa fa-folder "></i></span>
        <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email">
        <span style = "color: red; font-size: 13px;font-family:none;"  >* <?php echo $emailErr;?></span>

    </div>
    </div>

    <div class="col-md-6 ">
            
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-light "><i class="fa fa-home "></i></span>
    <input type="text" name="address" id="address" class="form-control" placeholder="Enter Your address">
    <span style = "color: red; font-size: 13px;font-family:none;"  >* <?php echo $addressErr;?></span>


</div>
</div>
         <div class="col-md-6 mt-3">
                <label for="country">Country</label>
             </div>
                <div class="col-md-6 mt-3">
            <label for="region">Region</label>
         </div>

<div class="col-md-6 ">
        <div class="input-group-prepend">
            <span class="input-group-text bg-success text-light "><i class="fa fa-map "></i></span>
    <select name="country" id="country" class="form-control">
        <option value="1">Pakistan</option>
        <option value="2">India</option>
        <option value="3">America</option>
    </select>
    <span style = "color: red; font-size: 13px;font-family:none;"  >* <?php echo $countryErr;?></span>


</div>
</div>

<div class="col-md-6 ">
        <div class="input-group-prepend">
            <span class="input-group-text bg-info text-light "><i class="fa fa-male "></i></span>
    <select name="region" id="region" class="form-control">
        <option value="1">Muslim</option>
        <option value="2">Christian</option>
        <option value="3">Hindu</option>
    </select>
    <span style = "color: red; font-size: 13px;font-family:none;"  >* <?php echo $regionErr;?></span>


</div>
</div>
</div>
        <button  style="float: right;"  class="btn btn-primary btn-lg mt-5" > <i class="fa fa-paper-plane"></i> Log In </button>
        </div>
       
        <?php
    echo "<h2>Your Input:</h2>";
    echo $first_name;
    echo "<br>";
    echo $last_name;
  echo "<br>";
    echo $birth;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $number;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $address;
  echo "<br>";
    echo $country;
    echo "<br>";
    echo $region;
?>
    </div>
    
</form> 

  
</div>
</body>
</html>