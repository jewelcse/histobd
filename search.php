  <!-- header -->

<?php include  "templates/header.php" ?>

  <!-- navigation bar -->
  
<?php include  "templates/navigation.php" ?>
   
<style type="text/css">
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
h2.input-result {
    -webkit-animation: shake .8s linear;
    -moz-animation: shake .8s linear;
    animation: shake .8s linear;
    text-align: center;
    padding: 200px 0;
    text-transform: capitalize;
    margin-top: 10px;
}
h2 small{
    display: block;
    margin-bottom: 10px;
}
</style>
            
  

                      <?php 

                      ///////search query///////

                      if (isset($_GET['place_id'])) {

                      $place_id =  $_GET['place_id'];


                      }

                                        
                      if (isset($_POST['submit'])) {

                        $search =  $_POST['search'];

                        if (empty($search)) {

                          echo "<h2 class='input-result'><small>NO Input!!!!</small>please input some values</h2>";
                          
                        }
                      else{
                        $query = "SELECT * FROM places WHERE place_tags LIKE '%$search%' ";

                        $search_query = mysqli_query($connection,$query);


                        if (!$search_query) {
                           
                           die("query faild" . mysqli_error($connection));
                        }

                        $count = mysqli_num_rows($search_query);

                        if ($count == 0) {
                            
                      ?>
                            <div class="noResultDialog">
                              <div class="container">

                                <!-- 404 page -->
                             <?php include"404.php"; ?>


                              </div>
                            </div>
                      <?php
                        }
                        else{

                      while ($row = mysqli_fetch_assoc($search_query))
                      {
                      $the_place_id = $row['place_id'];   
                      $place_title = $row['place_title'];
                      $added_date = $row['added_date'];
                      $place_image = $row['place_image'];
                     // $place_description = substr($row['place_description'],0, 30);

                      ?>

               <div class="container">
                 <div class="row">
                  <div class="col-md-offset-3 col-md-6 ">


                <h2>
                    <a href="place.php?place_id=<?php  echo $the_place_id ?>"><?php  echo $place_title ?></a>
                </h2>
            
               

                <hr>

                 <a href="place.php?place_id=<?php  echo $the_place_id ?>">
                    <img class="img-responsive img-thumbnail" src="images/<?php echo $place_image ?>" 
                    alt="image">
               </a>
                
                <hr>

               <!-- <p><?php //echo $place_description ?></p>-->
                <a class="btn btn-primary" href="place.php?place_id=<?php  echo $the_place_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>





                  </div>
                 </div>
               </div>
               
<?php 

    }//closed while loop

  }//closed  second else condition

}//closed first else condition

}//close post function

?>     

        <hr>
        
<!--  footer  -->
       
       
<?php include "templates/footer.php" ?>

<!--  /.footer  -->