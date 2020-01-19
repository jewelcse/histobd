


<!--Header section -->

<?php include("includes/admin_header.php") ;?>
<?php include("functions.php") ;?>

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
                            
                            <div class="show_time">
                                
                            <?php  show_current_time(); ?>
                                
                            </div>
                        </h1>
                      
                    </div>

               
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">


<?php 


$query = "SELECT * FROM places";

$select_all_place_query = mysqli_query($connection,$query);

$total_place =  mysqli_num_rows($select_all_place_query);


echo "<div class='huge'>{$total_place}</div>";
?>


                  
                        <div>Total places</div>
                    </div>
                </div>
            </div>
            <a href="places.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
<?php 


$query = "SELECT * FROM comments";

$select_all_comment_query = mysqli_query($connection,$query);

$total_comment =  mysqli_num_rows($select_all_comment_query);


echo "<div class='huge'>{$total_comment}</div>";
?>



                     
                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

<?php 


$query = "SELECT * FROM users";

$select_all_user_query = mysqli_query($connection,$query);

$total_user =  mysqli_num_rows($select_all_user_query);


echo "<div class='huge'>{$total_user}</div>";
?>
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">


<?php 


$query = "SELECT * FROM categories";

$select_all_category_query = mysqli_query($connection,$query);

$total_category =  mysqli_num_rows($select_all_category_query);


echo "<div class='huge'>{$total_category}</div>";
?>

                        
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>

                </div>
                <!-- /.row -->

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
      ['Data','Count'],

<?php 


$set_element = ['Places','Categories','Users','Comments'];

$total_number  = [$total_place,$total_category,$total_user,$total_comment];



for($i=0 ;$i<4;$i++) {


echo "['$set_element[$i]'".","."$total_number[$i]],";
   
}

?>


        
         
          
        ]);

        var options = {
          chart: {
            title: 'histoBd.com',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>



<div id="columnchart_material" style="width: auto; height: 500px;"></div>






</div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include("includes/admin_footer.php");?>

