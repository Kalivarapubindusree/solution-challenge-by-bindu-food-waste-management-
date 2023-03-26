
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
$remail = "bindusree@gmail.com";
session_start();

$sql = "SELECT * FROM res_signup WHERE res_email ='".$remail."'";
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


