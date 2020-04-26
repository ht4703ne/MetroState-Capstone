
<?php
    $connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
    $db = mysqli_select_db($connection,"ffb_stats" ); // Selecting Database from Server
    if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
        $id_pk = $_POST['id_pk'];
        $name = $_POST['name'];
        $team = $_POST['team'];
        $pos = $_POST['pos'];
        $gms= $_POST['gms'];
        $passing_yds= $_POST['passing_yds'];
        $passing_td = $_POST['passing_td'];
        $passing_int= $_POST['passing_int'];
        $rushing_yds= $_POST['rushing_yds'];
        $rushing_td = $_POST['rushing_td'];
        $receiving_rec = $_POST['receiving_rec'];
        $receiving_yds = $_POST['receiving_yds'];
        $receiving_td= $_POST['receiving_td'];
        $fum_lst = $_POST['fum_lst'];
        $def_sack= $_POST['def_sack'];
        $def_int = $_POST['def_int'];
        $forced_fumble = $_POST['forced_fumble'];
        $fumble_recovery= $_POST['fumble_recovery'];


    if($name !=''||$team !=''){
        //Insert Query of SQL
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
    mysqli_query($connection, $query);
    echo "<td><a href=admin.php?href=AddPlayer.php>Player Added  </a></td>";
    }
    else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    echo "<td><a href=AddPlayer.php>Go Back </a></td>";
    
    }
    }
    mysqli_close($connection); // Closing Connection with Server
 ?>

