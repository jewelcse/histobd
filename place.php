<!-- header -->

<?php include  "templates/header.php" ?>

<!-- navigation bar -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php include  "templates/navigation.php" ?>
<style type="text/css">
    /* .row {
        margin-top: 30px;
    } */

    .reply-form {
        display: none;
    }

    h2.place-title {
        /* padding-top: 23px; */
        margin: 0px;
        padding: 0px;
        padding-top: 2px;
        margin-top: 30px;
        margin-bottom: 5px;
        box-sizing: border-box;
    }

    .place-photo {
        margin: 0px;
        max-height: 500px;
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
                    $place_address = $row['place_address'];
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
            <p id="place-address"><i class="fa fa-map-marker"> <?php  echo $place_address ?></i></p>


            <img style="width: 100%" class="place-photo img-responsive pull-right img-thumbnail"
                src="images/<?php echo $place_image ?>" alt="image">

            <h4 class="" class="page-header">

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


                    <?php echo $place_location;  } ?>
                </blockquote>




                <hr>



                <!-- Comments Form -->

                <div class="mb-5">
                    <h4>Leave a Comment:</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" id="commented_user_id" value="<?php 
                            if(isset($_SESSION['user_id'])){
                                echo $_SESSION['user_id'];
                            }
                             ?>">
                            <input type="hidden" id="comment_place_id" value="<?php echo $the_place_id; ?>">
                            <textarea id="comment_content" class="form-control" rows="7"
                                placeholder="Enter your comments....."></textarea>
                        </div>
                        <input type="button" class="btn btn-primary" id="submit" value="submit">
                    </form>
                    <p id="posted" class="bg-success"></p>
                    <p id="posted_fail" class="bg-danger"></p>
                </div>




                <!-- comment reply -->
                <div id="commentData"></div>

                <!-- comment reply end -->

            </div>
        </div>
    </div>
</div>
<!--  footer  -->


<script>

    $(document).ready(function () {
        dispalyComment();
        //insert comment to the databse
        $('#submit').click(function () {
            var comment_content = $('#comment_content').val();
            var commented_user_id = $('#commented_user_id').val();
            var comment_place_id = $('#comment_place_id').val();
            console.log(comment_content);
            console.log(comment_place_id);

            if (commented_user_id.length === 0) {
                // alert("plz login to comment!!");
                $('textarea#comment_content').val(" ");
                $('#posted_fail').html('plz login to comment!!');
                $('#posted_fail').fadeIn('slow', function () {
                    $('#posted_fail').delay(1500).fadeOut();
                });
            }
            else {
                if (!(comment_content.length === 0)) {
                    $.ajax({
                        url: "insertComment.php",
                        type: "POST",
                        cache: false,
                        data: {
                            comment_place_id: comment_place_id,
                            user_id: commented_user_id,
                            comment_content: comment_content
                        },
                        success: function (data) {
                            dispalyComment();
                            $('#posted').html('posted successfully !');
                            $('#posted').fadeIn('slow', function () {
                                $('#posted').delay(1500).fadeOut();
                            });
                            $('textarea#comment_content').val(" ");

                        }

                    });
                }
                else {
                    alert("plz comments somethings!!!!")
                }
            }




        });

        function dispalyComment() {
            var comment_place_id = $('#comment_place_id').val();
            $.ajax({
                url: "viewComment.php",
                type: "POST",
                cache: false,
                data: {
                    // dispalyComment:1,
                    comment_place_id: comment_place_id
                },
                success: function (data) {
                    $('#commentData').html(data);
                    //alert(data)
                }
            });
        }


    });



    // function dispalyCommentedUserName() {
    //     var commented_user_id = $('#commented_user_id').val();
    //     $.ajax({
    //         url: "viewComment.php",
    //         type: "POST",
    //         cache: false,
    //         data: {
    //             // dispalyComment:1,
    //             commented_user_id: commented_user_id
    //         },
    //         success: function (data) {
    //             $('#commentedUserData').html(data);
    //             //alert(data)
    //         }
    //     });
    // }



</script>

<?php include "templates/footer.php" ?>

<!--  /.footer  -->