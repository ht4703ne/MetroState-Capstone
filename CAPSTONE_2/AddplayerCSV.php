
<?php
$connect = mysqli_connect("localhost", "root", "", "ffb_stats");

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
    $id_pk= mysqli_real_escape_string($connect, $data[0]);
    $name = mysqli_real_escape_string($connect, $data[1]);
    $team = mysqli_real_escape_string($connect, $data[2]);
    $pos = mysqli_real_escape_string($connect, $data[3]);
    $gms = mysqli_real_escape_string($connect, $data[4]);
    $passing_yds = mysqli_real_escape_string($connect, $data[5]);
    $passing_td = mysqli_real_escape_string($connect, $data[6]);
    $passing_int = mysqli_real_escape_string($connect, $data[7]);
    $rushing_yds = mysqli_real_escape_string($connect, $data[8]);
    $rushing_td = mysqli_real_escape_string($connect, $data[9]);
    $receiving_rec = mysqli_real_escape_string($connect, $data[10]);
    $receiving_yds = mysqli_real_escape_string($connect, $data[11]);
    $receiving_td = mysqli_real_escape_string($connect, $data[12]);
    $fum_lst = mysqli_real_escape_string($connect, $data[13]);
    $def_sack = mysqli_real_escape_string($connect, $data[14]);
    $def_int = mysqli_real_escape_string($connect, $data[15]);
    $forced_fumble = mysqli_real_escape_string($connect, $data[16]);
    $fumble_recovery = mysqli_real_escape_string($connect, $data[17]);
    
    if($ID_PK >0){
        $query = ("INSERT INTO  main (ID_PK
        ,NAME 
        ,TEAM 
        ,POS 
        ,GMS
        ,PASSING_YDS
        ,PASSING_TD 
        ,PASSING_INT
        ,RUSHING_YDS
        ,RUSHING_TD 
        ,RECEIVING_REC 
        ,RECEIVING_YDS 
        ,RECEIVING_TD
        ,FUM_LST 
        ,DEF_SACK
        ,DEF_INT 
        ,FORCED_FUMBLE 
        ,FUMBLE_RECOVERY) VALUES ('$id_pk'
        ,'$name' 
        ,'$team' 
        ,'$pos'
        ,'$gms'
        ,'$passing_yds'
        ,'$passing_td'
        ,'$passing_int'
        ,'$rushing_yds'
        ,'$rushing_td' 
        ,'$receiving_rec' 
        ,'$receiving_yds' 
        ,'$receiving_td'
        ,'$fum_lst' 
        ,'$def_sack'
        ,'$def_int' 
        ,'$forced_fumble'
        ,'$fumble_recovery')");
   }
    mysqli_query($connect, $query);
   }
   fclose($handle);
   header("location: AddPlayer.php?updation=1");// shows the front page after updating table.
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


$query = "SELECT * FROM main Order by NAME";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
    <div class="list-group list-group-flush">
        <a href="Addplayer.php" class="list-group-item list-group-item-action bg-light">Back</a>     
      </div>
 <head>
  <title>Add Player table </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Add Player</a></h2>
   <br />
   <form method="post" enctype='multipart/form-data'>
    <p><label>Please Select File(Only CSV Formate)</label>
    <input type="file" name="Player_file" /></p>
    <br />
    <input type="submit" name="upload" class="btn btn-info" value="Upload" />
   </form>
   <br />
   <?php echo $message; ?>
   <h3 align="center">Added Players</h3>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <tr>
    <th>ID_PK</th>
      <th>Player Name</th>
      <th>Team</th>
      <th>Pos</th>
      <th>Gms</th>
      <th>Passing_yds</th>
      <th>Passing_td</th>
      <th>Passing_int</th>
      <th>Rushing_yds</th>
      <th>Rushing_td</th>
      <th>Receiving_rec</th>
      <th>Receiving_yds</th>
      <th>Receiving_td</th>
      <th>Fum_lst</th>
      <th>Def_sack</th>
      <th>Def_int</th>
      <th>Forced_fumble</th>
      <th>Fumble_recovery</th>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["ID_PK"].'</td>
       <td>'.$row["NAME"].'</td>
       <td>'.$row["TEAM"].'</td>
       <td>'.$row["POS"].'</td>
       <td>'.$row["GMS"].'</td>
       <td>'.$row["PASSING_YDS"].'</td>
       <td>'.$row["PASSING_TD"].'</td>
       <td>'.$row["PASSING_INT"].'</td>
       <td>'.$row["RUSHING_YDS"].'</td>
       <td>'.$row["RUSHING_TD"].'</td>
       <td>'.$row["RECEIVING_REC"].'</td>
       <td>'.$row["RECEIVING_YDS"].'</td>
       <td>'.$row["RECEIVING_TD"].'</td>
       <td>'.$row["FUM_LST"].'</td>
       <td>'.$row["DEF_SACK"].'</td>
       <td>'.$row["DEF_INT"].'</td>
       <td>'.$row["FORCED_FUMBLE"].'</td>
       <td>'.$row["FUMBLE_RECOVERY"].'</td>
      </tr>
      ';
     }
     ?>
    </table>
   </div>
  </div>
 </body>
</html>

