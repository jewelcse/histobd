<form action="" method="post" >
                        		<div class="form-group">
                                    <label>edit category</label>

<?php

if (isset($_GET['edit'])) {

$cat_id = $_GET['edit'];
	
$query = "SELECT * FROM categories WHERE cat_id = '{$cat_id}' ";

$select_categories = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($select_categories))
{
 
$cat_id = $row['cat_id'];  
$cat_title = $row['cat_title'];

?>


<input  class= "form-control" value="<?php if(isset($cat_title)){echo $cat_title ; }?>" type="text" name="cat_title">

<?php } } ?>
              
<?php 

//update query

if (isset($_POST['Update'])) {
	
$the_cat_title =  $_POST['cat_title'];

if ($the_cat_title == '' || empty($the_cat_title)) {


      echo "<div class='alert alert-danger'>This field can not be empty</div>";
     
}
else {

$query = "UPDATE categories  SET cat_title = '$the_cat_title'  WHERE cat_id  = '{$cat_id}' ";

$update_query = mysqli_query($connection,$query);
if (!$update_query) {
      
      die("QUERY FAILD". mysqli_error($connection));
}
else{

}
}
}
?>
      			
      		</div>
      		<div class="form-group">
      	<input class="btn btn-primary" type="submit" name="Update" value="Update category">
      		</div>
                        	</form>



