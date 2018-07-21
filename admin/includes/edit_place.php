<?php

if (isset($_GET['p_id'])) {
	

	$the_place_id =  $_GET['p_id'];


}
$query = "SELECT * FROM places WHERE place_id =  '{$the_place_id}' ";

$select_all_places_by_id = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($select_all_places_by_id)) {

    $place_id = $row['place_id'];
    $place_title = $row['place_title'];
    $place_category = $row['place_cat_id'];
    $place_image = $row['place_image'];
    $place_description = $row['place_description'];
    $place_location = $row['place_location'];
    $place_tags = $row['place_tags'];



}
if (isset($_POST['update_place'])) {
	
    $place_title = $_POST['place_title'];
    $place_cat_id = $_POST['cat_title'];
    $image = $_FILES['place_image']['name'];
	$image_temp = $_FILES['place_image']['tmp_name'];
    $place_description = $_POST['place_description'];
    $place_location = $_POST['place_location'];
    $place_tags = $_POST['place_tags'];


    $place_title = mysqli_real_escape_string($connection,$place_title);
    //$category = mysqli_real_escape_string($connection,$category);
    $place_description = mysqli_real_escape_string($connection,$place_description);
    $place_location = mysqli_real_escape_string($connection,$place_location);






    move_uploaded_file($image_temp, "../images/$image");

    if (empty($image)) {
    	
    	$query = "SELECT * FROM places WHERE place_id  = '$the_place_id' ";
    	$select_query = mysqli_query($connection,$query);

    	while ($row = mysqli_fetch_array($select_query)) {
    		
    		$place_image = $row['$place_image'];


    	}
    }
   

    $query = "UPDATE places SET ";
    $query .= "place_title = '{$place_title}', ";
    $query .= "added_date = now(), ";
    $query .= "place_cat_id = '{$place_cat_id}', ";
    $query .= "place_image = '{$image}', ";
    $query .= "place_description = '{$place_description}', ";
    $query .= "place_location = '{$place_location}', ";
    $query .= "place_tags = '{$place_tags}' ";
    $query .= "WHERE place_id = '{$the_place_id}' ";




    $update_place = mysqli_query($connection,$query);



    if (!$update_place) {
    	
    	die("QUERY FAILED".mysqli_error($connection));

    }
    else{
    	echo "<div class='alert alert-success'> Updated done successfully  !</div>";
    }


}



?>
<form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">

	<div class="form-group">
		<label for="title">Place Title :</label>
		<input type="text" value="<?php echo $place_title ; ?>" name="place_title" class="form-control">
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
		<img width="100px" src="../images/<?php echo $place_image ; ?>" alt="image">
		<input type="file" name="place_image">
	</div>
	<div class="form-group">
		<label for="description">Description :</label>
		<textarea class="form-control"   name="place_description" cols="30" rows="10">
			
			<?php echo $place_description ; ?>
		</textarea> 
	</div>
    <div class="form-group">
        <label for="location">location-link :</label>
        <textarea class="form-control"   name="place_location" cols="10" rows="10">
            
            <?php echo $place_location ; ?>
        </textarea> 
    </div>
	<div class="form-group">
		<label for="tags">Tags :</label>
		<input type="text" value="<?php echo $place_tags ; ?>"  name="place_tags" class="form-control">
	</div>

<div class="form-group">
	<input type="submit" class="btn btn-primary" name="update_place" value="Update">
</div>

