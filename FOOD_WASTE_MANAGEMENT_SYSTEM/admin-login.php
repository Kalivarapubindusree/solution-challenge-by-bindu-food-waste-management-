<?php

 include("dbconnection.php");

 
  if(isset($_REQUEST['email'])){
  $email = mysqli_real_escape_string($connect, trim($_REQUEST['email']));
  $password = trim($_REQUEST['password']);
  $sql = "SELECT admin_email, admin_pass FROM admin_login WHERE admin_email='".$email."' AND admin_pass='".$password."' LIMIT 1";
  $result = $connect->query($sql);
  if($result->num_rows == 1){
//    $_SESSION['is_login'] = true;
//    $_SESSION['remail'] = $remail;
//    echo "<script> location.href='Restuarant_Dashboard\Index.php';</script>";
     header("Location: Admin_Dashboard\Index.php");
   }
  else{
   $msg = '<div class="alert alert-warning mt-4" role="alert">Enter valid Email and Password</div>';
   }
  }

 
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Login Page</title>
</head>
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

    .btn:hover,
    .btn:focus {
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

    .wrapper .form p a:focus,
    .wrapper .form p a:hover {
        color: RoyalBlue;
    }
</style>

<body>
    <div class="wrapper">
        <h2 class="title">Admin Login</h2>
        <form action="#" method="POST" class="form" name="myform">
        <?php if(isset($msg)) {echo $msg;} ?>
            <div class="input-field">
                <label for="email" class="input-label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="Enter your email">
                <!-- <span id="showmsg" class="text-danger"></span> -->
            </div>
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" id="password" class="input" placeholder="Enter your password"
                    required>
            </div>
            <a href="forget-password.html" style="text-decoration:none; color:red;">Forget Password?</a>

            <button class="btn" name="login">Login</button>
            <p>Create Account! <a href="admin-register.php">Register</a>. <a href="index.php" style="color:red;"> Close</a>
            </p>
        </form>
    </div>
   
</body>

</html>