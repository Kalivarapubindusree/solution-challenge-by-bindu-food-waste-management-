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

  <title>Admin Dashboard</title>
</head>

<body>

  <nav class="sidebar close">
    <header>
      <div class="image-text">
        <span class="image">
          <img src="logo.png" alt="">
        </span>

        <div class="text logo-text">
          <span class="name">FoodSaver</span>

        </div>

      </div>

      <i class='fas fa-bars toggle'>
      </i>
    </header>

    <div class="menu-bar">
      <div class="menu">



        <ul class="menu-links">
          <li class="nav-link">
            <a href="#dash-page">
              <i class="fa fa-dashboard  icon" style="font-size:20px"></i>
              <span class="text nav-text">Dashboard</span>
            </a>
          </li>



          <li class="nav-link">
            <a href="#profile-page">
              <i class="fas fa-chalkboard-teacher icon" style="font-size:20px"></i>
              <span class="text nav-text">Profile</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#rest-page">
              <!-- <i class="material-icons icon" style="font-size:20px"></i> -->

              <i class='fas fa-bread-slice icon' style="font-size:20px"></i>
              <span class="text nav-text">Restuarant</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#ngo-page">
              <i class='fas fa-handshake icon' style="font-size:20px"></i>
              <span class="text nav-text">NGO</span>
            </a>
          </li>

          

          <li class="nav-link">
            <a href="#notification-page-1">
            <i class="material-icons icon" style="font-size:30px">add_alert</i>

              <!-- <i class="fa-regular fa-message" style="font-size:20px"></i> -->

              <span class="text nav-text">Restuarant Msg</span>
            </a>
          </li>


          <li class="nav-link">
            <a href="#notification-page-2">
            <i class="material-icons icon" style="font-size:30px">add_alert</i>
            <!-- <i class="material-icons icon" style="font-size:30px">announcement</i> -->

              <!-- <i class="fa fa-envelope icon" style="font-size:20px"></i> -->

              <span class="text nav-text">NGO Msg</span>
            </a>
          </li>


          <li class="nav-link">
            <a href="#action-page">
              <i class="material-icons icon" style="font-size:20px">speaker_notes</i>
              <span class="text nav-text">Rest-Action</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#action-2-page">
            <i class="material-icons icon" style="font-size:20px">speaker_notes</i>
              <span class="text nav-text">NGO-Action</span>
            </a>
          </li>
         

        </ul>
      </div>



      <div class="bottom-content">
        <li class="Logout">
          <a href="#">

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

    <!--DASHBOARD PAGE START -->
    <a name="dash-page"></a>
    <div class="main-content">

      <div class="dashboard-page">
        <div class="head">
          <span>Dashboard</span>
          <p>Home</p>
        </div>
        <div class="cards">
          <div id="card-1">
            <div id="topic-1">
              <strong>Restuarants</strong>
              <p>13,400+</p>
            </div>
            <div id="icon-1">
              <i class='fas fa-drumstick-bite icon' style="font-size:60px"></i>
            </div>
          </div>

          <div id="card-2">
            <div id="topic-2">
              <strong>NGOs</strong>
              <p>1202+</p>
            </div>
            <div id="icon-2">
              <i class='fas fa-handshake' style="font-size:60px"></i>
            </div>
          </div>

          <div id="card-3">
            <div id="topic-2">
              <strong style=" color:#f85819;">USERS</strong>
              <p>786,332</p>
            </div>
            <div id="icon-3">
              <i class='fas fa-users' style="font-size:60px"></i>
            </div>
          </div>



        </div>
        <div class="charts">
          <div class="chart-1">

            <table>
              <h3>Restuarant & NGO Status Dashboard</h3>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Status</th>


              </tr>

              <tr>
                <td id="dark-table">1</td>
                <td id="dark-table">SunLight Restuarant</td>
                <td id="online">Online</td>
              </tr>
              <tr>

                <td>2</td>
                <td>Naaz Hotel</td>
                <td id="online">Online</td>

              </tr>

              <tr>
                <td id="dark-table">3</td>
                <td id="dark-table">Smile Foundation</td>
                <td id="offline">Offline</td>

              </tr>
              <tr>
                <td>4</td>
                <td>Antarang Foundation</td>
                <td id="online">Online</td>

              </tr>


              <tr>
                <td id="dark-table">5</td>
                <td id="dark-table">Aastha Foundation</td>
                <td id="offline">Offline</td>

            </table>



          </div>

          <div class="chart-2">
            <h3>List Bar for User in Mumbai </h3>

            <p>Bandra</i>
            </p>
            <div class="container">
              <div class="skills bandra">40%</div>
            </div>

            <p>Kurla</p>
            <div class="container">
              <div class="skills kurla">26%</div>
            </div>

            <p>Mulund</p>
            <div class="container">
              <div class="skills mulund">11%</div>
            </div>

            <p>Chembur</p>
            <div class="container">
              <div class="skills chembur">23%</div>
            </div>



          </div>
        </div>

      </div>






    </div>
    <!--DASHBOARD PAGE END -->












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
            <p><strong>Name: </strong> Admin</p>
            <p><strong>Mobile No.: </strong> 100</p>
            <p><strong>Email: </strong> bindusree@gmail.com</p>
          
          </div>
        </div>

      </div>
    </div>

    <!--PROFILE PAGE END -->


















































    <!--RESTUARANT PAGE START -->
    <a name="rest-page"></a>
    <div class="main-content">

  <div class="dashboard-page">
  <div class="head">
    <span>Restuarant</span>
    <p>
      <n style="color: rgba(85, 82, 252, 0.9);"> Home </n> / Restuarant
    </p>
  </div>
  <div class="res-table">
  <p id="heading-top">Total Restuarants</p>
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

$sql = "SELECT * FROM `res_signup`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
//echo $num;
//echo " records found in the DataBase<br>";


if($num> 0){    
    while($row = mysqli_fetch_assoc($result)){         
       ?>
       <tr>               
                <td><?php echo $row['res_id'];?></td>
                <td><?php echo $row['res_name'];?></td>
                <td><?php echo $row['res_mob'];?></td>
                <td><?php echo $row['res_email'];?></td>
                <td><?php echo $row['res_add'];?></td>
                <td><?php echo $row['res_pin'];?></td>
                
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
    <!--RESTUARANT PAGE END -->

































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














    
<!--Notification PAGE START -->
<a name="notification-page-1"></a>
    <div class="main-content">

      <div class="dashboard-page">
        <div class="head">
          <span>Notification</span>
          <p>
            <n style="color: rgba(85, 82, 252, 0.9);"> Home </n> / Notification
          </p>
        </div>
        <div class="res-table">
          <p id="heading-top">Total Restuarant Messages</p>
          <div class="table-res">
            <table>
            <tr id="res-table-menu">
                <th>#</th>
                <th>Subject</th>
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

$sql = "SELECT * FROM `res_message`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
//echo $num;
//echo " records found in the DataBase<br>";


if($num> 0){    
    while($row = mysqli_fetch_assoc($result)){         
       ?>
       <tr>               
                <td><?php echo $row['res_id'];?></td>
                <td><?php echo $row['res_info'];?></td>
                <td><?php echo $row['res_name'];?></td>
                <td><?php echo $row['res_email'];?></td>
                <td><?php echo $row['res_mobile'];?></td>
                <td><?php echo $row['res_msg'];?></td>
                <td><?php echo $row['res_date'];?></td>
                
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






















    
 <!--Notification-2 PAGE START -->
 <a name="notification-page-2"></a>
    <div class="main-content">

      <div class="dashboard-page">
        <div class="head">
          <span>Notification</span>
          <p>
            <n style="color: rgba(85, 82, 252, 0.9);"> Home </n> / Notification
          </p>
        </div>
        <div class="res-table">
          <p id="heading-top">Total NGO Messages</p>
          <div class="table-res">
            <table>
            <tr id="res-table-menu">
                <th>#</th>
                <th>Subject</th>
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
//echo $num;
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
                

    <!--Notification-2 PAGE END -->







  
    
























      <!--Action PAGE START -->
      <a name="action-page"></a>
    <div class="main-content">

      <div class="dashboard-page">
        <div class="head">
          <span>Action</span>
          <p>
            <n style="color: rgba(85, 82, 252, 0.9);"> Home </n> / Action
          </p>
        </div>
        <div class="res-table">
          <p id="heading-top">Restuarants Account Delete</p>
          <div class="table-res">
          <div class="col-sm-9">
 <?php
 error_reporting(0);
  $sql = "SELECT * FROM res_signup";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
   echo '<table class="table">';
    echo '<thead>';
     echo '<tr id="res-table-menu">';
      echo '<th scope="col">#</th>';
      echo '<th scope="col">Name</th>';
      echo '<th scope="col">Mobile</th>';
      echo '<th scope="col">Email</th>';
      echo '<th scope="col">Pincode</th>';
      echo '<th scope="col">Address</th>';
      echo '<th scope="col">Action</th>';
     echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
     while ($row = mysqli_fetch_array($result)){
      echo '<tr>';
       echo '<td>'.$row['res_id'].'</td>';
       echo '<td>'.$row['res_name'].'</td>';
       echo '<td>'.$row['res_mob'].'</td>';
       echo '<td>'.$row['res_email'].'</td>';
       echo '<td>'.$row['res_pin'].'</td>';
       echo '<td>'.$row['res_add'].'</td>';
       echo '<td>';
        echo '<form action="" method="POST" class="d-inline mx-3">';
        echo '<input type="hidden" name="id" value='.$row['res_id'].'><button class="btn btn-secondary "  name="delete" value="Delete" type="submit"><i class="far fa-trash-alt" ></i></button>';
       echo '</form>';
       echo '</td>';
      echo '</tr>';
     }
    echo '</tbody>';
   echo '</table>';
  } else {
   echo '<h3 class="alert alert-warning">0 Results</h3>';
  }
  if(isset($_REQUEST['delete'])){
   $sql= "DELETE FROM res_signup WHERE res_id = {$_REQUEST['id']}";
   if($conn->query($sql) == TRUE){
    header("Location: Index.php");
   } else {
    echo "Unable to Delete Data";
   }
  }

 ?>
</div>


          </div>
        </div>
      </div>
    </div>
                

    <!--Action PAGE END -->




    <!--Action-2 PAGE START -->
    <a name="action-2-page"></a>
    <div class="main-content">

      <div class="dashboard-page">
        <div class="head">
          <span>Action</span>
          <p>
            <n style="color: rgba(85, 82, 252, 0.9);"> Home </n> / Action
          </p>
        </div>
        <div class="res-table">
          <p id="heading-top">NGOs Account Delete</p>
          <div class="table-res">
          <div class="col-sm-9">
 <?php
  $sql = "SELECT * FROM ngo_signup";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
   echo '<table class="table">';
    echo '<thead>';
     echo '<tr  id="res-table-menu">';
      echo '<th scope="col">#</th>';
      echo '<th scope="col">Name</th>';
      echo '<th scope="col">Mobile</th>';
      echo '<th scope="col">Email</th>';
      echo '<th scope="col">Pincode</th>';
      echo '<th scope="col">Address</th>';
      echo '<th scope="col">Action</th>';
     echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
     while ($row = mysqli_fetch_array($result)){
      echo '<tr>';
       echo '<td>'.$row['ngo_id'].'</td>';
       echo '<td>'.$row['ngo_name'].'</td>';
       echo '<td>'.$row['ngo_mob'].'</td>';
       echo '<td>'.$row['ngo_email'].'</td>';
       echo '<td>'.$row['ngo_pin'].'</td>';
       echo '<td>'.$row['ngo_add'].'</td>';
       echo '<td>';
        echo '<form action="" method="POST" class="d-inline mx-3">';
        echo '<input type="hidden" name="id" value='.$row['ngo_id'].'><button class="btn btn-secondary" name="delete" value="Delete" type="submit"><i class="far fa-trash-alt"></i></button>';
       echo '</form>';
       echo '</td>';
      echo '</tr>';
     }
    echo '</tbody>';
   echo '</table>';
  } else {
   echo '<h3 class="alert alert-warning">0 Results</h3>';
  }
  if(isset($_REQUEST['delete'])){
   $sql= "DELETE FROM ngo_signup WHERE ngo_id = {$_REQUEST['id']}";
   if($conn->query($sql) == TRUE){
    header("Location: Index.php");
   } else {
    echo "Unable to Delete Data";
   }
  }

 ?>
</div>


          </div>
        </div>
      </div>
    </div>
                

    <!--Action-2 PAGE END -->





































    <!-- FOOTER START -->
    <footer class="main-footer">
      <div class="float-right">
        <b>Version</b> 1.0.01
      </div>
      <strong class="no-print">Developed and Maintained by <a href="google.com">https://www.linkedin.com/in/bindu-sree-kalivarapu-a1962722a</a>.</strong>
    </footer>
    <!-- FOOTER END -->
  </section>
  <!-- SECTION END -->
  <script src="script.js"></script>
</body>

</html>

