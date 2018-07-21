
<?php include "functions.php" ; ?>
<!--Header section -->

<?php include("includes/admin_header.php") ;?>


    <div id="wrapper">

        <!-- Navigation -->

<?php include("includes/admin_navigation.php") ;?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome
                            <small>author</small>
                            <div class="show_time">
                                
                            <?php  show_current_time(); ?>
                                
                            </div>
                        </h1>
                       
                      
                    </div>


<a href="users.php">back</a>
<hr>


<?php 


if (isset($_GET['user_profile_no'])) {
	

   $user_profile_id  = $_GET['user_profile_no'];



}

$query = "SELECT * FROM users WHERE user_id  = '{$user_profile_id}' " ;

$select_user_profile  = mysqli_query($connection,$query);

if (!$select_user_profile) {
	

	die("QUERY FAILED".mysqli_error($connection));
}
else{

while($row  = mysqli_fetch_assoc($select_user_profile))
{



//echo $user_id = $row['user_id'];
echo $user_firstname = $row['user_firstname'];
echo $user_lastname = $row['user_lastname'];
echo $username = $row['username'];
echo $user_email = $row['user_email'];
echo $user_gender = $row['user_gender'];
echo $user_country = $row['user_country'];


}




}














?>


</div>
<!--/.row-->
</div>
<!--/.container-fluid-->
</div>
<!--/.page-wrapper-->
</div>
<!--/.wrapper-->
