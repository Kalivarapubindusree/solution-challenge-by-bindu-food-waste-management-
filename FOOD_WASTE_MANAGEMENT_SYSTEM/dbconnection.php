
<?php

 $db_host = "localhost";
 $db_user = "root";
 $db_password = "";
 $db_name = "waste_manage";
 $db_port = "3306";

 $connect = new mysqli($db_host, $db_user, $db_password, $db_name, $db_port);

 if($connect->connect_error){
  echo "Fail";
 }
//  else{
//   echo "Connect";
//  }

?>