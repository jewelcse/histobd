
<?php include("../templates/db.php") ;?>
<?php require_once("includes/session.php") ?>


<title>Admin-histobd</title>
<style type="text/css">
	body{

		margin: 0;
		padding: 0;
		width: 100%;
		height: 100vh;
		background: url("../images/BG.jpg") 50% 50% no-repeat;
        background-size: cover;
		display: table;

		
}
.signin{
	position: absolute;
	top: 50%;
	left: 50%
	transform: translateX(-50%) translateY(-50%);

}
h2,a {
	font-family: Source Sans Pro;
	font-weight: lighter;
	color: #fff;
	font-size: 50px;
	text-align: center;
}

	input{
		display: block;
		width:  320px;
		margin:auto;
		height: 50px;
		background: rgba(0,0,0,0,3);
		outline: none;
		border: 1px solid rgba(0,0,0,0,5);
		font-family: source sans pro;
		font-weight: lighter;;
		font-size: 14px;
		margin-bottom: 10px;
		padding-left: 10px;
		border-radius: 5px;

	}


	
</style>
<div clss="signin">

<form method="post" action="">
	<h2>ADMIN'S LOGIN</h2><hr>
	<input type="text" name="admin_name" placeholder="admin_name" required>
	<input type="password" name="addmin_password" placeholder="addmin_password" required>
	<input type="submit" name="login" value="login">
	<a href="../index.php">histobd</a>
</form>

</div>

<?php 

if (isset($_POST['login'])) {
	
$admin_name =  $_POST['admin_name'];

$admin_password =  $_POST['addmin_password'];



$query  = "SELECT * FROM admin ";
$select_admin_query  = mysqli_query($connection,$query);


if (!$select_admin_query) {
	die("QUERY FAILED".mysqli_error($connection));
}
else{

	while($row = mysqli_fetch_array($select_admin_query)) {

		 $db_admin_id = $row['admin_id'];
		 $db_admin_name  = $row['admin_name'];
		 $db_admin_password  = $row['admin_password'];
		
	


	if ($db_admin_name != $admin_name || $db_admin_password != $admin_password) {
		
		echo "admin name or password is incorrect";
	}

	else if ($db_admin_name == $admin_name && $db_admin_password == $admin_password) {

		$_SESSION['admin_id'] = true;
		$_SESSION['current_status'] = 1;
		$_SESSION['admin_name'] = $db_admin_name;
		
		header("Location:index.php");
	}

	else{

		header("Location:index.php");
	}


}


}











}




















?>