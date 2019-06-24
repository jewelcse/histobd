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
                <strong><?php 
                if($username == ""){
                    echo "Guest User";
                }
                else{
                    echo $username ;
                }
                
                
                ?></strong> <span class="text-muted">commented in <i class="far fa-clock"></i> <?php echo $comment_date ; ?></span>
            </div>
            <div class="panel-body" id="commentData">
                <?php echo $comment_content ;?> 
            </div><!-- /panel-body -->
        </div><!-- /panel panel-default -->
    </div><!-- /col-sm-5 -->
</div>

<?php } ?>