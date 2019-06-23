
<?php include  "templates/db.php" ?>
<?php 

$placeTitle = $_POST['place_title'];

if(!empty($placeTitle)){
    $sql = "SELECT * FROM places WHERE place_title LIKE '%$placeTitle%'";
    $select_query  = mysqli_query($connection,$sql);
    while($row = mysqli_fetch_array($select_query)){
        $placeId = $row['place_id'];
        $placeTitle_db = $row['place_title'];
        echo "<a href='place.php?place_id=$placeId'>$placeTitle_db</a><br>";
    }
}





?>