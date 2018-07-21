<!--  calling function -->

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

<?php 

if (isset($_GET['source'])) {

$source = $_GET['source'];


}


switch ($source) {

   /* case 'add_places':
        
        include "includes/add_places.php";
        break;
    case 'edit_place':
        
        include "includes/edit_place.php";
        break;  */  
    
    default:
        include "includes/view_all_comments.php";
        break;

}



?>
                </div>
                <!-- /.row -->

             </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include("includes/admin_footer.php"); ?>
