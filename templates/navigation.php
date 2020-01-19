<?php include "db.php"; ?>
<style type="text/css" media="screen">
body{
  box-sizing: border-box;
}
  .dropdown {
    padding-top: 0px;
  }

  .search-reasult {
  background:gray;
  width:235px;
  height:auto;
  margin-top:0px;  
  position: absolute;
  box-sizing: border-box;
  text-align: justify;
  opacity: .7;
}

tbody a {
    padding: 5px;
    color: white;
    display:block;
    
   
}

tbody a:hover {
  color: black;
  background: #ffffff;
  text-decoration: none;
}
</style>
<!-- Jquery Core CSS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
 
 


<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">histoBd.com</a>

    </div>
    <!--/.navbar-header--->


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <?php 
              
              $query = "SELECT * FROM categories limit 5";

              $select_all_categories = mysqli_query($connection,$query);

              while ($row = mysqli_fetch_assoc($select_all_categories) )
              {
                
              $cat_id  =  $row['cat_id'];
              $cat_title = $row['cat_title'];

              echo "<li><a href='category.php?place_by_category=$cat_id'>$cat_title</a></li>";
              }

              ?>


      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="searchInput">
          <form action="search.php" method="post">
            <div class="input-group">
              <input name="search" id="search" type="text" autocomplete="off"  class="form-control" placeholder="search places...">
              <span class="input-group-btn">
                <button id="submit" name="submit" class="btn btn-default" type="submit">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
          </form>
         
            <div class="row" >
              <table class="search-reasult ">
                <tbody class="">
                  <tr id="result">
                    <td id="result-data" ></td>
                  </tr>
                </tbody>
              </table>
            </div>

        </li>
        <?php if(isset($_SESSION['user_id'])){ ?>
        <li id="logOutButton">
          <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
        </li>

        <?php  } 
       else{ ?>
        <li id="loginButton">
          <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"> Login</i></a>
        </li>
        <?php   } ?>




        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
            <?php 



              if (isset($_SESSION['user_id'])) {

                  $current_user_id  = $_SESSION['user_id'];
                  $sql = "SELECT * FROM users WHERE user_id = '{$current_user_id}' ";
                  $result = mysqli_query($connection,$sql);
                  if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                   echo $current_user_name = $row['username'];
                  }
               
               //echo $current_user_name;
               

              }
              else{
                
                // $_SESSION['user_id'] = '';
                echo "GustUser";
              }



                  ?>
            <b class="caret"></b></a>

          <ul class="dropdown-menu">
            <li>
              <a href="users.php?user_id=<?php echo $_SESSION['user_id'] ; ?>"><i class="fa fa-fw fa-user"></i>
                Profile</a>
            </li>
            <!-- <li class="divider"></li> -->
            <!-- <li>
                <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li> -->

          </ul>


        </li>


      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

<script>

    $(document).ready(function(){
        $("#search").keyup(function(){
            var quickSearch = $("#search").val();
            // alert(quickSearch);
            $.ajax({
                url:'qSearch.php',
                data:{place_title:quickSearch},
                type:'POST',
                success:function(data){
                    if (!data.error) {
                            $('#result').html(data);
                        }
                }

            });
        });
    });


</script>




