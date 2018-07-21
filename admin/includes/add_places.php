<?php 

if (isset($_POST['add_place'])) {

	$title = $_POST['place_title'];
	$category = $_POST['cat_title'];
	


	$image = $_FILES['place_image']['name'];
	$image_temp = $_FILES['place_image']['tmp_name'];


	$description = $_POST['place_description'];
	$place_location = $_POST['place_location'];
	$tags = $_POST['place_tags'];

	$date = date('d-m-y'); 



	$title = mysqli_real_escape_string($connection,$title);
	$category = mysqli_real_escape_string($connection,$category);
	$description = mysqli_real_escape_string($connection,$description);
	$place_location = mysqli_real_escape_string($connection,$place_location);


	move_uploaded_file($image_temp, "../images/$image");




	$query = "INSERT INTO places(place_id,place_cat_id,place_title,added_date,place_image,place_description,place_location,place_tags) ";

	$query .= "VALUES('','$category','$title',now(),'$image','$description','{$place_location}','$tags') ";



	$place_insert_query = mysqli_query($connection,$query);


	if (!$place_insert_query) {
		
		die("QUERY FAIELD" .mysqli_error($connection));

	}

	else{
	echo "<div class='alert alert-success'>successfully add the place !</div>";
}


					
}

?>


<form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">

	<div class="form-group">
		<label for="title">Place Title :</label>
		<input type="text" name="place_title" class="form-control">
	</div>
	
	<div class="form-group">
		<label for="category">Category :</label>
		<select name="cat_title" >
<?php 


$query = "SELECT * FROM categories ";

$select_categories = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($select_categories))
{
 
$cat_id = $row['cat_id'];  
$cat_title = $row['cat_title'];


echo "<option value='$cat_id'>$cat_title</option>";




}


?>
			
			
		</select>
	</div>
	<div class="form-group">
		<label for="image">Image :</label>
		<input type="file" name="place_image" >
	</div>
	<div class="form-group">
		<label for="description">Description :</label>
		<textarea class="form-control" name="place_description" cols="30" rows="10"></textarea> 
	</div>
	<div class="form-group">
		<label for="location">Location :</label>
		<textarea class="form-control" name="place_location" cols="10" rows="10"></textarea> 
	</div>
	<div class="form-group">
		<label for="tags">Tags :</label>
		<input type="text" name="place_tags" class="form-control">
	</div>

<div class="form-group">
	<input type="submit" class="btn btn-primary" name="add_place" value="publish">
</div>


	

























</form>