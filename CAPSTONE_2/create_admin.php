<?php include('./shared/navigation.php');
session_start();
require_once "config.php";
global $link;
?>

<style>
			#searchOne {
				border-radius: 25px;
				border: 2px solid #73AD21;
				padding: 20px; 
				width: 400px;
				height: 10px;  
				outline: none;
			}

			#searchOne {
				font-weight: 900;
				color: navy;
			}
			
			#display {
				font-weight: 900;
				color: navy;
			}
			
			.grid-container {
				display: grid;
				grid-template-columns: auto auto;
				
			}
			.grid-item {
				padding: 10px;
				font-size: 20px;
				text-align: center;
                margin: 10px;
			}
			
			
			.button {
				display: inline-block;
				border-radius: 4px;
				background-color: #000080;
				border: none;
				color: #FFFFFF;
				text-align: center;
				font-size: 28px;
				padding: 20px;
				width: 200px;
				transition: all 0.5s;
				cursor: pointer;
				margin: 5px;
			}

		.button span {
				cursor: pointer;
				display: inline-block;
				position: relative;
				transition: 0.5s;
			}

		.button span:after {
				content: '\00bb';
				position: absolute;
				opacity: 0;
				top: 0;
				right: -20px;
				transition: 0.5s;
			}

		.button:hover span {
				padding-right: 25px;
			}

		.button:hover span:after {
				opacity: 1;
				right: 0;
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
    $sql = "SELECT email FROM user WHERE email = '".trim($_POST["email"])."'";
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
            VALUES('". $fname ."','". $lname ."','". $address ."','".
            $city ."','". $state ."','". $email ."','". $last_SSN ."','". $a_password ."')";
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
<div style="text-align: center">
<form class="signin" method="post" >
    <br><h1 class="h3 mb-3 font-weight-normal" id="form-labels"><strong>Create an account</strong></h1>

    <input type="email" name="email" id="searchOne" class="grid-item" placeholder="Email Address" required autofocus><br>
    <input type="password"  name="a_password" id="searchOne" class="grid-item" placeholder="Password" required><br>
    <input type="text"  name="fname" id="searchOne" class="grid-item" placeholder="First Name" required><br>
    <input type="text"  name="lname" id="searchOne" class="grid-item" placeholder="Last Name" required><br>
    <input type="text"  name="address" id="searchOne" class="grid-item" placeholder="Address" required><br>
    <input type="text"  name="city" id="searchOne" class="grid-item" placeholder="City" required><br>
    <input type="text"  name="state" id="searchOne" class="grid-item" placeholder="State Abbreviation" required><br>
    <input type="integer" name="last_SSN" id="searchOne" class="grid-item" placeholder="Last 4 of SSN" required><br>
    <button class="button" type="submit"><span>Register</span></button>
    <br />
</form>
</div>