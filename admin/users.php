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

                    <?php
                    $query = "SELECT * FROM users";
                    $total_number_of_user_query  = mysqli_query($connection,$query);

                    $total_user = mysqli_num_rows($total_number_of_user_query);



                    ?>
                                                <span class="badge"><?php  echo "Total Users"." ".$total_user ; ?></span>

                    <div class="show_time">
                                                    
                                                <?php  show_current_time(); ?>
                                                    
                            </div>

                            
                        </h1>

 
                        
                    </div>
                                
                                
                                   

                        <?php

                        $query = "SELECT * FROM users ";

                        $select_all_user = mysqli_query($connection,$query);

                        while ($row = mysqli_fetch_assoc($select_all_user)) {

                            $user_id = $row['user_id'];
                            $user_firstname = $row['user_firstname'];
                            $user_lastname = $row['user_lastname'];
                            $user_email = $row['user_email'];
                           
                        echo "<ul>" ;

                         
                        echo "<td><a href='user_profile.php?user_profile_no=$user_id'> $user_firstname  </td>". " "."<td> $user_lastname  </td>"." "."<td> $user_email </a></td>";

                        echo "</ul>";
                           
                        }

                        ?>
                                        

                </div>
                <!-- /.row -->

             </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include("includes/admin_footer.php"); ?>
