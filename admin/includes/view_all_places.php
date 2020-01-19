  <style type="text/css">
      
.all-places{
    width: 100%;
    overflow-x: auto;
    white-space: nowrap;
}

      td{
   max-width:200px;
   max-height:50px;
   width:100px;
   height:40px;
   overflow:hidden;
   word-wrap:break-word;  /* CSS3 */
}
  </style>



<div class="all-places">


<table class="table table-bordered table-hover">
                                <caption>///////////\\\\\\\\\\\\\</caption>
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Categories</th>
                                        <th>Place image</th>
                                        <th>Description</th>
                                        <th>Total Comments</th>
                                        <th>location</th>
                                        <th>Tags</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

<?php

$query = "SELECT * FROM places ORDER BY place_id DESC";

$select_all_places = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_all_places)) {

    $place_id = $row['place_id'];
    $place_title = $row['place_title'];
    $place_category = $row['place_cat_id'];
    $place_image = $row['place_image'];
    $place_description = $row['place_description'];
    $Total_comment = $row['place_comment_count'];
    $place_location = $row['place_location'];
    $place_tags = $row['place_tags'];


    echo "<tr>";

    echo "<td> $place_id  </td>";
    echo "<td> $place_title  </td>";

    $query = "SELECT * FROM categories WHERE cat_id = '{$place_category}' ";

    $select_categories = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_categories)) {

        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
    }


    echo "<td> $cat_title  </td>";





    echo "<td><img  width=200 src='../images/$place_image'  </td>";
    echo "<td> $place_description </td>";
    echo "<td> $Total_comment </td>";
    echo "<td> $place_location </td>";
    echo "<td> $place_tags </td>";
    echo "<td><a href='places.php?source=edit_place&p_id={$place_id}'>edit</a></td>";
    echo "<td><a href='places.php?delete={$place_id}'>delete</a></td>";


    echo "</tr>";

}

?>

                                   
                                </tbody>
                            </table>


</div>




                            <?php

                            if (isset($_GET['delete'])) {


                                $place_id = $_GET['delete'];

                                $query = "DELETE FROM places WHERE place_id = '{$place_id}' ";

                                $delete_query = mysqli_query($connection, $query);

                                if ($delete_query) {

                                    header("location:places.php");

                                } else {


                                    die("QUERY FAILED" . mysqli_error($connection));

                                }

                            }

                            ?>
