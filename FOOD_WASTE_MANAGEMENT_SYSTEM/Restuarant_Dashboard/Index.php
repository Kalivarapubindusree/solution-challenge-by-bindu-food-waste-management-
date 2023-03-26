<?php

  session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon" href="logo.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!----======== CSS ======== -->
  <link rel="stylesheet" href="style.css">

  <title>Restuarant Dashboard</title>
</head>

<body>

  <nav class="sidebar close">
    <header>
      <div class="image-text">
        <span class="image">
          <img src="logo.png" alt="">
        </span>

        <div class="text logo-text">
          <span class="name">Restuarant</span>
          <!-- <p>Restuarant</p> -->

        </div>

      </div>

      <i class='fas fa-bars toggle'>
      </i>
    </header>

    <div class="menu-bar">
      <div class="menu">



        <ul class="menu-links">
          


          <li class="nav-link">
            <a href="#profile-page">
              <i class="fas fa-chalkboard-teacher icon" style="font-size:20px"></i>
              <span class="text nav-text">Profile</span>
            </a>
          </li>
          

          <li class="nav-link">
            <a href="#ngo-page">
              <i class='fas fa-handshake icon' style="font-size:20px"></i>
              <span class="text nav-text">NGO</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#update-pass">
              <i class='fa fa-key icon' style="font-size:20px"></i>
              <span class="text nav-text">Password</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#message-page">
              <i class="fa fa-envelope icon" style="font-size:20px"></i>

              <span class="text nav-text">Message</span>
            </a>
          </li>


        

          <li class="nav-link">
            <a href="#notification-page">
              <i class="material-icons icon" style="font-size:20px">notifications</i>

              <span class="text nav-text">Notification</span>
            </a>
          </li>


        </ul>
      </div>


  
      <div class="bottom-content">
        <li class="Logout">
         
          
          <a href="C:/xampp/htdocs/FOOD_WASTE_MANAGEMENT_SYSTEM/login-type-page.php">
            <i class='fas fa-power-off icon' style="color:#fff"></i>
            <span class="text nav-text" style="color:#ffff">Logout</span>
          </a>
       
        </li>





      </div>


    </div>

  </nav>
<!-- SECTION START-->
  <section class="home">
    <div class="text">Dashboard </div>
    <div class="header">
      <div id="left-part">
        <p>Home</p>
      </div>


    </div>
    </div>
    </div>





   
   <!--PROFILE PAGE START -->
<a name="profile-page"></a>
    <div class="main-content">


      <div class="dashboard-page">
        <div class="head">
          <span>Profile</span>
          <p>
            <n style="color: rgba(85, 82, 252, 0.9);"> Home </n> / Profile
          </p>
        </div>
        <div class="profile-page">
          <p id="profile-heading-top">Profile Details</p>
          <div class="profile-details">
            
         
    <!--PROFILE PAGE END -->
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "waste_manage";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    //echo "Connection was successful<br>";
}
// session_start();
if(isset($_SESSION['is_login'])){
  $resemail = $_SESSION['remail'];
 // echo "Login";
 }
 else{
   echo "Fail";
 }
// $resemail = $_SESSION['remail'];
$sql = "SELECT * FROM res_signup WHERE res_email ='".$resemail."'";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
//echo $num;
//echo " records found in the DataBase<br>";


if($num> 0){
    
    while($row = mysqli_fetch_assoc($result)){
       
         
       ?>
       

            <p><strong>Name: </strong><?php echo $row['res_name'];?></p>
            <p><strong>Mobile No.: </strong><?php echo $row['res_mob'];?></p>
            <p><strong>Email: </strong><?php echo $row['res_email'];?></p>
            <p><strong>Address: </strong><?php echo $row['res_add'];?></p>
            <p><strong>Pincode: </strong><?php echo $row['res_pin'];?></p>
       
        
             
            
                
            
   <?php

    }


}
?>

</div>
        </div>

      </div>
    </div>




    <!--PROFILE PAGE END -->

    <!--NGOs PAGE START -->
    <a name="ngo-page"></a>
    <div class="main-content">

      <div class="dashboard-page">
        <div class="head">
          <span>NGOs</span>
          <p>
            <n style="color: rgba(85, 82, 252, 0.9);"> Home </n> / NGOs
          </p>
        </div>
        <div class="res-table">
          <p id="heading-top">Total NGOs</p>
          <div class="table-res">
            <table>
            <tr id="res-table-menu">
                <th>#</th>
                <th>Name</th>
                <th>Mobile No.</th>
                <th>Email</th>
                <th>Address</th>
                <th>Pincode</th>
              </tr>


              <?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "waste_manage";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    //echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `ngo_signup`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
//echo $num;
//echo " records found in the DataBase<br>";


if($num> 0){    
    while($row = mysqli_fetch_assoc($result)){         
       ?>
       <tr>               
                <td><?php echo $row['ngo_id'];?></td>
                <td><?php echo $row['ngo_name'];?></td>
                <td><?php echo $row['ngo_mob'];?></td>
                <td><?php echo $row['ngo_email'];?></td>
                <td><?php echo $row['ngo_add'];?></td>
                <td><?php echo $row['ngo_pin'];?></td>
                
            </tr>            
   <?php
    }
}
?>

</table>


          </div>
        </div>
      </div>
    </div>
                

    <!--NGOs PAGE END -->






<!--change password PAGE START -->
 
<a name="update-pass"></a>

<?php

if(isset($_REQUEST['passupdate'])){
  $Pass = $_REQUEST['pass'];
  $cPass = $_REQUEST['cpass'];
  if($Pass == "" || $cPass == ""){
   $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All The Fields</div>';
  }
  else if($Pass != $cPass){
   $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Passwords do not match</div>';
  }
  else{
   $sql = "UPDATE res_signup SET res_pass = '$Pass' WHERE res_email = '$resemail'";
   if($conn->query($sql) == TRUE){
    $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';
   } else {
    $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
   }
  }
}

?>


    <div class="main-content">


      <div class="dashboard-page">
        <div class="head">
          <span>Password</span>
          <p>
            <n style="color: rgba(85, 82, 252, 0.9);"> Home </n> / Change Password
          </p>
        </div>
        <div class="profile-page">
          <p id="profile-heading-top">Change Password Form</p>
          <div class="profile-details">

          <div class="col-sm-9 col-m-10 mt-2">
    <form action="" method="POST">
  
  

   <div class="form-group " >
     
    <label for="inputMobile" class="mb-2">Password:</label><br>
    <input type="text" class="form-control" style=" width: 100%;
  padding: 5px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;" id="inputMobile" name="pass">
   </div>

  <div class="form-group mt-3">
   <label for="inputRequestDescription" class="mb-2">Confirm Password:</label><br>
   <input type="text" class="form-control"style=" width: 100%;
  padding: 5px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;"  id="inputRequestDescription" name="cpass">
  </div>

  

  <button type="submit" class="btn" style=" background-color: #2196F3;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin:10px 2px;
  cursor: pointer;" name="passupdate">Submit</button>
 </form>
</div>  





        
        </div>
      </div>
    </div> 

   
    <!--change password PAGE END -->















 <!--MESSAGE PAGE START -->
 
 <a name="message-page"></a>

<?php

if(isset($_REQUEST['submitrequest'])){
  $info = $_REQUEST['info'];
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $mobile = $_REQUEST['mobile'];
  $msg = $_REQUEST['msg'];
  $date = $_REQUEST['date'];

if(($info == "") || ($name == "") || ($email == "") || ($mobile == "") || ($msg == "") || ($date == "")){
  $msg = "<div class='alert alert-warning col-sm-6 ml-5 mt-2'>Fill All The Fields</div>";
 }
 else {
  $sql = "INSERT INTO res_message (res_info, res_name, res_email, res_mobile, res_msg, res_date)VALUES('$info', '$name', '$email', '$mobile', '$msg', '$date')";

  if($conn->query($sql) == TRUE){
   $msg = "<div class='alert alert-success col-sm-6 ml-5 mt-2'>Request Submitted Sucessfully, check 'User Requests' tab to see your receipt</div>";
  }else {
    $msg = "<div class='alert alert-danger col-sm-6 ml-5 mt-2'>Unable to Submit Your Request</div>";
  }  
 }
}
?>


    <div class="main-content">


      <div class="dashboard-page">
        <div class="head">
          <span>Message</span>
          <p>
            <n style="color: rgba(85, 82, 252, 0.9);"> Home </n> / Message
          </p>
        </div>
        <div class="profile-page">
          <p id="profile-heading-top">Message Form</p>
          <div class="profile-details">

          <div class="col-sm-9 col-m-10 mt-2">
 <form action="" method="POST">
  <div class="form-group">
   <label for="inputRequestInfo" class="mb-2">Subject:</label>  <br>
<input type="text" class="form-control" style=" width: 100%;
  padding: 5px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;" name="info"> 
  </div>
  <div class="form-group mt-3">
   <label for="inputName" class="mb-2">Name</label><br>
   <input type="text" class="form-control"style=" width: 100%;
  padding: 5px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;" id="inputName"  name="name">
  </div>

  <div class="form-group col-md-6">
    <label for="inputEmail" class="mb-2">Email</label>
    <br>
    <input type="email" class="form-control"  style=" width: 100%;
  padding: 5px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;" id="inputEmail" name="email">
   </div>

   <div class="form-group ">
    <label for="inputMobile" class="mb-2">Mobile</label><br>
    <input type="text" class="form-control" style=" width: 100%;
  padding: 5px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;" id="inputMobile" name="mobile">
   </div>

  <div class="form-group mt-3">
   <label for="inputRequestDescription" class="mb-2">Message</label><br>
   <input type="text" class="form-control"  style=" width: 100%;
  padding: 5px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;" id="inputRequestDescription" placeholder="Write Message" name="msg">
  </div>

  <div class="form-group col-md-2">
    <label for="inputDate" class="mb-2">Date</label><br>
    <input type="date" class="form-control" style=" width: 100%;
  padding: 5px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;" id="inputDate" name="date" readonly>
   </div> 

  <button type="submit" class="btn btn-primary mt-3 mb-3"
  style=" background-color: #2196F3;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin:10px 2px;
  cursor: pointer;" name="submitrequest">Submit</button>
 </form>
</div>  





        
        </div>
      </div>
    </div> 

    <script>

  Date.prototype.toDateInputValue = (function() {
  var local = new Date(this);
  local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
  return local.toJSON().slice(0,10);
 });
 document.getElementById('inputDate').value = new Date().toDateInputValue();

    </script>
    <!--MESSAGE PAGE END -->












 <!--Notification PAGE START -->
 <a name="notification-page"></a>

    <div class="main-content">

      <div class="dashboard-page">
        <div class="head">
          <span>Notification</span>
          <p>
            <n style="color: rgba(85, 82, 252, 0.9);"> Home </n> / Notication
          </p>
        </div>
        <div class="res-table">
          <p id="heading-top">Total Messages</p>
          <div class="table-res">
            <table>
            <tr id="res-table-menu">
                <th>#</th>
                <th>Message Info</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Message</th>
                <th>Date</th>
              </tr>


              <?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "waste_manage";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    //echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `ngo_message`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo $num;
//echo " records found in the DataBase<br>";


if($num> 0){    
    while($row = mysqli_fetch_assoc($result)){         
       ?>
       <tr>               
                <td><?php echo $row['ngo_id'];?></td>
                <td><?php echo $row['ngo_info'];?></td>
                <td><?php echo $row['ngo_name'];?></td>
                <td><?php echo $row['ngo_email'];?></td>
                <td><?php echo $row['ngo_mobile'];?></td>
                <td><?php echo $row['ngo_msg'];?></td>
                <td><?php echo $row['ngo_date'];?></td>
                
            </tr>            
   <?php
    }
}
?>

</table>


          </div>
        </div>
      </div>
    </div>
                

    <!--Notification PAGE END -->







  
    
















    <!-- FOOTER START -->
    <footer class="main-footer">
      <div class="float-right">
        <b>Version</b> 1.0.01
      </div>
      <strong class="no-print">Developed and Maintained by <a href="google.com"> https://www.linkedin.com/in/bindu-sree-kalivarapu-a1962722a </a>.</strong>
    </footer>
    <!-- FOOTER END -->
  </section>
  <!-- SECTION END -->
  <script src="script.js"></script>
</body>

</html>