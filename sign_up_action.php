<?php

include "templates/db.php" ;

if(isset($_POST['signUp'])){
    $user_name =  $_POST['userName'];
    $email =  $_POST['userEmail'];
    $password =  $_POST['userPassword'];
    //$userImage =  $_POST['userImage'];

    // $image = $_FILES['userImage']['name'];
    // $image_temp = $_FILES['userImage']['tmp_name'];

    // move_uploaded_file($image_temp, "images/$image");

    $user_name = mysqli_real_escape_string($connection,$user_name);
    $email = mysqli_real_escape_string($connection,$email);
    $password = mysqli_real_escape_string($connection,$password);

    $query = "INSERT INTO users(user_id,username,user_email,user_password) ";
    $query .=" VALUES ('','{$user_name}','{$email}','{$password}') ";
    $user_insert_query = mysqli_query($connection,$query);
    if (!$user_insert_query) {
        echo ("QUERY FAILED".mysqli_error($connection));
    }

}


// if(!empty($_POST['username']) || !empty($_POST['user_email']) || !empty($_FILES['user_image']['name'])){
//     $uploadedFile = '';
//     if(!empty($_FILES["user_image"]["type"])){
//         $fileName = time().'_'.$_FILES['user_image']['name'];
//         $valid_extensions = array("jpeg", "jpg", "png");
//         $temporary = explode(".", $_FILES["user_image"]["name"]);
//         $file_extension = end($temporary);
//         if((($_FILES["hard_file"]["type"] == "image/png") || ($_FILES["user_image"]["type"] == "image/jpg") || ($_FILES["user_image"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
//             $sourcePath = $_FILES['user_image']['tmp_name'];
//             $targetPath = "images/".$fileName;
//             if(move_uploaded_file($sourcePath,$targetPath)){
//                 $uploadedFile = $fileName;
//             }
//         }
//     }
    
//     $name = $_POST['username'];
//     $email = $_POST['user_email'];
//     $password = $_POST['user_password'];
    
//     $query = "INSERT INTO users(user_id,username,user_image,user_email,user_password) ";
//     $query .=" VALUES ('','{$name}','$uploadedFile','{$email}','{$password}') ";
    
//     // //insert form data in the database
//     // $insert = $db->query("INSERT form_data (name,email,file_name) VALUES ('".$name."','".$email."','".$uploadedFile."')");
    
//     echo $query?'ok':'err';
// }


?>