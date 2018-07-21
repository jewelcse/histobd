  <!-- header -->

<?php include  "templates/header.php" ?>

  <!-- navigation bar -->
<?php include  "templates/navigation.php" ?>
   

    <!-- Page Content -->

    
    <div class="container">
       
        <div class="row">
                            
                            

                <?php 
                ////////getting places by category by their category id/////////////
                if (isset($_GET['place_by_category'])) {
                   
                    $place_cat_by_id = $_GET['place_by_category'] ; 

                    $query = "SELECT * FROM categories WHERE cat_id = '{$place_cat_by_id}' ";

                    $select_category =  mysqli_query($connection,$query);


                    while ($row = mysqli_fetch_assoc($select_category) )
                {
                   

                $cat_title = $row['cat_title'];

                ?>

            <div class="col-md-12">
                <h1 class="page-header">
                    <?php echo $cat_title;  ?>

                <?php 

                $query = "SELECT * FROM places  WHERE  place_cat_id = '{$place_cat_by_id}' ";
                $select_num_of_places = mysqli_query($connection,$query);
                $number_of_items = mysqli_num_rows( $select_num_of_places);

                ?>
                                    <small><?php echo $number_of_items." "."places here";  ?></small>
                                </h1>  <!-- /.page-header -->
                            </div>  <!-- /.col-md-12 -->


                <?php 

                }

                }

                $query = "SELECT * FROM places  WHERE  place_cat_id = '{$place_cat_by_id}' ";

                $select_all_places = mysqli_query($connection,$query);

                while ($row = mysqli_fetch_assoc($select_all_places) )
                {
                   
                $the_place_id = $row['place_id'];
                $place_title = $row['place_title'];
                $added_date = $row['added_date'];
                $place_image = $row['place_image'];
                //$place_description = substr($row['place_description'], 0,150);

                ?>

            <div class="col-md-4 col-xs-6">
                

                
                
            
                <hr>
            <a href="place.php?place_id=<?php  echo $the_place_id ?>">
                <img class="img-responsive" src="images/<?php echo $place_image ?>" alt="">
				<h3 class="cat_h"><?php echo $place_title ?></h3>
            </a>
               <!--  <p>added date <span class="glyphicon glyphicon-time"></span><?php  echo $added_date ?></p>
                <p><?php //echo $place_description ?></p>-->
                <a class="btn btn-primary cat_btn" href="place.php?place_id=<?php  echo $the_place_id ?>">Read More <span class="cat_icon glyphicon glyphicon-chevron-right"></span>
                </a>

                <hr>
                </div><!-- /.col-md-offset- col-lg-3 col-md-3 col-xs-6 col-md-offset- -->

  <?php  }  ?>

                
            
          


           </div><!-- /.row -->
           

        </div><!-- /.container-default -->
        

        <hr>
        
<!--  footer  -->
       
       
<?php include "templates/footer.php" ?>

<!--  /.footer  -->