<?php include('./shared/navigation.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<style>
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
				font-size: 30px;
				text-align: center;
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
    .button-center {
      text-align: center;
      padding: 15px;
      margin: 15px;
    }
</style>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
</head>

<body>

<div class= "button-center">
<h2><a href="create_admin.php" class="grid-item"><button class="button"><span>Create Admin Account</span></h2>
<h2><a href="delete_admin.php" class="grid-item"><button class="button"><span>Delete Admin Account</span></h2>
<h2><a href="Deletepaged.php" class="grid-item"><button class="button"><span>Add Player</span></h2>
<h2><a href="delete_player.php" class="grid-item"><button class="button"><span>Delete Player</span></h2>
<h2><a href="logout.php" class="grid-item"><button class="button"><span>Logout</span></h2>
</div>

</body>