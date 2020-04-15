
<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "ffb_stats");
//require_once "config.php";
//global $link;
$message = '';

if(isset($_POST["upload"]))
{
 if($_FILES['Player_file']['name'])
 {
  $filename = explode(".", $_FILES['Player_file']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['Player_file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $ID_PK= mysqli_real_escape_string($connect, $data[0]);
    $Name = mysqli_real_escape_string($connect, $data[1]);
    $query = "
     UPDATE player 
     SET ID_PK = '$ID_PK',
     NAME = '$Name' 
     WHERE ID_PK = '$ID_PK'
    ";
    mysqli_query($connect, $query);
   }
   fclose($handle);
   header("location: UpdatePlayer.php?updation=1");// shows the front page after updating table.
  }
  else
  {
   $message = '<label class="text-danger">Please Select CSV File only</label>';
  }
 }
 else
 {
  $message = '<label class="text-danger">Please Select File</label>';
 }
}

if(isset($_GET["updation"]))
{
 $message = '<label class="text-success">Player Updation Done</label>';
}


$query = "SELECT * FROM player";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
    <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>     
      </div>
 <head>
  <title>Update Player table </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Update Players table</a></h2>
   <br />
   <form method="post" enctype='multipart/form-data'>
    <p><label>Please Select File(Only CSV Formate)</label>
    <input type="file" name="Player_file" /></p>
    <br />
    <input type="submit" name="upload" class="btn btn-info" value="Upload" />
   </form>
   <br />
   <?php echo $message; ?>
   <h3 align="center">Updated Players</h3>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <tr>
    <th>ID_PK</th>
      <th>Player Name</th>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["ID_PK"].'</td>
       <td>'.$row["NAME"].'</td>
      </tr>
      ';
     }
     ?>
    </table>
   </div>
  </div>
 </body>
</html>

