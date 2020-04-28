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
		#player_select {
			border-radius: 10px;
			border: 3px solid navy;
			font-size: 50px;
			height: 60px;
			width: 400px;
			color: navy;
			font-weight: bold;
			text-align: center;
			float: right;
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
					<h1 style="color:#000080;font-size:50px; font-weight: bold; padding-left: 10px;">Delete Players</h1>
				</div>

				<div class="column" align="right">
					<input type="text" id="player_select" placeholder="Search" onchange="playerFilter()">
				</div>

			</div>

			<?php

			$con = mysqli_connect("localhost", "root", "", "ffb_stats");
			// Check connection
			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$result = mysqli_query($con, "SELECT id_pk, name, team, pos FROM main");

			echo "<table id='players'>
				<tr class='header'>
				<th style='width:10%';>ID</th>
				<th style='width:30%';>Name</th>
				<th style='width:20%';>Team</th>
				<th style='width:20%';>Pos</th>
				<th style='width:20%';>Action</th>

				</tr>";

			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['id_pk'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['team'] . "</td>";
				echo "<td>" . $row['pos'] . "</td>";
				echo "<td><button><a onClick=\"javascript: return confirm('Are you sure you want to delete " . $row['name'] . " - " . $row['pos'] . " - " . $row['team'] . "?');\" href='delete.php?id=" . $row['id_pk'] . " ' >Delete</a></button>
				
				</td>";
				echo "</tr>";
			}
			echo "</table>";

			mysqli_close($con);

			?>

</body>

</html>

<script>
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});

	function playerFilter() {
		var input, filter, table, tr, td, i, txtValue;
		position = document.getElementById("player_select");
		filter = position.value.toUpperCase();
		table = document.getElementById("players");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[1];
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