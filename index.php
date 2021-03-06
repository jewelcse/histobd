<!-- header -->

<?php include  "templates/header.php" ?>

<!-- navigation bar -->
<?php include  "templates/navigation.php" ?>

<!-- Page Content -->
<style>
    body {
        box-sizing: border-box;
    }
</style>

<div id="home-carousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <ol class="carousel-indicators">
        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#home-carousel" data-slide-to="1"></li>
        <li data-target="#home-carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="single-header-carousel slider1">
                <div class="slider-overlay"></div>
                <div class="header-content-table">
                    <div class="header-content-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-left">
                                    <h4 class="wow animated fadeInDown" data-wow-delay=".3s" data-wow-duration=".6s">do
                                        u love travelling?</h4>
                                    <h1 class="wow animated fadeInUp" data-wow-delay=".45s" data-wow-duration="1s">
                                        histobd</h1>
                                    <h4 class="wow animated fadeInUp text-capitalize" data-wow-delay=".45s"
                                        data-wow-duration="1.2s">learn about your place</h4>
                                </div>
                            </div>
                            <!--END ROW-->
                        </div>
                        <!--END CONTAINER-->
                    </div>
                </div>
            </div>
            <!--END SINGLE-HEADER-CAROUSEL-->
        </div>
        <div class="item">
            <div class="single-header-carousel slider2">
                <div class="slider-overlay"></div>
                <div class="header-content-table">
                    <div class="header-content-table-cell">
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center">
                                <h1 class="wow fadeInUp animated" data-wow-delay=".45s" data-wow-duration="1s">welcome
                                    to histobd</h1>
                                <h4 class="wow fadeInUp animated text-capitalize" data-wow-delay=".45s"
                                    data-wow-duration="1.2s">have a nice time</h4>
                            </div>
                        </div>
                        <!--END CONTAINER-->
                    </div>
                </div>
            </div>
            <!--END SINGLE-HEADER-CAROUSEL-->
        </div>
        <div class="item">
            <div class="single-header-carousel slider3">
                <div class="slider-overlay"></div>
                <div class="header-content-table">
                    <div class="header-content-table-cell">
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center">
                                <h1 class="wow fadeInUp animated" data-wow-delay=".45s" data-wow-duration="1s">dream
                                    comes true</h1>
                                <h4 class="wow fadeInUp animated text-capitalize" data-wow-delay=".45s"
                                    data-wow-duration="1.2s">we are here for you</h4>
                            </div>
                        </div>
                        <!--END CONTAINER-->
                    </div>
                </div>
            </div>
            <!--END SINGLE-HEADER-CAROUSEL-->
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
        <span class="icon-next"></span>
    </a>
</div>

<div class="second-container">
    <div class="container">
        <!-- <div class="row" style="margin-bottom: 30px;"> -->

        <!-- <div class="quick-search" style="float:left;background-color: aquamarine" >
                <form action="" >
                        <input type="text" id="quick-search" class="form-control" placeholder="Quick Search..">
                        
                </form>
                
           </div> -->
        <!-- <ul>
               <li id="result"></li>
           </ul> -->
        <!-- <h4 id="result" class="float:right"></h4>
        </div> -->


        <div class="row">


            <!--  query for getting(showing) all places from db to web page  -->
            <?php 
            
// function title_slug($string){
//     $slug = preg_replace('/[^a-z0-9-]+/','-',strtolower($string));
//     return $slug;
// }

            $query = "SELECT * FROM places";

            $select_all_places = mysqli_query($connection,$query);

            while ($row = mysqli_fetch_assoc($select_all_places) )
            {

            $the_place_id = $row['place_id'];
            $place_title = $row['place_title'];
            $place_title_url =$row['place_title'];
            $added_date = $row['added_date'];
            $place_image = $row['place_image'];
            //$place_description = substr($row['place_description'],0,30);
            ////////substr is a function ,it is use for showing limited word in a line///////

            ?>
            <!--  showing places  -->

            <div class="col-lg-3 col-md-4">
                <div class="places_img">
                    <a href="place.php?place_id=<?php  echo $the_place_id ?>">
                        <div class="s_img">
                            <img height="450px" width="350px" class="img-responsive"
                                src="images/<?php echo $place_image ?>" alt="image">
                        </div>
                        <h3><?php echo $place_title ?></h3>
                    </a>

                    <a class="btn btn-primary" href="place.php?place_id=<?php  echo $the_place_id ?>">Read More <span
                            class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <!--  /.col-md-3  -->
           
<!-- 
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/<?php echo $place_image ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="place.php?place_id=<?php  echo $the_place_id ?>"></a></h5>
                    <a class="btn btn-primary" href="place.php?place_id=<?php  echo $the_place_id ?>">Read More <span
                        class="glyphicon glyphicon-chevron-right"></span>
                </a>
                </div>
            </div> -->

            <?php  }  ?>



        </div>
        <!--  /.row  -->

    </div>
    <!-- /.container-->

</div>

<!--/. Page Content -->

<script>

    // $(document).ready(function(){
    //     $("#quick-search").keyup(function(){
    //         var quickSearch = $("#quick-search").val();
    //         // alert(quickSearch);
    //         $.ajax({
    //             url:'qSearch.php',
    //             data:{place_title:quickSearch},
    //             type:'POST',
    //             success:function(data){
    //                 if (!data.error) {
    //                         $('#result').html(data);
    //                     }
    //             }

    //         });
    //     });
    // });


</script>


<!--  footer  -->


<?php include "templates/footer.php" ?>

<!--  /.footer  -->