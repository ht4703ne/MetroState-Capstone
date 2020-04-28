<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>fantAlytics</title>

	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/simple-sidebar.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles_custom.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="scripts.js"></script>

	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<style>
		#posSelect {
			border-radius: 10px;
			border: 3px solid navy;
			font-size: 20px;
			height: 60px;
			width: 280px;
			color: navy;
			font-weight: bold;
			text-align: center;

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

			<div>

				<div>
					<h1 style="color:#000080;font-size:50px; font-weight: bold; padding-left: 10px;">Top Players</h1>
				</div>
				<div>

					<select id="posSelect" onchange="TopPlayerFilter()">

						<option selected value="select" disabled selected>-select-</option>
						<option value="qb">Quarterback</option>
						<option value="wr">Wide Receiver</option>
						<option value="rb">Running Back</option>
						<option value="te">Tight End</option>
						<option value="dst">Defense/Special Teams</option>

					</select>
				</div>

			</div>

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

				AS 'FP_TOTAL',

				#FANTALYTICS

				CASE 

				WHEN pos='TE' THEN

					ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
					( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
					( rushing_td * 7 ) + ( receiving_rec * 1.2 ) + 
					( receiving_yds * 0.15 ) + ( receiving_td * 7 ) +				
					( fum_lst * -2 ) + ( def_sack * 1 ) + 
					( def_int * 2 ) + ( forced_fumble * 0 ) + 
					( fumble_recovery * 2 ) ) / 16,2)

				WHEN pos='RB' THEN

					ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
					( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
					( rushing_td * 6 ) + ( receiving_rec * 1.2 ) + 
					( receiving_yds * 0.12 ) + ( receiving_td * 7 ) +				
					( fum_lst * -2.5 ) + ( def_sack * 1 ) + 
					( def_int * 2 ) + ( forced_fumble * 0 ) + 
					( fumble_recovery * 2 ) ) / 16,2)

				WHEN pos='WR' THEN

					ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
					( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
					( rushing_td * 6 ) + ( receiving_rec * 0.8 ) + 
					( receiving_yds * 0.05 ) + ( receiving_td * 6 ) +				
					( fum_lst * -2 ) + ( def_sack * 1 ) + 
					( def_int * 2 ) + ( forced_fumble * 0 ) + 
					( fumble_recovery * 2 ) ) / 16,2)

				WHEN pos='QB' THEN

					ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
					( passing_int * -3 ) + ( rushing_yds * 0.2 ) + 
					( rushing_td * 7.5 ) + ( receiving_rec * 1 ) + 
					( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
					( fum_lst * -3 ) + ( def_sack * 1 ) + 
					( def_int * 2 ) + ( forced_fumble * 0 ) + 
					( fumble_recovery * 2 ) ) / 16,2)

				ELSE 

				ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
				( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
				( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
				( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
				( fum_lst * -2 ) + ( def_sack * 1 ) + 
				( def_int * 2 ) + ( forced_fumble * 0 ) + 
				( fumble_recovery * 2 ) ) / gms,2)

				END AS 'FANTALYTICS'

				FROM main
				ORDER BY FANTALYTICS DESC;");

			echo "<table id='players'>
				<tr class='header'>
				<th style='width:14.3%';>Name</th>
				<th style='width:14.3%';>Team</th>
				<th style='width:14.3%';>Position</th>
				<th style='width:14.3%';>Games Played (2019)</th>
				<th style='width:14.3%';>Avg Fantasy Points per Game</th>
				<th style='width:14.3%';>Total Fantasy Points</th>
				<th style='width:14.3%';>fantAlytics Score</th>
				</tr>";

			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['team'] . "</td>";
				echo "<td>" . $row['pos'] . "</td>";
				echo "<td>" . $row['gms'] . "</td>";
				echo "<td>" . $row['FP_PG'] . "</td>";
				echo "<td>" . $row['FP_TOTAL'] . "</td>";
				echo "<td>" . $row['FANTALYTICS'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";

			mysqli_close($con);

			?>

			<script>
				$("#menu-toggle").click(function(e) {
					e.preventDefault();
					$("#wrapper").toggleClass("toggled");
				});
			</script>

</body>

</html>

<script>
	function TopPlayerFilter() {
		var input, filter, table, tr, td, i, txtValue;
		position = document.getElementById("posSelect");
		filter = position.value.toUpperCase();
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