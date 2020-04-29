<?php include('./shared/navigation.php');
session_start();
require_once "config.php";
global $link;
?>

<style>
	input[type=text],
	select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		font-weight: bold;
		color: gray;
	}

	input[type=number],
	select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		font-weight: bold;
		color: gray;
	}

	input[type=email],
	select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		font-weight: bold;
		color: gray;
	}

	input[type=password],
	select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		font-weight: bold;
		color: gray;
	}

	input[type=integer],
	select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		font-weight: bold;
		color: gray;
	}

	input[type=submit] {
		width: 100%;
		background-color: navy;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	input[type=submit]:hover {
		background-color: green;
	}

	#add_admin_form {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
		font-weight: bold;

	}
</style>
<?php

$email = "";
$a_password = "";
$fname = "";
$lname = "";
$address = "";
$city = "";
$state = "";
$last_SSN = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$sql = "SELECT email FROM user WHERE email = '" . trim($_POST["email"]) . "'";
	if ($stmt = mysqli_prepare($link, $sql)) {
		$param_email = trim($_POST["email"]);;
		if (mysqli_stmt_execute($stmt)) {
			mysqli_stmt_store_result($stmt);
			if (mysqli_stmt_num_rows($stmt) == 1) {
				echo "This email has already been taken.";
				return false;
			} else {
				$email = trim($_POST["email"]);;
			}
		} else {
			echo "Something went wrong. Please try again later.";
		}
	}
	$a_password = trim($_POST["a_password"]);
	$fname = trim($_POST["fname"]);
	$lname = trim($_POST["lname"]);
	$address = trim($_POST["address"]);
	$city = trim($_POST["city"]);
	$state = trim($_POST["state"]);
	$last_SSN = trim($_POST["last_SSN"]);

	$insert_user_query = "INSERT INTO user(fname,lname,address,city,state,email,last_SSN,a_password)
            VALUES('" . $fname . "','" . $lname . "','" . $address . "','" .
		$city . "','" . $state . "','" . $email . "','" . $last_SSN . "','" . $a_password . "')";
	// echo $insert_user_query;

	global $db;

	// mysqli_begin_transaction($db, MYSQLI_TRAN_START_READ_WRITE);

	if (mysqli_query($link, $insert_user_query)) {
		echo '<script> alert("Users Information added successfully");</script>';
	} else {
		echo "ERROR: Not able to execute sql1. "
			. mysqli_error($link);
		return false;
	}
}
?>

<a href='admin.php' class="list-group-item list-group-item-action bg-light" style="text-align: center"><strong>Admin Home Page</strong></a>
<div style="text-align: center">
	<form class="signin" id="add_admin_form" method="post">
		<br>
		<h1 style="color:#000080;font-size:50px; font-weight: bold; padding-left: 20px;">Create Administrator</h1>
		<input type="email" name="email" class="grid-item" placeholder="Email Address" required autofocus><br>
		<input type="password" name="a_password" class="grid-item" placeholder="Password" required><br>
		<input type="text" name="fname" class="grid-item" placeholder="First Name" required><br>
		<input type="text" name="lname" class="grid-item" placeholder="Last Name" required><br>
		<input type="text" name="address" class="grid-item" placeholder="Address" required><br>
		<input type="text" name="city" class="grid-item" placeholder="City" required><br>
		<input type="text" name="state" class="grid-item" placeholder="State Abbreviation" required><br>
		<input type="integer" name="last_SSN" class="grid-item" placeholder="Last 4 of SSN" required><br>
		<input type="submit"><span></span></button>
		<br />
		
	</form>
</div>