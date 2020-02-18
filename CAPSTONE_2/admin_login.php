<?php include('./shared/navigation.php');?>

 <?php
//Database connection.
$con = MySQLi_connect(
   "localhost", //Server host name.
   "root", //Database username.
   "", //Database password.
   "ffb_stats" //Database name or anything you would like to call it.
);
//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>

<?php
$email = "";
$password = "";


global $db;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email address.";
    } else{
        $email = trim($_POST["email"]);
    }
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["a_password"]);
    }
        $sql = "SELECT email, a_password FROM admin WHERE email ='".$email."'";
        if($stmt = mysqli_prepare($db, $sql)){
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $email, $actPassword);
                    if(mysqli_stmt_fetch($stmt)){
                       if((trim($password) == trim($actPassword))){
                           echo $email." ".$password;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["email"] = $email;
                            
                        } else{
                            echo "The password you entered was not valid.";
                        }
                    }
                } else{
                    echo  "No account found with that email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($db);
}
?>
<div style="text-align: center">
    <form class="form-signin" method="post" >
      <h1 class="h3 mb-3 font-weight-normal" id="form-labels"><center>Please sign in</center></h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="Email" id="searchOne" class="email" placeholder="Email address" required autofocus><br />
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password"  name="password" id="searchOne" class="password" placeholder="Password" required>
      <div style="white-space:nowrap" class="checkbox mb-3">
        <input type="checkbox" value="remember-me" id="inputRememberMe"/>
        <label for="inputRememberMe">Remember me</label>
      </div>
      <button class="btn btn-primary" type="submit">Sign in</button>
      <br />
    </form>
</div>
    
 