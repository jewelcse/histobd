<?php
include "includes/admin_header.php" ;





function insert(){

global $connection;

if (isset($_POST['submit'])) {

$cat_title  = $_POST['cat_title'];

if ($cat_title == "" || empty($cat_title)) {


echo "<div class='alert alert-danger'>This field can not be empty</div>";
}

else{




$query = "INSERT INTO categories(cat_id,cat_title) ";
$query .= "VALUES('','$cat_title') " ;


$create_category_query  = mysqli_query($connection,$query);

if (!$create_category_query) {
	die("QUERY FAILD".mysqli_error($connection));
}
else{
	echo "<div class='alert alert-success'>successfully add categories !</div>";
}


}

}

}


function selece_all_categories(){

global $connection;
$query = "SELECT * FROM categories";

$select_categories = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($select_categories))
{

$cat_id = $row['cat_id'];  
$cat_title = $row['cat_title'];

echo"<tr>";
//echo"<td>{$cat_id}</td>";
echo"<td>{$cat_title}</td>";
echo"<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
echo"<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";

echo "</tr>";
}
}


function delete_categories(){

global $connection;

if (isset($_GET['delete'])) {

$the_cat_id =  $_GET['delete'];

$query = "DELETE FROM categories WHERE cat_id  = '{$the_cat_id}' ";

$delete_query = mysqli_query($connection,$query);

header("location:categories.php");

}

}

function update_categories(){

global $connection;


if (isset($_GET['edit'])) {


$cat_id = $_GET['edit'] ; 

include "includes/update_categories.php";


}
}

function show_current_time(){

	date_default_timezone_set('Asia/Dhaka');
    echo "Time : ".date("h:ia");
}


?>