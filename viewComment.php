<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php

include "templates/db.php";


$place_id =  $_POST['comment_place_id'];
// $place_id =  $_POST['dispalyComment'];

$query = "SELECT * FROM comments   WHERE comment_place_id  = '{$place_id}' ORDER BY  comment_id DESC" ; 
$select_all_comments = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($select_all_comments) )
{ 
    $the_user_id = $row['user_id'];
    $comment_date = $row['comment_date'];
    $comment_content = $row['comment_content']; 
    
?>


<?php 
    $username = "";
    $users_query = "SELECT * FROM users WHERE user_id = '{$the_user_id}'";
    $select_all_commented_users = mysqli_query($connection,$users_query);
    while($row = mysqli_fetch_assoc($select_all_commented_users))
    {
        $user_id = $row['user_id'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $username = $row['username'];
        $user_image_name = $row['user_image'];
    }
    
    ?>


<div class="row mt-5">
    <div class="col-sm-2">
        <div class="thumbnail">
            <img class="img-responsive user-photo" src="images/<?php echo $user_image_name; ?>">
        </div><!-- /thumbnail -->
    </div><!-- /col-sm-1 -->

    <div class="col-sm-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong><?php  echo $username ; ?></strong>
                <span class="text-muted"> commented in <i class="far fa-clock"></i> <?php echo $comment_date ; ?></span>
            </div>
            <div class="panel-body" id="main-content">
                <?php echo $comment_content ;?>
            </div><!-- /panel-body -->
        </div><!-- /panel panel-default -->


        <!-- <button type="submit" class="btn btn-primary" id="reply-button">Reply</button>

        <form action="" method="post" id="reply-form">
            <textarea name="" id="" cols="5" rows="5" class="form-control"></textarea>
        </form> -->

    </div><!-- /col-sm-5 -->
</div>



<?php } ?>



<script>
    // $(document).ready(function () {

    //     $("#reply-button").click(function () {
    //         $('#reply-form').hide();
    //     });
   
    // }

</script>