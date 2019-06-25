<?php include "templates/db.php" ; ?>


<?php 

if (isset($_POST['userName']) && isset($_POST['userPass'])) {


 $user_name =  $_POST['userName'];
 $password =  $_POST['userPass'];
 


 $user_name = mysqli_real_escape_string($connection,$user_name);
 $password = mysqli_real_escape_string($connection,$password);



$query = "SELECT * FROM  users WHERE username = '{$user_name}' AND user_password = '{$password}' ";

$login_verify_query = mysqli_query($connection,$query);

$row_count = mysqli_num_rows($login_verify_query);

if($row_count == 1){
  $row = mysqli_fetch_array($login_verify_query);
  $db_user_id = $row['user_id'];
  $db_user_name = $row['username'];
  session_start();
  $_SESSION['user_id'] = $db_user_id ;  
  $_SESSION['username'] = $db_user_name ; 
//   header("Location:index.php");
  echo "success";
  

}
else{
  echo "failed";
}


}

?>