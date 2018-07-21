 
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

                            if (isset($_POST['craete_account'])) {

                             $first_name = $_POST['user_firstname'];
                             $last_name =  $_POST['user_lastname'];
                             $user_name =  $_POST['username'];
                             
                            


                            $image = $_FILES['user_image']['name'];
                            $image_temp = $_FILES['user_image']['tmp_name'];



                            move_uploaded_file($image_temp, "images/$image");

                             $email =  $_POST['user_email'];
                             $password =  $_POST['user_password'];
                             $gender =  $_POST['user_gender'];
                             $country =  $_POST['user_country']; 


                             $first_name = mysqli_real_escape_string($connection,$first_name);
                             $last_name = mysqli_real_escape_string($connection,$last_name);
                             $user_name = mysqli_real_escape_string($connection,$user_name);
                             $email = mysqli_real_escape_string($connection,$email);
                             $password = mysqli_real_escape_string($connection,$password);
                             $gender = mysqli_real_escape_string($connection,$gender);
                             $country = mysqli_real_escape_string($connection,$country); 


                            $first_name_min_char = 3;
                            $first_name_max_char = 15;

                            $last_name_min_char = 3;
                            $last_name_max_char = 15;




                            if (strlen($first_name) < $first_name_min_char) {
                                
                                echo "<div class='alert alert-danger'>First Name can't less than"." ". $first_name_min_char ." "."characters";

                             } 

                             if (strlen($first_name) > $first_name_max_char) {
                                
                                echo "<div class='alert alert-danger'>First Name can't greater than"." ". $first_name_max_char ." "."characters";

                             } 
                             if (strlen($last_name) < $last_name_min_char) {
                                
                                echo "<div class='alert alert-danger'>last Name can't less than"." ". $last_name_min_char ." "."characters";

                             } 

                             if (strlen($last_name) > $last_name_max_char) {
                                
                                echo "<div class='alert alert-danger'>last Name can't greater than"." ". $last_name_max_char ." "."characters";

                             } 

                            $query = "INSERT INTO users(user_id,user_firstname,user_lastname,username,user_image,user_email,user_password,
                                      user_gender,user_country) ";
                            $query .=" VALUES ('','{$first_name}','{$last_name}','{$user_name}','$image','{$email}','{$password}',
                                     '{$gender}','{$country}') ";



                            $user_insert_query = mysqli_query($connection,$query);



                            if (!$user_insert_query) {
                               
                            echo ("QUERY FAILED".mysqli_error($connection));

                            }

                            else{


                                echo "<div class='alert alert-success cirlce'><h1>Successfuly registered!!!</h1></div>";

                            ?>

                             <a href="index.php">go to home page</a>

<?php } } ?>

<div class="container">
		<div class="sign_up_header">
            <h2>Registration Form</h2>
        </div><!--/-->
    <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <div class="sign_up_form">

                    <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8"> 
                        <div class="">
                           <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control"   name="user_firstname" placeholder="Enter your first name..." >
                           </div>
						   <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="user_lastname" placeholder="Enter your last name..." >
                           </div>
							<div class="form-group">
                                <label for="user_name">User Name</label><small style="color: red">* requires</small>
                                <input type="text" class="form-control" name="username" placeholder="Enter your user name..." >
                            </div>
                             <div class="form-group">
                                <label for="first_name">Image</label>
                                <input type="file" class="form-control"   name="user_image" >
                           </div>
							<div class="form-group">
                                    <label for="email">Email</label><small style="color: red">* requires</small>
                                    <input type="email" class="form-control" name="user_email" placeholder="Enter your email..." >
                               </div>
							   <div class="form-group">
                                    <label for="password">Password</label><small style="color: red">* requires</small>
                                    <input type="password" class="form-control" name="user_password" placeholder="Enter your password..." >
                               </div>
							    <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="radio"  name="user_gender" value="male">Male</input>
                            <input type="radio"  name="user_gender" value="female">Female</input>
                            <input type="radio"  name="user_gender" value="others">others</input>
                       </div> 
					   <div class="select_country form-group"> 
                        <label>Select your Country : </label>
                        <select name="user_country">
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Australia">Australia</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Canada">Canada</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Egypt">Egypt</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                           
                        </select>

                    </div>
						<div class="form-group">
						<button type="submit" class="btn btn-primary create_acc" name="craete_account">Create Account</button>
						</div>
						<a href="login.php">back</a></span>
						</div>
                    </form>

              </div><!--./sign_up_form-->
        </div><!--/.col-md-offset-3 col-md-6 col-md-offset-3-->
        
    </div><!--/.row-->

</div><!--/.container-->



  
         
<!--  footer  -->
       
       
<?php include "templates/footer.php" ?>

<!--  /.footer  -->