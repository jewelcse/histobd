<?php

include "templates/db.php";



if(isset($_POST['userId']) && isset($_POST['userFname'])){
  $user_id = $_POST['userId'];
  $first_name = $_POST['userFname'];
  $query  = "UPDATE users SET user_firstname = '{$first_name}' WHERE user_id  = $user_id " ;
  $insert_query  = mysqli_query($connection,$query);
  
  if (!$insert_query ) {
    die("QUERY FAILED".mysqli_error($connection));
 }


}



if(isset($_POST['userId']) && isset($_POST['userLname'])){
  $user_id = $_POST['userId'];
  $last_name = $_POST['userLname'];
  $query  = "UPDATE users SET user_lastname = '{$last_name}' WHERE user_id  = $user_id " ;
  $insert_query  = mysqli_query($connection,$query);
  if (!$insert_query ) {
    die("QUERY FAILED".mysqli_error($connection));
 }
}


 

if(isset($_POST['userId']) && isset($_POST['username'])){
  $user_id = $_POST['userId'];
  $username = $_POST['username'];
  $query  = "UPDATE users SET username = '{$username}' WHERE user_id  = $user_id " ;
  $insert_query  = mysqli_query($connection,$query);
  if (!$insert_query ) {
    die("QUERY FAILED".mysqli_error($connection));
 }
}


if(isset($_POST['userId']) && isset($_POST['email'])){
  $user_id = $_POST['userId'];
  $email = $_POST['email'];
  $query  = "UPDATE users SET user_email = '{$email}' WHERE user_id  = $user_id " ;
  $insert_query  = mysqli_query($connection,$query);
  if (!$insert_query ) {
    die("QUERY FAILED".mysqli_error($connection));
 }
}



























?>