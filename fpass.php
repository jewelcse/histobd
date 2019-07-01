<!-- connection to db -->

<?php include "templates/db.php" ; ?>


<!-- header -->
<?php include  "templates/header.php" ?>
<!-- navigation bar -->

<?php include  "templates/navigation.php" ; ?>


<?php


if(isset($_POST['fpass']))
{
    $user_email = $_POST['user_emal'];
    $sql = "SELECT * FROM users where user_email='" . $user_email . "'";
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result) > 0 ){
    
        $row = mysqli_fetch_array($result);
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_pass = $row['user_password'];
        $user_email = $row['user_email'];
        
    }
    
    $to = $user_email;
    $subject = "Get your password";
    $txt = "From histobd : Your username is : ".$username." and password is : ".$user_pass;

    if(mail($to,$subject,$txt)){
        echo "<h3>Mail successfully send!!!! <a href='login.php'>   login page </a></h3>";
    }
    else{
        echo "<scritp>alert('Invalid Email .....');</script>";
    }
    
}

?>
<!DOCTYPE HTML>
<html>

<head>
    <style>
        body{
            box-sizing: border-box;

        }
    .fpass{
        text-align: center;
        margin-top: 150px;
        border: 2px solid black;
        padding: 5px;
    }
    
    
    </style>
  
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="fpass">
                <h1>Forgot Password<h1>
                        <form action='' method='post'>
                            <input type="email" name="user_emal" placeholder="send email"><br>
                            <input type="submit" class="btn btn-primary" name="fpass" value="submit">
                           
                        </form>
            </div>
        </div>
    </div>
</body>

</html>