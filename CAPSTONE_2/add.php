<?php

$dbname = "ffb_stats";
$con = mysqli_connect("localhost", "root", "", $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// find max id_pk to assign it to new player created
$result = mysqli_query($con, $find_max_id_pk = "SELECT MAX(ID_PK) as max_id FROM main");

while ($r = mysqli_fetch_array($result)) {

    $max_id = $r['max_id'] + 1;
}

if (isset($_POST['name']) && $_POST['name'] != "" && isset($_POST['team']) && $_POST['team'] != "") {

    $sql = "INSERT INTO main (id_pk, name, team, pos, gms, 
			passing_yds, passing_td, passing_int, rushing_yds, 
			rushing_td, receiving_rec, receiving_yds, receiving_td, 
			fum_lst, def_sack, def_int, forced_fumble, fumble_recovery)
			
			VALUES ('$max_id',
            '$_POST[name]', 
			'$_POST[team]', 
			'$_POST[pos]', 
			'$_POST[gms]', 
			'$_POST[passing_yds]', 
			'$_POST[passing_td]', 
			'$_POST[passing_int]', 
			'$_POST[rushing_yds]', 
			'$_POST[rushing_td]', 
			'$_POST[receiving_rec]', 
			'$_POST[receiving_yds]', 
			'$_POST[receiving_td]', 
			'$_POST[fum_lst]', 
			'$_POST[def_sack]', 
			'$_POST[def_int]', 
			'$_POST[forced_fumble]', 
            '$_POST[fumble_recovery]' ) ";
}

if (mysqli_query($con, $sql)) {
    header('Location: add_player.php');
    exit;
} else {
    header('Location: add_player.php');
    exit;
}

// Close connection
mysqli_close($con);
