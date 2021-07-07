<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
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

    #add_admin_form {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      font-weight: bold;
    }

    .grid {
      background: white;
    }

    [class*='col-'] {
      float: left;
    }

    .col-2-3 {
      width: 66.66%;
    }

    .col-1-3 {
      width: 33.33%;

    }

    .col-1-2 {
      width: 100.00%;
      text-align: center;
    }
  </style>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading" style="color:#000080"><b>fantAlytics</b></div>
      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action bg-light">Analyzer</a>
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

      <div class="container-fluid">

        <br>
        <div class="grid-container">

          <div class="grid-item">
            <h1 class="mt-4" align="left" style="color:#000080 ; font-size:75px;"><b>fantAlytics</b></h1>
            <h3 align="left" style="color: grey">Fantasy Football Trade Analyzer</h3>
          </div>
          <div class="grid-item"><button class="button" onclick="analyze()" style="background-color:#000080" style="vertical-align:middle"><span>Analyze <button onClick="history.go(0)" class="button" style="background-color:#00b300" style="vertical-align:middle"><span>Start Over </span></span></div>

          <div>


            <!-- team a grid -->
            <div class="grid" style="background-color:#f2f2f2;">

              <div class="col-2-3">
                <form class="signin" id="add_admin_form" method="post">
                  <br>
                  <h5 style="text-align: center; color:#000080;font-size:40px; font-weight: bold;">Team A - Receiving</h5>
                  <input type="text" id="searcha" class="grid-item" placeholder="Add Player" required autofocus><br>
                  <input type="text" id="searchc" class="grid-item" placeholder="Add Player" required><br>
                  <input type="text" id="searche" class="grid-item" placeholder="Add Player" required><br>
                  <br />
                </form>
              </div>

              <div class="col-1-3">
                <form class="signin" id="add_admin_form" method="post">
                  <br>
                  <h5 style="text-align: center; color:#000080;font-size:40px; font-weight: bold;">fantAlytics</h5>
                  <input type="text" id="stat_team_a_search_a" class="grid-item" placeholder="" required autofocus readonly><br>
                  <input type="text" id="stat_team_a_search_b" class="grid-item" placeholder="" required readonly><br>
                  <input type="text" id="stat_team_a_search_c" class="grid-item" placeholder="" required readonly><br>
                  <br />
                </form>
              </div>

            </div>

          </div>

          <!-- team b grid -->
          <div class="grid" style="background-color:#f2f2f2;">

            <div class="col-2-3">

              <form class="signin" id="add_admin_form" method="post">
                <br>
                <h5 style="text-align: center; color:green;font-size:40px; font-weight: bold;">Team B - Receiving</h5>
                <input type="text" id="searchb" class="grid-item" placeholder="Add Player" required autofocus><br>
                <input type="text" id="searchd" class="grid-item" placeholder="Add Player" required><br>
                <input type="text" id="searchf" class="grid-item" placeholder="Add Player" required><br>
                <br />
              </form>
            </div>

            <div class="col-1-3">
              <form class="signin" id="add_admin_form" method="post">
                <br>
                <h5 style="text-align: center; color:green;font-size:40px; font-weight: bold;">fantAlytics</h5>
                <input type="text" id="stat_team_b_search_a" class="grid-item" placeholder="" required autofocus readonly><br>
                <input type="text" id="stat_team_b_search_b" class="grid-item" placeholder="" required readonly><br>
                <input type="text" id="stat_team_b_search_c" class="grid-item" placeholder="" required readonly><br>
                <br />
              </form>
            </div>
          </div>


          <!-- player display grid -->
          <div class="col-1-2">
            <h5 style="text-align: center; color: black;"></h5>
            <div id="displaya" style="font-size:35px;"></div>
          </div>
          <div class="col-1-2">
            <h5 style="text-align: center; color: black;"></h5>
            <div id="displayb" style="font-size:35px;"></div>
          </div>

        </div>

      </div>
    </div>

  </div>

  </div>

</body>

</html>

<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>