<!-- connection to db -->

<?php include "templates/db.php" ; ?>

<!-- header -->

<?php include  "templates/header.php" ; ?>

<!-- navigation bar -->

<?php include  "templates/navigation.php" ; ?>

<!-- Custom CSS -->

<link rel="stylesheet" href="css/style.css">


<style type="text/css">
    h2 {
        text-align: center;
        text-decoration-line: underline;
    }
</style>


<?php


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






// if(isset($_POST['signUp'])){
//     $user_name =  $_POST['userName'];
//     $email =  $_POST['userEmail'];
//     $password =  $_POST['userPassword'];
//     //$userImage =  $_POST['userImage'];

//     $image = $_FILES['userImage']['name'];
//     $image_temp = $_FILES['userImage']['tmp_name'];

//     move_uploaded_file($image_temp, "images/$image");

//     $user_name = mysqli_real_escape_string($connection,$user_name);
//     $email = mysqli_real_escape_string($connection,$email);
//     $password = mysqli_real_escape_string($connection,$password);

//     $query = "INSERT INTO users(user_id,username,user_image,user_email,user_password) ";
//     $query .=" VALUES ('','{$user_name}','$image','{$email}','{$password}') ";
//     $user_insert_query = mysqli_query($connection,$query);
//     if (!$user_insert_query) {
//         echo ("QUERY FAILED".mysqli_error($connection));
//     }

// }


?>
<?php 

                            // if (isset($_POST['craete_account'])) {

                            //  $first_name = $_POST['user_firstname'];
                            //  $last_name =  $_POST['user_lastname'];
                            //  $user_name =  $_POST['username'];
                             
                            


                            // $image = $_FILES['user_image']['name'];
                            // $image_temp = $_FILES['user_image']['tmp_name'];



                            // move_uploaded_file($image_temp, "images/$image");

                            //  $email =  $_POST['user_email'];
                            //  $password =  $_POST['user_password'];
                            //  $gender =  $_POST['user_gender'];
                            //  $country =  $_POST['user_country']; 


                            //  $first_name = mysqli_real_escape_string($connection,$first_name);
                            //  $last_name = mysqli_real_escape_string($connection,$last_name);
                            //  $user_name = mysqli_real_escape_string($connection,$user_name);
                            //  $email = mysqli_real_escape_string($connection,$email);
                            //  $password = mysqli_real_escape_string($connection,$password);
                            //  $gender = mysqli_real_escape_string($connection,$gender);
                            //  $country = mysqli_real_escape_string($connection,$country); 


                            // $first_name_min_char = 3;
                            // $first_name_max_char = 15;

                            // $last_name_min_char = 3;
                            // $last_name_max_char = 15;




                            // if (strlen($first_name) < $first_name_min_char) {
                                
                            //     echo "<div class='alert alert-danger'>First Name can't less than"." ". $first_name_min_char ." "."characters";

                            //  } 

                            //  if (strlen($first_name) > $first_name_max_char) {
                                
                            //     echo "<div class='alert alert-danger'>First Name can't greater than"." ". $first_name_max_char ." "."characters";

                            //  } 
                            //  if (strlen($last_name) < $last_name_min_char) {
                                
                            //     echo "<div class='alert alert-danger'>last Name can't less than"." ". $last_name_min_char ." "."characters";

                            //  } 

                            //  if (strlen($last_name) > $last_name_max_char) {
                                
                            //     echo "<div class='alert alert-danger'>last Name can't greater than"." ". $last_name_max_char ." "."characters";

                            //  } 

                            // $query = "INSERT INTO users(user_id,user_firstname,user_lastname,username,user_image,user_email,user_password,
                            //           user_gender,user_country) ";
                            // $query .=" VALUES ('','{$first_name}','{$last_name}','{$user_name}','$image','{$email}','{$password}',
                            //          '{$gender}','{$country}') ";



                            // $user_insert_query = mysqli_query($connection,$query);



                            // if (!$user_insert_query) {
                               
                            // echo ("QUERY FAILED".mysqli_error($connection));

                            // }

                            // else{


                            //     echo "<div class='alert alert-success cirlce'><h1>Successfuly registered!!!</h1></div>";

                            ?>

<!-- <a href="index.php">go to home page</a> -->

<?php //} } ?>

<div class="container ">
    <div class="sign_up_header">
        <h2>Registration Form</h2>
    </div>
    <!--/-->
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="sign_up_form mb-4">

                <form id="signUpForm" name="signUpForm" enctype="multipart/form-data" accept-charset="utf-8">
                    <div class="">
                        <div class="form-group">
                            <label for="user_name">User Name</label><small style="color: red">* requires</small>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Enter your user name...">
                            <p id="username_error_msg" style="color: red"></p>

                        </div>
                        <!-- <div class="form-group">
                            <label for="first_name">Image</label>
                            <input type="file" class="form-control" id="user_image" name="user_image">
                        </div> -->
                        <div class="form-group">
                            <label for="email">Email</label><small style="color: red">* requires</small>
                            <input type="email" class="form-control" id="user_email" name="user_email" required
                                placeholder="Enter your email...">
                            <p id="user_email_error_msg" style="color: red"></p>

                        </div>
                        <div class="form-group">
                            <label for="password">Password</label><small style="color: red">* requires</small>
                            <input type="password" class="form-control" id="user_password" name="user_password"
                                placeholder="Enter your password...">
                            <p id="user_password_error_msg" style="color: red"></p>

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="submit" id="signUpButton" value="Signup">
                        </div>
                        <p id="statusMsg"></p>
                        <a href="login.php">back</a></span>
                    </div>
                </form>

            </div>
            <!--./sign_up_form-->
        </div>
        <!--/.col-md-offset-3 col-md-6 col-md-offset-3-->

    </div>
    <!--/.row-->

</div>
<!--/.container-->
<script>



// $(document).ready(function(e){
//     $("#signUpForm").on('submit', function(e){
//         e.preventDefault();
//         $.ajax({
//             type: 'POST',
//             url: 'sign_up_action.php',
//             data: new FormData(this),
//             contentType: false,
//             cache: false,
//             processData:false,
//             beforeSend: function(){
//                 $('#signUpButton').attr("disabled","disabled");
//                 $('#signUpForm').css("opacity",".5");
//             },
//             success: function(msg){
//                 $('.statusMsg').html('');
//                 if(msg == 'ok'){
//                     $('#signUpForm')[0].reset();
//                     $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Form data submitted successfully.</span>');
//                 }else{
//                     $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
//                 }
//                 $('#signUpForm').css("opacity","");
//                 $("#signUpButton").removeAttr("disabled");
//             }
//         });
//     });
    
//     //file type validation
//     $("#user_image").change(function() {
//         var file = this.files[0];
//         var imagefile = file.type;
//         var match= ["image/jpeg","image/png","image/jpg"];
//         if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
//             alert('Please select a valid image file (JPEG/JPG/PNG).');
//             $("#user_image").val('');
//             return false;
//         }
//     });
// });






    $(document).ready(function () {
        $('#signUpButton').click(function (e) {
            e.preventDefault();
            var userName = $('#username').val();
            var userEmail = $('#user_email').val();
            var userPassword = $('#user_password').val();
            var userImage = $('#user_image').val();
            if (userName.length == 0 || userEmail.length == 0 || userPassword.length == 0 ) {
                $('#statusMsg').text("Please fill out the username ,Email and passsword !!!");
                return false;
            }
            else {
                $.post("sign_up_action.php", {
                    signUp: 1,
                    userName: userName,
                    //userImage: userImage,
                    userEmail: userEmail,
                    userPassword: userPassword
                }, function (data) {
                    $('#statusMsg').text("Registeration success !!!!");
                    location.href = "login.php";
                });
               
            }
            return false;
        });
    });






</script>



<!--  footer  -->


<?php include "templates/footer.php" ?>

<!--  /.footer  -->