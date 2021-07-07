<?php

$id = $_GET['id'];
$dbname = "ffb_stats";
$con = mysqli_connect("localhost", "root", "", $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE FROM main WHERE id_pk = $id"; 

if (mysqli_query($con, $sql)) {
    mysqli_close($con);
    header('Location: delete_player.php');
    exit;
} else {
    echo "Error deleting record";
}
