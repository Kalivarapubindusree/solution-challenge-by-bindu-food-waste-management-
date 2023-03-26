<?php

include("dbconnection.php");

if(isset($_REQUEST['rsignup'])){
 $rName = mysqli_real_escape_string($connect, trim($_REQUEST['name']));
 $rMob = trim($_REQUEST['number']);
 $rEmail = mysqli_real_escape_string($connect, trim($_REQUEST['email']));
 $rPin = trim($_REQUEST['state']);
 $rAddress = trim($_REQUEST['address']);
 $rPassword = trim($_REQUEST['password']);
 $rcPassword = trim($_REQUEST['cpassword']);
 // Check empty fields
 if(($rName) == "" || ($rMob) == "" || ($rEmail) == "" || ($rPin) == "" || ($rAddress) == "" || ($rPassword) == "" || ($rcPassword) == ""){
  $regmsg = '<div class="alert alert-warning mt-4" role="alert">All fields are required</div>';
 }
 else if($rPassword != $rcPassword){
  $regmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Passwords do not match</div>';
 } 
 else{ 
  // Check registered Email
  $sql = "SELECT res_email FROM res_signup WHERE res_email = '".$rEmail."'";
  $result = $connect->query($sql);
  if($result->num_rows >= 1){
   $regmsg = '<div class="alert alert-warning mt-4" role="alert">This email is already registered</div>';
  } else {
   // Insert data in database
   
   $sql = "INSERT INTO res_signup(res_name, res_mob, res_email, res_pin, res_add, res_pass, res_repass) VALUES('$rName', '$rMob', '$rEmail', '$rPin', '$rAddress', '$rPassword', '$rcPassword')";

   if($connect->query($sql)){
    $regmsg = '<div class="alert alert-success mt-4" role="alert">Account successfully created</div>';
   }
   else{
    $regmsg = '<div class="alert alert-danger mt-4" role="alert">Unable to create Account</div>';
   }
  }   
 }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <title>Restuarant Register Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: RoyalBlue;
}

.wrapper {
    background: white;
    padding: 30px 30px;
    width: 500px;
    margin: 30px;
}

.wrapper .title {
    border-left: 5px solid RoyalBlue;
    padding-left: 5px;
    margin-bottom: 15px;
}

.input-field {
    display: block;
    margin: 10px 0;
    width: 100%;
    margin-bottom: 30px;
    position: relative;
}

.input-field .input-label {
    display: flex;
    font-size: 15px;
    margin-bottom: 2px;
}

.input-field .input {
    font-family: 'Poppins', sans-serif;
    border: 1px solid #ccc;
    background: transparent;
    outline: none;
    width: 100%;
    padding: 10px;
    font-size: 15px;
    transition: 0.3s all ease;
}

.input-field .input:focus {
    border-color: RoyalBlue;
}

.input-field.success input{
    border-color: #2ecc71;
}

.input-field.error input{
    border-color: #e74c3c;
}
 
.input-field i{
    position: absolute;
    right: 5%;
    top: 40px;
    visibility: hidden;
}

.input-field.success i.fa-check-circle{
    color: #2ecc71;
    visibility: visible;
}
.input-field.error i.fa-exclamation-circle{
    color: #e74c3c;
    visibility: visible;
}


.input-field small{
    color: #e74c3c;
    position:absolute; 
    left: 0;
    visibility: hidden;
}

.input-field.error small{
    visibility:visible ;
}

.btn {
    font-family: 'Poppins', sans-serif;
    background: RoyalBlue;
    color: white;
    padding: 10px;
    width: 100%;
    font-size: 15px;
    border: 1px solid transparent;
    cursor: pointer;
    margin: 5px 0;
    transition: 0.3s all ease;
}

.btn:hover, .btn:focus {
    background: transparent;
    border-color: RoyalBlue;
    color: RoyalBlue;
}

.wrapper .form p {
    margin: 5px 0;
    text-align: center;
}

.wrapper .form p a {
    text-decoration: none;
    color: #333;
    transition: 0.3s all ease;
}

.wrapper .form p a:focus, .wrapper .form p a:hover {
    color: RoyalBlue;
}
    </style>
</head>
<body>
    <div class="wrapper">
        <h2 class="title">Restuarant Register</h2>

        

        <form action="" method="POST" class="form" id="form_1">
        <?php if(isset($regmsg)) {echo $regmsg;} ?>
            <div class="input-field">
                <label for="name" class="input-label">Name </label>
                <input type="name" name="name" id="name" class="input" placeholder="Restuarant" autocomplete="off">

            </div>

            <div class="input-field">
                <label for="number" class="input-label">Mobile </label>
                <input type="number" name="number" id="phone" class="input" placeholder="Enter your mobile"  autocomplete="off">

                
            </div>

            <div class="input-field">
                <label for="email" class="input-label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="Enter your email"  autocomplete="off">

              
            </div>

            <div class="input-field">
                <label for="state" class="input-label">Pincode</label>
                <input type="state" name="state" id="state" class="input" placeholder="Enter your area Pincode"  autocomplete="off">

               
            </div>

            <div class="input-field">
                <label for="address" class="input-label">Address </label>
                <input type="address" name="address" id="address" class="input" placeholder="Enter your Address" autocomplete="off">

               
            </div>

            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" id="password" class="input" placeholder="Enter your password" autocomplete="off">

               
            </div>

            <div class="input-field">
                <label for="cpassword" class="input-label">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword" class="input" placeholder="Enter your confirm password" autocomplete="off">

               
            </div>

            <button type="submit" class="btn" name="rsignup" value="Submit">Register</button>
            <p>You have already an account! <a href="restuarant-login.php">Login</a>. <a href="index.php" style="color:red;">Close</a></p>
            
        </form>
    </div>

</body>
</html>