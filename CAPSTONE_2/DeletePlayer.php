<?php
$connect = mysqli_connect("localhost", "root", "", "ffb_stats");

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$Player_ID = $_POST['ID_PK'];
$name = $_POST['NAME'];

$query = "SELECT * FROM player WHERE ID_PK = $Player_ID";
$result = mysqli_query($connect, $query);

if($name !=''||$Player_ID !=''){

//Insert Query of SQL
// $query = mysqli_query($connect,"DELETE FROM `player` WHERE `ID_PK` = `$Player_ID`");
$query = "DELETE FROM player WHERE ID_PK = $Player_ID";
// $result = mysqli_query($connect,"SELECT `NAME`  FROM `player` WHERE `ID_PK` = `$Player_ID`");

echo "<br/><br/><span>Player Deleted successfully...!! </span>";
}
else{
echo "<p>Deletetion Failed <br/> Some Fields are Blank....!!</p>";
}
mysqli_close($connect); // Closing Connection with Server
}


?>
<!DOCTYPE html>
<html>
<head>
  <title>Deleted Player table </title>
</head>
  <body>
  <br />
   <h3 align="center">Deleted Player</h3>
   <br />
        <div class="table-responsive" align = 'center'>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Playere ID </th>
                  <span> <th>Player Name</th></span>
                </tr>
            <?php
                while($row = mysqli_fetch_array($result))
                {
                echo '
                <tr>
                <span><td>'.$row["ID_PK"].'</td></span>
               <span> <td>'.$row["NAME"].'</td></span>
                </tr>
                ';
                }
            ?>
            </table>

            <a href="DeletePlayer.html" class="list-group-item list-group-item-action bg-light">Back</a>

        </div>
    </body>
</html>
