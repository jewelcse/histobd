  <table class="table table-bordered table-hover">
                                <caption>///////////\\\\\\\\\\\\\</caption>
                                <thead>
                                    <tr>
                                        
                                        <th>User Name</th>
                                        <th>Comment place id</th>
                                        <th>Comment Content</th>
                                        <th>In response to </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

<?php

$query = "SELECT * FROM comments ";

$select_all_comments = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($select_all_comments)) {

    $comment_id = $row['comment_id'];
    $user_id = $row['user_id'];
    $comment_place_id = $row['comment_place_id'];
    $comment_content = $row['comment_content'];
    

    
echo "<tr>" ;

$query  = "SELECT * FROM users WHERE user_id = '{$user_id}' ";

$select_the_user_name_query  = mysqli_query($connection,$query);


while ($row =mysqli_fetch_assoc($select_the_user_name_query)) {
    
    
    $user_name =  $row['username'];



 }

echo "<td> $user_name  </td>"; 
echo "<td> $comment_place_id  </td>";

/*$query = "SELECT * FROM categories WHERE cat_id ={$place_category}";

$select_categories = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($select_categories))
{

$cat_id = $row['cat_id'];  
$cat_title = $row['cat_title'];
}
*/


 

echo "<td> $comment_content </td>";



$query  = "SELECT * FROM places WHERE place_id = '{$comment_place_id}' ";

$select_the_place_title  = mysqli_query($connection,$query);


while ($row =mysqli_fetch_assoc($select_the_place_title)) {
    
    $comment_place_id = $row['place_id'];
    $place_titile =  $row['place_title'];

    
  echo  "<td><a href='../place.php?place_id=$comment_place_id '>$place_titile</a></td>";



 }  



echo "<td><a href='comments.php?delete_comment=$comment_id'>delete</a></td>";


echo "</tr>";
   
}

?>

                                   
                                </tbody>
                            </table>


                            <?php

if (isset($_GET['delete_comment'])) {


    $delete_comment_id = $_GET['delete_comment'];
    
$query = "DELETE FROM comments WHERE comment_id = '{$delete_comment_id}' " ;

$comment_delete_query = mysqli_query($connection,$query);

if ($comment_delete_query) {
    
header("location:comments.php");
    
}
else{


    die("QUERY FAILED".mysqli_error($connection));

}

    }
       ?>
