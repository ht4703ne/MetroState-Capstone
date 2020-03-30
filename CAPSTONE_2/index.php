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
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	
	 <!-- Including jQuery is required. -->
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <!-- Including our scripting file. -->
   <script type="text/javascript" src="scripts.js"></script>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><b>fantAlytics</b></div>
      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="pendingFunction.php" class="list-group-item list-group-item-action bg-light">Top Players</a>
        
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

				
      <div class="container-fluid">
        
				
				
					<br>					
						<div class="grid-container">
						<div class="grid-item"><h1 class="mt-4" align="left" style="color:#000080"><b>fantAlytics</b></h1><h3 align="left" style="color: grey">Fantasy Football Trade Analyzer</h3></div>
						<div class="grid-item"><button class="button" style="background-color:#000080" style="vertical-align:middle"><span>Analyze <button onClick="history.go(0)" class="button" style="background-color:#00b300" style="vertical-align:middle"><span>Start Over </span></span></div>		
					
						<div class="grid-item" style="color:#000080"><h2>Team A</h2></div>
						<div class="grid-item" style="color:#000080"><h2>Team B</h2></div>
						<div class="grid-item"><input type="text" id="searcha" placeholder="Add Player" /></div>  
						<div class="grid-item"><input type="text" id="searchb" placeholder="Add Player" /></div>
						<div class="grid-item"><input type="text" id="searchc" placeholder="Add Player" /></div>
						<div class="grid-item"><input type="text" id="searchd" placeholder="Add Player" /></div>  
						<div class="grid-item"><input type="text" id="searche" placeholder="Add Player" /></div>
						<div class="grid-item"><input type="text" id="searchf" placeholder="Add Player" /></div>
						

						
						<div class="grid-item"><div id="displaya"></div></div>
						<div class="grid-item"><div id="displayb"></div></div>
						
						</div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
