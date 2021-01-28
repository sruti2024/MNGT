<?php
// Include config file
require_once "cores/config.php";
$string = $_SERVER['QUERY_STRING'];
$string_check = substr($string,0,3);
$string_checker = "url";
if($string_check == $string_checker){
    $ref_url = substr($string,4,500);
}
else {
    $ref_url = '/employee.php';
}
$str_len = strlen($ref_url);
$fixed_len = 0;
if($str_len == $fixed_len){
    $page = "employee.php";
}
else{
    $page = "https://pick-a-bag.000webhostapp.com".$ref_url."";
}
ini_set('session.gc_maxlifetime', 86400);
session_set_cookie_params(86400);
# Enable session garbage collection with a .01% chance of
# running on each session_start()
ini_set('session.gc_probability', 0);
ini_set('session.gc_divisor', 100);
# Start the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["classio"]) && $_SESSION["classio"] === true){
    header("location: ".$page."");
    exit;
}
 
// Define variables and initialize with empty values
$email_id = $password = "";
$email_id_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email_id is empty
    if(empty(trim($_POST["email_id"]))){
        $email_id_err = "Please enter email_id.";
    } else{
        $email_id = trim($_POST["email_id"]);
        $ref_url = trim($_POST["url"]);
        }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_id_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT u_id, email_id, password, l_name, f_name, phone, role FROM user_tbl WHERE email_id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email_id);
            
            // Set parameters
            $param_email_id = $email_id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                echo mysqli_stmt_num_rows($stmt) ;
                // Check if email_id exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) >= 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $u_id, $email_id, $hash_password, $l_name, $f_name, $phone, $role);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hash_password)){   
                            session_start();
                            $_SESSION["classio"] = true;
                            $_SESSION["u_id"] = $u_id;
                            $_SESSION["email_id"] = $email_id;    
							$_SESSION["role"] = $role;
							$_SESSION["l_name"] = $l_name;	
							$_SESSION["f_name"] = $f_name;	
							$_SESSION["phone"] = $phone;
							$page = "https://pick-a-bag.000webhostapp.com".$ref_url."";
							
                            // Redirect user to welcome page
                            header("location: ".$page."");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if email_id doesn't exist
                    $email_id_err = "No account found with that email_id.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classio</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
</head>

<body>
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="index - Copy.php" method="post">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" name="email_id" placeholder="Mail ID" autofocus>
          <span class="help-block"><?php echo $email_id_err; ?></span>
          <br>
          <input type="password" class="form-control" name="password" placeholder="Password">
          <span class="help-block"><?php echo $password_err; ?></span>
          <label class="checkbox">
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label>
            <input type="text" name="url" id="url" value="<?php echo $ref_url?>" placeholder="url" hidden>
          <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
          <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="signup.php">
              Create an account
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
