<?php
include "templates/db.php";

$comment_place_id = $_POST['comment_place_id'];
$user_id = $_POST['user_id'];
$comment_content = $_POST['comment_content'];
//$comment_date =  Date("M,d,Y h:i:s A");
$query = "INSERT INTO comments(comment_id,comment_place_id,user_id,comment_date,comment_content) ";
$query .= "VALUES('','$comment_place_id','$user_id',now(),'$comment_content')";
$comment_insert_query  = mysqli_query($connection,$query);
if (!$comment_insert_query) {
  die("QUERY FAILED".mysqli_error($connection));
 }






















?>