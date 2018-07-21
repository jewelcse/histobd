 
<!-- connection to db -->

<?php include "templates/db.php" ; ?>


  <!-- header -->
<?php include  "templates/header.php" ?>
  <!-- navigation bar -->

<?php include  "templates/navigation.php" ; ?>



<!-- CUSTOM CSS -->

<link rel="stylesheet" href="css/style.css">

    <style type="text/css">
        
    h2 {
      text-align: center;
      text-decoration-line: underline;
    }


    </style>



<?php 



if (isset($_POST['login_account'])) {



 $user_name =  $_POST['username'];
 $password =  $_POST['user_password'];
 


 $user_name = mysqli_real_escape_string($connection,$user_name);
 $password = mysqli_real_escape_string($connection,$password);


 if ($user_name == '') {
   
   echo "username is required";
 }
 
  if ($password == '') {
   
   echo "password is required";
 }



$query = "SELECT * FROM  users WHERE username = '$user_name' ";

$login_verify_query = mysqli_query($connection,$query);


if (!$login_verify_query) {
 
  die("QUERY FAILED".mysqli_error($connection));



}

while ($row = mysqli_fetch_array($login_verify_query)) {

     $db_user_id = $row['user_id'];
     $db_user_firstname = $row['user_firstname'];
     $db_user_lastname = $row['user_lastname'];
     $db_user_email = $row['user_email'];
     $db_user_name = $row['username'];
     $db_user_password = $row['user_password'];

  



if ($db_user_name !== $user_name && $db_user_password!== $password) {
 

echo "<h1>Username or password is Worng!!!!</h1>";


}


else if ($user_name == $db_user_name && $password == $db_user_password) {

$_SESSION['user_id'] = $db_user_id ;  
$_SESSION['username'] = $db_user_name ; 

//echo "<h1>logged in!!!!</h1>";
header("Location:index.php");

}

else{

echo "<h1>Username or password is Worng!!!!</h1>";

}

}
}

?>








<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 large_padding">
			<h2 class="text-capitalize">login form</h2>
                <div class="sign_up_form large_padding2">
                    <form action="" method="post" accept-charset="utf-8"> 
                       
                         <div class="">
                               <div class="form-group">
                                    <label for="user_name">User Name</label><small style="color: red">* requires</small>
                                    <input type="text" class="form-control" name="username" placeholder="Enter your user name..." >
                               </div>
                        </div>
                        
                        <div class="">
                               <div class="form-group">
                                    <label for="password">Password</label><small style="color: red">* requires</small>
                                    <input type="password" class="form-control" name="user_password" placeholder="Enter your password..." >
                               </div>
                        </div>
                       
                    <button type="submit" class="btn btn-primary" name="login_account">Login</button>
                    </form>

            </div><!---/.sign_up_form -->

            <div>
              don't have an account?<small><a href="sign_up.php">create an account</a></small>
            </div>
        </div><!---/.col-md-offset-3 col-md-6 col-md-offset-3-->     
        </div><!---/.row-->


</div><!---/.container-->




















      
         
<!--  footer  -->
       
       
<?php include "templates/footer.php" ?>

<!--  /.footer  -->