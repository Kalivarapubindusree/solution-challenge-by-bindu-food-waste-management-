<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register Type Page</title>
</head>
<style>@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

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
        color: #00a8ff;
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
    }</style>
<body>
    <div class="wrapper">
        <h2 class="title">Select Register Credential.</h2>
        <form action="" method="post" class="form">
           
            <!-- <button class="btn" onClick="parent.location='admin-register.php'" type=button >Admin</button> -->
            <button class="btn" onClick="parent.location='restuarant-register.php'" type=button>Restuarant</button>
            <button class="btn" onClick="parent.location='NGO-register.php'" type=button>NGO</button>
            <p>Already Account! <a href="login-type-page.php">Login</a>. <a href="index.php" style="color:red;">Close</a></p>
        </form>
    </div>
</body>
</html>