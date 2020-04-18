<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>fantAlytics</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/simple-sidebar.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/styles_custom.css">

	<!-- Including jQuery is required. -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- Including our scripting file. -->
	<script type="text/javascript" src="scripts.js"></script>


	<style>
		#players {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#players td,
		#players th {
			border: 1px solid #ddd;
			padding: 8px;
		}


		#players tr:hover {
			background-color: #ddd;
		}

		#players th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #000080;
			color: white;
			width: auto;
		}

		/* Create two equal columns that floats next to each other */
		.column {
			float: left;
			width: 50%;
			padding: 10px;
			height: 75px;
			margin: auto;
		}

		/* Clear floats after the columns */
		.row:after {
			content: "";
			display: table;
			clear: both;
		}
	</style>

</head>

<body>

	<div class="d-flex" id="wrapper">

		<!-- Sidebar -->
		<div class="bg-light border-right" id="sidebar-wrapper">
			<div class="sidebar-heading"><b>fantAlytics</b></div>
			<div class="list-group list-group-flush">
				<a href="index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
				<a href="topPlayers.php" class="list-group-item list-group-item-action bg-light">Top Players</a>

			</div>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">

			<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
				<button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://sleeper.app" target="_blank">Sleeper</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Admin
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="admin_login.php">Login</a>
								<a class="dropdown-item" href="#" hidden>Create Admin</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" hidden>Log Out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>


			<div class="row">
				<div class="column">
					<h1 style="color:#000080;font-size:50px; font-weight: bold; padding-left: 10px;">Top Players</h1>
				</div>
				<div class="column" align="right">
					<select id="posSelect" onchange="TopPlayerFilter()" style="color:#000080;font-size:40px; font-weight: bold;">
						<option selected value="selectStuff" style="color:#000080;font-size:40px; font-weight: bold;">-select-</option>
						<option value="qb" style="color:#000080;font-size:40px; font-weight: bold;">QB</option>
						<option value="wr" style="color:#000080;font-size:40px; font-weight: bold;">WR</option>
						<option value="rb" style="color:#000080;font-size:40px; font-weight: bold;">RB</option>
						<option value="te" style="color:#000080;font-size:40px; font-weight: bold;">TE</option>
						<option value="dst" style="color:#000080;font-size:40px; font-weight: bold;">D/ST</option>
					</select><br><br>
				</div>
			</div>


			<script>
				function TopPlayerFilter() {
					var input, filter, table, tr, td, i, txtValue;
					input = document.getElementById("posSelect");
					filter = input.value.toUpperCase();
					table = document.getElementById("players");
					tr = table.getElementsByTagName("tr");
					for (i = 0; i < tr.length; i++) {
						td = tr[i].getElementsByTagName("td")[2];
						if (td) {
							txtValue = td.textContent || td.innerText;
							if (txtValue.toUpperCase().indexOf(filter) > -1) {
								tr[i].style.display = "";
							} else {
								tr[i].style.display = "none";
							}
						}
					}
				}
			</script>

			<?php

			$con = mysqli_connect("localhost", "root", "", "ffb_stats");
			// Check connection
			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}


			$result = mysqli_query($con, "SELECT name, team, pos, gms,

				# Avg Fantasy Football Points Calculation
				ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
				( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
				( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
				( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
				( fum_lst * -2 ) + ( def_sack * 1 ) + 
				( def_int * 2 ) + ( forced_fumble * 0 ) + 
				( fumble_recovery * 2 ) ) / gms,2)

				AS 'FP_PG', 

				# Total Fantasy Football Points Calculation
				ROUND(( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
				( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
				( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
				( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
				( fum_lst * -2 ) + ( def_sack * 1 ) + 
				( def_int * 2 ) + ( forced_fumble * 0 ) + 
				( fumble_recovery * 2 ) ,2)

				AS 'FP_TOTAL' 

				# fantAlytics Algorithm
				ROUND(( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
				( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
				( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
				( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
				( fum_lst * -2 ) + ( def_sack * 1 ) + 
				( def_int * 2 ) + ( forced_fumble * 0 ) + 
				( fumble_recovery * 2 ) ,2)

				AS 'FANTALYTICS' 



				FROM main
				ORDER BY FP_TOTAL DESC;");


			echo "<table id='players'>
				<tr class='header'>
				<th style='width:16.67%';>Name</th>
				<th style='width:16.67%';>Team</th>
				<th style='width:16.67%';>Position</th>
				<th style='width:16.67%';>Games Played (2019)</th>
				<th style='width:16.67%';>Avg Fantasy Points per Game</th>
				<th style='width:16.67%';>Total Fantasy Points</th>

				</tr>";


			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['team'] . "</td>";
				echo "<td>" . $row['pos'] . "</td>";
				echo "<td>" . $row['gms'] . "</td>";
				echo "<td>" . $row['FP_PG'] . "</td>";
				echo "<td>" . $row['FP_TOTAL'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";

			mysqli_close($con);

			?>


</body>

</html>