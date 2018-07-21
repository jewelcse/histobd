  <!-- header -->

<?php include  "templates/header.php" ?>

  <!-- navigation bar -->

<?php include  "templates/navigation.php" ?>


<style type="text/css">
  
  input.update.form-control {
    width: 35%;
    float: right;
    margin-right: 10px;
}

.user_info {
    overflow: hidden;
}

.form-group {
    float: left;
    width: 50%;
    padding: 2px;
  }
  button.update-btn.btn.btn-default {
    margin: 0px;
    margin-top: 5px;
  }

   .error_img {
    width: 400px;
}

.error_img img {
    width: 100%;
}
.error_text small {
    font-size: 20px;
}
.noResultDialog {
    padding: 100px 0;
}
</style>



<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
    	
    		
    			

              <?php 

              if (isset($_GET['user_id'])) {
              	
              	$the_user_id = $_GET['user_id'];

                //echo $the_user_key ;
              }

              if ( $the_user_id == '') {
              	?>
                <div class="noResultDialog">
                              <div class="container">

                                <!-- 404 page -->
                             <?php include"404-user.php"; ?>


                              </div>
                            </div>

                            <?php
              	
              }


              else{

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

              ?>

          <div class="profile">
          	<div class="user_profile">
          			<div class="profile_picture">
          			<img src="images/<?php echo $user_image ;?>" style="height: 230px; width: auto; margin-top: 50px;" class="img-thumbnail img-responsive" alt="user_photo">
          			</div><!--/.profile_picture-->
						<div class="user_info">
              <h3>login information</h3><hr>

              <form action="" method="post">
                <div class="form-group">
                  <div class="user-firstname"><label for="user_firstname">Firstname :</label>
                      <input type="text" class="form-control" name="user_firstname" value="<?php echo $user_firstname ; ?>"><button name="update-user-firstname" class="update-btn btn btn-default">Update</button>
                    </div>
                  </div>
                    <div class="form-group">
                      <div class="user-lastname"><label for="user_lastname">Lastname :</label>
                          <input type="text" class="form-control" name="user_lastname" value="<?php echo $user_lastname ; ?>"><button name="update-user-lastname" class="update-btn btn btn-default">Update</button>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="user-name"><label for="user_name">Username :</label>
                      <input type="text" class="form-control" name="username" value="<?php echo $user_name ; ?>"><button name="update-user-name" class="update-btn btn btn-default">Update</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="user-email"><label for="user_email">Email :</label>
                      <input type="text" class="form-control" name="user_email" value="<?php echo $user_email ; ?>"><button name="update-user-email" class="update-btn btn btn-default">Update</button>
                    </div>
                  </div>

                      

                      

              </form>
                     
            </div>
            </div><!--/.user_profile-->

    	


              	<div class="update_profile">
              		
              	</div><!--/.update_profile-->
    	    </div><!--/.profile-->

    <?php } ?>
       </div><!--/.col-md-offset-2 col-md-8-->
   </div><!--/.row-->
</div><!--/.container-->


<?php


if (isset($_POST['update-user-firstname'])) {

  $first_name = $_POST['user_firstname'];
  $query  = "UPDATE users SET user_firstname = '$first_name' WHERE user_id  = $user_id " ;
  mysqli_query($connection,$query);

  //header("Location:users.php?user_id=$user_id");

}

if (isset($_POST['update-user-lastname'])) {
  $last_name = $_POST['user_lastname'];
  $query  = "UPDATE users SET user_lastname = '$last_name' WHERE user_id  = $user_id " ;
  mysqli_query($connection,$query);
 
}

if (isset($_POST['update-user-name'])) {
  $user_name = $_POST['username'];
  $query  = "UPDATE users SET username = '$user_name' WHERE user_id  = $user_id " ;
  mysqli_query($connection,$query);
 
}

if (isset($_POST['update-user-email'])) {
  
  $user_email = $_POST['user_email'];
  $query  = "UPDATE users SET user_email = '$user_email' WHERE user_id  = $user_id " ;
  mysqli_query($connection,$query);


}


?>


         
<!--  footer  -->
       
       
<?php include "templates/footer.php" ?>

<!--  /.footer  -->