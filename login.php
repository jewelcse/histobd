<!-- connection to db -->

<?php include "templates/db.php" ; ?>


<!-- header -->
<?php include  "templates/header.php" ?>
<!-- navigation bar -->

<?php include  "templates/navigation.php" ; ?>

<!-- <script src="loginScript.js"></script> -->

<!-- CUSTOM CSS -->

<link rel="stylesheet" href="css/style.css">

<style type="text/css">
  h2 {
    text-align: center;
    text-decoration-line: underline;
  }
</style>

<div class="container" id="loginDIv">
  <div class="row">
    <div class="col-md-4 col-md-offset-4 large_padding">
      <h2 class="text-capitalize">login form</h2>
      <div class="sign_up_form large_padding2">

        <form action="" method="post">
          <div class="">
            <div class="form-group">
              <label for="user_name">User Name</label><small style="color: red">* requires</small>
              <input type="text" class="form-control" id="login-user-name" name="username"
                placeholder="Enter your user name...">
              <p id="username-error-msg" style="color:red"></p>
            </div>
          </div>

          <div class="">
            <div class="form-group">
              <label for="password">Password</label><small style="color: red">* requires</small>
              <input type="password" class="form-control" id="login-user-password" name="user_password"
                placeholder="Enter your password...">
              <p id="userpassword-error-msg" style="color:red"></p>

            </div>
          </div>

          <input type="button" class="btn btn-primary" id="login-button" value="Login">
          <p id="login_msg"></p>
          <p id="login_error_msg" style="color:red"></p>
          <p id="success_msg"></p>
        </form>

      </div>
      <!---/.sign_up_form -->
<div class="fpass">
<h5><a href="fpass.php">Forgot Password ? </a></h5>
</div>
      <div>
        don't have an account?<small><a href="sign_up.php">Create an account</a></small>
      </div>
    </div>
    <!---/.col-md-offset-3 col-md-6 col-md-offset-3-->
  </div>
  <!---/.row-->


</div>
<!---/.container-->

<script src="js/jquery.js"></script>
<script>


  $(document).ready(function () {

    $('#login-button').click(function () {
      var userName = $('#login-user-name').val();
      var userPass = $('#login-user-password').val();
      $('#login-button').hide();
      $('#login_msg').html("<img src='images/loder.gif'>");

      if (userName == '' || userPass == '') {
        $('#login_error_msg').text("Please Enter your Username and Password");
        $('#login-button').show();
        $('#login_msg').hide();
        // location.href = "login.php";
      }
      else {
        $.post("loginAction.php", { userName: userName, userPass: userPass }, function (data) {

          $('#success_msg').html(data);

          location.href = "index.php";
         
        });

        // $.ajax({
        //   url:'loginAction.php',
        //   type:'post',
        //   data:{
        //     userName: userName, 
        //     userPass: userPass
        //   }
        //   success:function(data){
        //     console.log(data);
        //   }
        // });
      }
    });
  });








</script>

<!--  footer  -->


<?php include "templates/footer.php" ?>

<!--  /.footer  -->