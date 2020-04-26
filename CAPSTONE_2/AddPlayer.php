
<!DOCTYPE html>
<html>
    <head>
        <title>Add Player </title>
        <div class="list-group list-group-flush">
        <a href="admin.php" class="list-group-item list-group-item-action bg-light">Back</a>     
      </div>
        <link href="css/styles_custom.css" rel="stylesheet">
    </head>
    <body>
        <div class="maindiv">
            <!--HTML Form -->
            <div>
               <a href="AddPlayerCSV.php" class="button"  >Add player Using CSV</a>    <br> 
                </div>
            <div class="form_div">
                <div class="title">

             
                <br><h2>Add Player.</h2>  <br>

                </div>
                    <form action="Add.php" method="post">
                    <!-- Method can be set as POST for hiding values in URL-->
                    <h2>Add Player Manually</h2>
                    <label>Player ID:</label>
                    <input class="input" name="id_pk" type="int" value="">
                    <label>Name:</label>
                    <input class="input" name="name" type="text" value="">
                    <label>Team:</label>
                    <input class="input" name="team" type="text" value="">
                    <label>Pos:</label>
                    <input class="input" name="pos" type="text" value="">
                    <label>Games:</label>
                    <input class="input" name="gms" type="int" value="">
                    <label>Passing_yds:</label>
                    <input class="input" name="passing_yds" type="int" value="">
                    <label>Passing_td:</label>
                    <input class="input" name="passing_td" type="int" value="">
                    <label>Passing_int:</label>
                    <input class="input" name="passing_int" type="int" value="">
                    <label>Rushing_yds:</label>
                    <input class="input" name="rushing_yds" type="int" value="">
                    <label>Rushing_td:</label>
                    <input class="input" name="rushing_td" type="int" value="">
                    <label>Receiving_rec:</label>
                    <input class="input" name="receiving_rec" type="int" value="">
                    <label>Receiving_yds:</label>
                    <input class="input" name="receiving_yds" type="int" value="">
                    <label>Receiving_td:</label>
                    <input class="input" name="receiving_td" type="int" value="">
                    <label>Fum_lst:</label>
                    <input class="input" name="fum_lst" type="int" value="">
                    <label>Def_sack:</label>
                    <input class="input" name="def_sack" type="int" value="">
                    <label>Def_int:</label>
                    <input class="input" name="def_int" type="int" value="">
                    <label>Forced_fumble:</label>
                    <input class="input" name="forced_fumble" type="int" value="">
                    <label>Fumble_recovery:</label>
                    <input class="input" name="fumble_recovery" type="int" value="">

                    <input class="submit" name="submit" type="submit" value="Add Player">
                </form>
            </div>
        </div>
    </body>
</html>
