
$(document).ready(function() {
    $('#login-button').click(function () {
      $('#login-button').hide();
      $('#login_msg').html("<img src='images/loder.gif'>");

      var userName = $('#login-user-name').val();
      var userPass = $('#login-user-password').val();

      if(userName.length == 0 || userPass == 0){
        alert("Plz enter username and password");
      }
        else{
          $.post("loginAction.php", { userName: userName, userPass: userPass },function (data) {
            if (data == "success") {
              location.href = "index.php"
              return false;
            }
            else {
              //alert("Invalid Username or password !!");
              $('#login_msg').text("Invalid Username or password !!!");
              $('#login-button').show();
            }
          });
        }
    });
  });
