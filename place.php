  <!-- header -->

<?php include  "templates/header.php" ?>

  <!-- navigation bar -->

<?php include  "templates/navigation.php" ?>
   <style type="text/css">
       
       .reply-form{
            display: none;
       }

       h2.place-title {
    /* padding-top: 23px; */
    margin: 0px;
    padding: 0px;
    padding-top: 2px;
}
   </style>

    <!-- Page Content -->
    <div class="container">
        <div class="row">                
                    <?php 

                    if (isset($_GET['place_id'])) {

                    $place_id =  $_GET['place_id'];


                    }
                    $query = "SELECT * FROM places WHERE place_id = '{$place_id}' ";

                    $select_all_places = mysqli_query($connection,$query);

                    while ($row = mysqli_fetch_assoc($select_all_places) )
                    {
                    $the_place_id =$row['place_id']; 
                    $place_title = $row['place_title'];
                    $added_date = $row['added_date'];
                    $place_image = $row['place_image'];
                    $place_description = $row['place_description'];
                    $place_location = $row['place_location'];

                    ?>
        
        <!--show all places by their uniqe place_id--> 
                <div class="col-md-offset-1 col-md-10">
                     <h2 class="place-title">
                        <?php  echo $place_title ?>
                    </h2>
                    

                 <img style="width: 100%" class="place_photo img-responsive pull-right img-thumbnail" src="images/<?php echo $place_image ?>" alt="image">
                   
                    <h4 class="" class="page-header" >
                        
                    </h4>
                    <hr>
             </div>


              <div class="col-md-offset-1 col-md-10">
                <div class="galleryImage">
                <blockquote>
                    <p>Description : </p>

                    <small><?php echo $place_description; ?></small>

                </blockquote>


                                

                <blockquote>
                    <p>Location-Map : </p>
                
                                
                         <?php echo $place_location; ?>
                       </blockquote>
                                
                                

                                
                                <hr>



                <!-- Comments Form -->

            <div class="">
                <h4>Leave a Comment:</h4>
                <form action="" method="post"> 
                    <div class="form-group">
                        <textarea  name="comment_content" class="form-control" rows="7" placeholder="Enter your comments....." ></textarea>
                    </div>
                    <button type="submit"  class="btn btn-primary" name="create_comment">submit</button>
                </form>
            </div>



                            <!--query for sending comments in database-->


                              <?php


                            if (isset($_POST['create_comment'])) {
                               
                            $comment_place_id = $_POST['create_comment'] ;

                            $place_id =  $_GET['place_id'];


                             $comment_user_id = $_SESSION['user_id']; 
                             $comment_content = $_POST['comment_content'] ; 

                             if (!$comment_user_id ==0) {
                               
                            $query = "INSERT INTO comments(comment_id,comment_place_id,user_id,comment_date,comment_content) ";
                            $query .= "VALUES('','$place_id','$comment_user_id',now(),'$comment_content')";

                            $comment_insert_query  = mysqli_query($connection,$query);

                            if (!$comment_insert_query) {
                               
                               die("QUERY FAILED".mysqli_error($connection));
                            }



                            $query = "UPDATE places SET  place_comment_count = place_comment_count+1 ";
                            $query .="WHERE place_id = '{$place_id}' ";

                            $update_comment_count  = mysqli_query($connection,$query);


                            /*
                            else{

                              echo "<div class='alert alert-success'>Posted your commented successfully</div>";
                            }*/

                            }
                            else
                            {
                                
                            }

                            }

                            ?>




                                <!--query for getting comments in web page-->
                            <?php 

                            $place_id =  $_GET['place_id'];

                            $query = "SELECT * FROM comments   WHERE comment_place_id  = '{$place_id}' ORDER BY  comment_id DESC" ; 


                            $select_all_comments = mysqli_query($connection,$query);

                            ?>
                            <?php 

                            $count = mysqli_num_rows($select_all_comments);


                            ?>


                            <span class="badge"><?php echo $count; ?></span> Comments :

                            <hr>
                            <?php 

                            if ($count == true) {
                               

                            while ($row = mysqli_fetch_assoc($select_all_comments) )
                            {
                             

                             $the_user_id = $row['user_id'];
                             $comment_date = $row['comment_date'];
                             $comment_content = $row['comment_content'];


                            ?>

                            <!--show comments in web page-->

                            <div class=""><strong>Commented by</strong>

                            <p>
                                <big><span class="glyphicon glyphicon-user">
                                    

                            <?php 



                            $query = "SELECT * FROM users WHERE user_id = '{$the_user_id}' ";

                            $select_username = mysqli_query($connection,$query);


                            while($row = mysqli_fetch_array($select_username))
                            {

                            $commented_user_name = $row['username'];

                            }


                            ?>

                     </span> <?php echo $commented_user_name ; ?></big> 
                    <small class="float_times">
                       at <span class="glyphicon glyphicon-time"> </span><?php echo $comment_date ; ?>
                    </small>
            <p>

                <?php echo $comment_content ; ?>


            </p>

            </p>
            <div class="form-group">
                <textarea class="reply-form" rows="6" placeholder="reply here..."></textarea>
            </div>
<button class="reply-btn">reply</button>



            </div>


 

<!-- closed for second loop -->
    <?php } } ?>
<!--closed for first loop -->
     <?php  } ?>   

            </div>
        </div>
</div>

</div>     
<!--  footer  -->
       
       
<?php include "templates/footer.php" ?>

<!--  /.footer  -->