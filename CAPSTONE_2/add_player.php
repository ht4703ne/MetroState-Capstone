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

		input[type=submit] {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		#add_player_form {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
			font-weight: bold;

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

			<a href='admin.php' class="list-group-item list-group-item-action bg-light" style="text-align: center"><strong>Admin Home Page</strong></a>

				<div>
					<h1 style="color:#000080;font-size:50px; font-weight: bold; padding-left: 20px;">Add Player</h1>
				</div>

			</div>

			<div id="add_player_form">
				<form action="add.php" method="post">
					<label for="name">Name</label>
					<input type="text" id="name" name="name" placeholder="Enter Name" required>

					<label for="team">Team</label>
					<select id="team" name="team" required>
						<option value="" disabled selected>-select-</option>
						<option value="ARI">ARI</option>
						<option value="ATL">ATL</option>
						<option value="BAL">BAL</option>
						<option value="BUF">BUF</option>
						<option value="CAR">CAR</option>
						<option value="CHI">CHI</option>
						<option value="CIN">CIN</option>
						<option value="CLE">CLE</option>
						<option value="DAL">DAL</option>
						<option value="DEN">DEN</option>
						<option value="DET">DET</option>
						<option value="GB">GB</option>
						<option value="HOU">HOU</option>
						<option value="IND">IND</option>
						<option value="JAX">JAX</option>
						<option value="KC">KC</option>
						<option value="LAC">LAC</option>
						<option value="LAR">LAR</option>
						<option value="MIA">MIA</option>
						<option value="MIN">MIN</option>
						<option value="NE">NE</option>
						<option value="NO">NO</option>
						<option value="NYG">NYG</option>
						<option value="NYJ">NYJ</option>
						<option value="OAK">OAK</option>
						<option value="PHI">PHI</option>
						<option value="PIT">PIT</option>
						<option value="SEA">SEA</option>
						<option value="SF">SF</option>
						<option value="TB">TB</option>
						<option value="TEN">TEN</option>
						<option value="WAS">WAS</option>

					</select>

					<label for="pos">Position</label>
					<select id="pos" name="pos" required>
						<option value="" disabled selected>-select-</option>
						<option value="QB">QB</option>
						<option value="WR">WR</option>
						<option value="RB">RB</option>
						<option value="TE">TE</option>
						<option value="D/ST">D/ST</option>
					</select>

					<label for="gms">Games Played</label>
					<input type="number" id="gms" name="gms" placeholder=0 min="0" max="16" value=0 required>

					<label for="passing_yds">Passing Yards</label>
					<input type="number" id="passing_yds" name="passing_yds" placeholder=0 value=0 required>

					<label for="passing_td">Passing TD</label>
					<input type="number" id="passing_td" name="passing_td" placeholder=0 min="0" value=0 required>

					<label for="passing_int">Passing Int</label>
					<input type="number" id="passing_int" name="passing_int" placeholder=0 min="0" value=0 required>

					<label for="rushing_yds">Rushing Yards</label>
					<input type="number" id="rushing_yds" name="rushing_yds" placeholder=0 value=0 required>

					<label for="rushing_td">Rushing TD</label>
					<input type="number" id="rushing_td" name="rushing_td" placeholder=0 min="0" value=0 required>

					<label for="receiving_rec">Receptions</label>
					<input type="number" id="receiving_rec" name="receiving_rec" placeholder=0 min="0" value=0 required>

					<label for="receiving_yds">Receiving Yards</label>
					<input type="number" id="receiving_yds" name="receiving_yds" placeholder=0 min="0" value=0 required>

					<label for="receiving_td">Receiving TD</label>
					<input type="number" id="receiving_td" name="receiving_td" placeholder=0 min="0" value=0 required>

					<label for="fum_lst">Fumbles Lost</label>
					<input type="number" id="fum_lst" name="fum_lst" placeholder=0 min="0" value=0 required>

					<label for="def_sack">Defensive Sack</label>
					<input type="number" id="def_sack" name="def_sack" placeholder=0 min="0" value=0 required>

					<label for="def_int">Defensive Interception</label>
					<input type="number" id="def_int" name="def_int" placeholder=0 min="0" value=0 required>

					<label for="forced_fumble">Forced Fumble</label>
					<input type="number" id="forced_fumble" name="forced_fumble" placeholder=0 min="0" value=0 required>

					<label for="fumble_recovery">Fumble Recovery</label>
					<input type="number" id="fumble_recovery" name="fumble_recovery" placeholder=0 min="0" value=0 required>

					<input type="submit" value="Submit">

				</form>

			</div>

</body>

</html>

<script>
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});
</script>