<link href="css/style.css" rel="stylesheet">
        <!-- Footer -->

        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footerCategoryList">
                             
                            <?php 

                            $query = "SELECT * FROM categories";

                            $select_all_categories = mysqli_query($connection,$query);

                            while ($row = mysqli_fetch_assoc($select_all_categories) )
                            {

                            $cat_id  =  $row['cat_id'];
                            $cat_title = $row['cat_title'];

                            ?>

                            <?php 
                            echo "<a href='category.php?place_by_category=$cat_id'>$cat_title</a>";
                            }

                            ?>
    
                        </div>
                    </div>
                
                <!-- /.col-lg-12 -->

            <!-- /.row -->
                </div>

            </div>
                
    <!-- /.container -->
</footer>
<div class="footer bg-dark section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="news">
                            <h5 class="white_text">newsletter</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</p>
                            <div class="newsletter_form">
                                <input type="text" placeholder="enter your email"><button>go!</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                       <div class="tweets">
                            <h5 class="white_text">latest tweets</h5>
                            <ul class="tweet">
                                <li><span><i class="fa fa-twitter"><a href="">We have just updated Porto Admin. Check the changelog </a></i></span></li>
                                <li class="white_text">10th july, 2017</li>
                            </ul>
                            <ul class="tweet">
                                <li><span><i class="fa fa-twitter"><a href="">We have just updated Porto Admin. Check the changelog </a></i></span></li>
                                <li class="white_text">10th july, 2017</li>
                            </ul>
                        </div> 
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="contact">
                            <h5 class="white_text">contact us</h5>
                            <ul class="contact_list">
                                <li><span><i class="fa fa-map-marker"></i></span><strong>address:</strong>1234, rupatali housing, barisal</li>
                                <li><span><i class="fa fa-phone"></i></span><strong>phone no:</strong>+88 0193079266 </li>
                                <li><span><i class="fa fa-envelope"></i></span><strong>mail us:</strong><a href="mailto:miraju@gmail.com"></a>miraju@gmail.com</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="follow">
                            <h5 class="white_text">follow us</h5>
                            <ul class="list-unstyled social_links">
                                    <li>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div><!--Row-->
                
            </div><!--Container-->    
    
        </div><!--Footer-->
        <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <div class="footerTitle">
                            <p>Copyright &copy; <a href="index.php">histobd.com</a></p>
                        </div>
                    </div>
                </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/gmap-api.js"></script>
    <script src="js/gmap.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/fakeLoader.min.js"></script>
    <script src="js/jquery.animatedheadline.min.js"></script>
    <script src="js/custom.js"></script>
<script>
    



  </script>
</body>

</html>
