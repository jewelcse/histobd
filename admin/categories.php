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
                        <div class="col-xs-6">

<!--////////insert category in database///////-->
<?php insert(); ?>
                        	<form action="" method="post" >
                        		<div class="form-group">
                        			<label>Add category</label>
                        			<input  class= "form-control" type="text" name="cat_title">
                        		</div>
                        		<div class="form-group">
                        			<input class="btn btn-primary" type="submit" name="submit" value="Add category">
                        		</div>
                        	</form>
<!--////////updating categories///////////-->
<?php update_categories(); ?>

 </div>
        <div class="col-xs-6" >
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<!--<th>id</th>-->
						<th>Category_title</th>
						<th>Edit</th>
                        <th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<tr>

<!--/////selecting categories from db to categories.php////-->
<?php selece_all_categories(); ?> 
<!--////////deleting categories query ///////-->
<?php delete_categories(); ?>

									</tr>
								</tbody>
							</table>
                        	
                        </div>
                      
                    </div>
                </div>
                <!-- /.row -->

             </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include("includes/admin_footer.php"); ?>
