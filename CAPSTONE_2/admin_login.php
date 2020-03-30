<?php include('./shared/navigation.php');?>

<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]=== true){
    header("location: admin.php");
    exit;
}
require_once "config.php";
global $link;
$a_password = "";
$email = "";
$email_err = ""; 
$password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email address.";
    } else{
        $email = trim($_POST["email"]);
    }
    if(empty(trim($_POST["a_password"]))){
        $password_err = "Please enter your password.";
    } else{
        $a_password = trim($_POST["a_password"]);
    }
    if(empty($email_err) && empty($password_err)){
        $sql = "SELECT email, a_password FROM user WHERE email = '".$email."'";
    }
        if($stmt = mysqli_prepare($link, $sql)){
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $email, $a_password);
                    if(mysqli_stmt_fetch($stmt)){
                       if((trim($a_password) == trim($a_password))){
                           echo $email." ".$a_password;
                           session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["email"] = $email;
                            header("location: admin.php");
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
        mysqli_close($link);
}
?>
<div style="text-align: center">
    <form class="form-signin" method="post" >
      <h1 class="h3 mb-3 font-weight-normal" id="form-labels"><center>Please sign in</center></h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="searchOne" class="email" placeholder="Email address" required autofocus><br />
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password"  name="a_password" id="searchOne" class="a_password" placeholder="Password" required>
      <div style="white-space:nowrap" class="checkbox mb-3">
        <input type="checkbox" value="remember-me" id="inputRememberMe"/>
        <label for="inputRememberMe">Remember me</label>
      </div>
      <button class="btn btn-primary" type="submit">Sign in</button>
      <br />
    </form>
</div>
   
 