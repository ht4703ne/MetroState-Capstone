<?php

//include "db.php";
$id = $_GET['id'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$dbname = "ffb_stats";
$con = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM main WHERE id_pk = $id"; 

if (mysqli_query($con, $sql)) {
    mysqli_close($con);
    header('Location: delete_player.php');
    exit;
} else {
    echo "Error deleting record";
}

?>
