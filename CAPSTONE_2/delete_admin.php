<?php include('./shared/navigation.php');
session_start();
require_once "config.php";
global $link;
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<style>
      #display {
				font-weight: 900;
				color: navy;
			}
			
			.grid-container {
				display: grid;
				grid-template-columns: auto auto;
				
			}
			.grid-item {
				padding: 10px;
				font-size: 30px;
				text-align: center;
			}
			
			
			.button {
				display: inline-block;
				border-radius: 4px;
				background-color: #000080;
				border: none;
				color: #FFFFFF;
				text-align: center;
				font-size: 28px;
				padding: 20px;
				width: 200px;
				transition: all 0.5s;
				cursor: pointer;
				margin: 5px;
			}

		.button span {
				cursor: pointer;
				display: inline-block;
				position: relative;
				transition: 0.5s;
			}

		.button span:after {
				content: '\00bb';
				position: absolute;
				opacity: 0;
				top: 0;
				right: -20px;
				transition: 0.5s;
			}

		.button:hover span {
				padding-right: 25px;
			}

		.button:hover span:after {
				opacity: 1;
				right: 0;
    }
    .button-center {
      text-align: center;
      padding: 15px;
      margin: 15px;
    }
</style>
<?php  
  $admin_set = find_all_admin_names();
  
  function find_all_admin_names() {
	global $link;

    $sql2 = "SELECT * FROM user";
    // echo $sql;
    $result = mysqli_query($link, $sql2);
    return $result;
  } 
/*   if(!empty($_POST['user_ID'])){ 
  $admin =$_POST[$admin['email']];
  echo ($admin);
  }
  $query= "DELETE * FROM user WHERE email= $admin";
  $result2=mysqli_query($link, $query);
  if (!$result2){
	  trigger_error('query failed');
  } */
  $email = "";
  $a_password = "";
  $fname = "";
  $lname = "";
  $address = "";
  $city = "";
  $state = "";
  $last_SSN = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  // sql to delete a record
	$admin2 =$_POST['user_ID'];
  	$sql_delete = "DELETE FROM user WHERE `user_ID` = $admin2";
  
	if (mysqli_query ($link, $sql_delete )) {
		echo '<script> alert("Record deleted successfully");</script>';
    } else {
    echo ("Error deleting record: " . mysqli_error($link));
}
  }
mysqli_close($link);
?>
<a href='admin.php' class="list-group-item list-group-item-action bg-light" style="text-align: center"><strong>Admin Home Page</strong></a>
<form class="delete" name= "user_ID" method="post"> 
    <div style="text-align: center">
        <br><h1 class="h3 mb-3 font-weight-normal" id="form-labels"><strong>Delete an account</strong></h1>
        <select name="user_ID" id="admin">
                <?php while($admin = mysqli_fetch_assoc($admin_set)) { ?>
                    <option value="<?php echo ($admin['user_ID']) ?>"><?php echo($admin['user_ID']) . " " ?><?php echo (trim($admin['email']))?></option>
                <?php } ?>
        </select><br /> <br />
        <button class="button" type="submit"><span>Delete Admin</span></button> <br /> <br /> <br />
		<a href = "<?php $_SERVER['PHP_SELF']; ?>">Refresh</a><br /><br />
        
    </div>
</form>
