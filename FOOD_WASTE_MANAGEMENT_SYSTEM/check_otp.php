<?php
include('db.php');
session_start();
$con=mysqli_connect('localhost','root','','mini_project_data');
$otp=$_POST['otp'];
$email=$_SESSION['EMAIL'];
$res=mysqli_query($con,"select * from admin_data where email='$email' and otp='$otp'");
$count=mysqli_num_rows($res);
if($count>0){
	mysqli_query($con,"update admin_data set otp='' where email='$email'");
	$_SESSION['IS_LOGIN']=$email;
	echo "yes";
}else{
	echo "not_exist";
}
?>
<a href="login.php"> Click here for Login</a>