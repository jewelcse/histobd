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
            <!-- <img src="images/<?php //echo $user_image ;?>" style="height: 230px; width: auto; margin-top: 50px;"
              class="img-thumbnail img-responsive" alt="user_photo"> -->
          </div>
          <!--/.profile_picture-->
          <div class="user_info">
            <h3>login information</h3>
            <hr>
            <p id="update-info" style="color:green"></p>
            <form action="" method="post">
              <div class="form-group">
                <div class="user-firstname"><label for="user_firstname">Firstname :</label>
                  <input type="text" class="form-control" name="user_firstname" id="user_firstname"
                    value="<?php echo $user_firstname ; ?>"><button id="update-user-firstname"
                    class="update-btn btn btn-default">Update</button>
                </div>
              </div>
              <div class="form-group">
                <div class="user-lastname"><label for="user_lastname">Lastname :</label>
                  <input type="text" class="form-control" name="user_lastname" id="user_lastname"
                    value="<?php echo $user_lastname ; ?>"><button id="update-user-lastname"
                    class="update-btn btn btn-default">Update</button>
                </div>
              </div>
              <div class="form-group">
                <div class="user-name"><label for="user_name">Username :</label>
                  <input type="text" class="form-control" name="username" id="username"
                    value="<?php echo $user_name ; ?>"><button id="update-user-name"
                    class="update-btn btn btn-default">Update</button>
                </div>
              </div>
              <div class="form-group">
                <div class="user-email"><label for="user_email">Email :</label>
                  <input type="text" class="form-control" name="user_email" id="user_email"
                    value="<?php echo $user_email ; ?>"><button id="update-user-email"
                    class="update-btn btn btn-default">Update</button>
                </div>
              </div>
              <input type="hidden" id="user-id" value="<?php echo $user_id ; ?>">

            </form>

          </div>
        </div>
        <!--/.user_profile-->




        <div class="update_profile">

        </div>
        <!--/.update_profile-->
      </div>
      <!--/.profile-->

      <?php } ?>
    </div>
    <!--/.col-md-offset-2 col-md-8-->
  </div>
  <!--/.row-->
</div>
<!--/.container-->

<script>
  $(document).ready(function () {
    var id = $('#user-id').val();
    console.log(id);
    //displayUserProfile();

    // updating user-first-name
    $('#update-user-firstname').on('click', function () {
      var Fname = $('#user_firstname').val();
      console.log(Fname);
      $.ajax({
        url: "users_profile_update.php",
        type: "POST",
        cache: false,
        data: {
          userId: id,
          userFname: Fname
        },

        success: function (data) {
          //location.href = "users.php?user_id="+id;
         $('#update-info').html("Updated Firstname");
         
        }
      });
    });

      // update-user-lastname
      $('#update-user-lastname').on('click', function () {
      var Lname = $('#user_lastname').val();

      $.ajax({
        url: "users_profile_update.php",
        type: "POST",
        cache: false,
        data: {
          userId: id,
          userLname: Lname
        },

        success: function (data) {
          // if(!data.error){
          //   $('#user_firstname').html(data);
          // }
          $('#update-info').html("Updated Successfully");

        }
      });
    });

      // update-user-name
      $('#update-user-name').on('click', function () {
      var username = $('#username').val();

      $.ajax({
        url: "users_profile_update.php",
        type: "POST",
        cache: false,
        data: {
          userId: id,
          username: username
        },

        success: function (data) {
          // if(!data.error){
          //   $('#user_firstname').html(data);
          // }
          $('#update-info').html("Updated Successfully");

        }
      });
    });

      // update-user-email
      $('#update-user-email').on('click', function () {
      var email = $('#user_email').val();

      $.ajax({
        url: "users_profile_update.php",
        type: "POST",
        cache: false,
        data: {
          userId: id,
          email: email
        },

        success: function (data) {
          // if(!data.error){
          //   $('#user_firstname').html(data);
          // }
          $('#update-info').html("Updated Successfully");

        }
      });
    });

    // function displayUserProfile(){

    //   $.ajax({
    //     url:"viewUserProfilephp",
    //     type:"post",
    //     cache:false,
    //     data:{
    //       userId:1
    //     },
    //     success:function(data){
          
    //     }
    //   })
    // }





    
  });

</script>


<!--  footer  -->


<?php include "templates/footer.php" ?>

<!--  /.footer  -->