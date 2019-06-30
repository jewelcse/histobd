<?php

include "templates/db.php";

if(isset($_POST['userId'])){
    $the_user_id = $_POST['userId'];
    $query = "SELECT * FROM users WHERE user_id = '{$the_user_id}'";
    $select_user_profile_details = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_array($select_user_profile_details)) {
              	
              	
    $user_id  = $row['user_id'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_name = $row['username'];
    $user_image = $row['user_image'];
    $user_email = $row['user_email'];
    $user_gender = $row['user_gender'];
    $user_country = $row['user_country'];
    
    }
}
































?>