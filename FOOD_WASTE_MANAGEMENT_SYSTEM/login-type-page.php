<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Select Login Type</title>
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
        color:RoyalBlue;
    }
</style>

<body>
    <div class="wrapper">
        <h2 class="title">Select Login Credential.</h2>
        <form action="" method="post" class="form">

            <button class="btn" onClick="parent.location='admin-login.php'" type=button >Admin</button>
            <button class="btn" onClick="parent.location='restuarant-login.php'" type=button>Restuarant</button>
            <button class="btn" onClick="parent.location='NGO-login.php'" type=button>NGO</button>
            <p>Create Account! <a href="register-type-page.php">Register</a>. <a href="index.php" style="color:red;">Close</a>
            </p>
        </form>
    </div>
</body>

</html>