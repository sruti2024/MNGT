<?php
$email_id_err = $password_err = "";

$u_id = htmlspecialchars($_POST["u_id"]); 
$email_id = htmlspecialchars($_POST["email_id"]);
$f_name = htmlspecialchars($_POST["f_name"]);
$l_name = htmlspecialchars($_POST["l_name"]);
$phone = htmlspecialchars($_POST["phone"]);
$password_1 = htmlspecialchars($_POST["password"]);
$role = htmlspecialchars($_POST["role"]);
$confirm_password = htmlspecialchars($_POST["confirm_password"]);

$status = htmlspecialchars($_POST["status"]);
$timestamp = htmlspecialchars($_POST["timestamp"]);

$link = mysqli_connect("localhost", "id15286122_classio", "ITurs*Db_1123", "id15286122_classiodb"); 

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$u_id = mysqli_real_escape_string($link, $_REQUEST['u_id']);
$email_id = mysqli_real_escape_string($link, $_REQUEST['email_id']);
$f_name = mysqli_real_escape_string($link, $_REQUEST['f_name']);
$l_name = mysqli_real_escape_string($link, $_REQUEST['l_name']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$password_1 = mysqli_real_escape_string($link, $_REQUEST['password']);
$role = mysqli_real_escape_string($link, $_REQUEST['role']);
$confirm_password = mysqli_real_escape_string($link, $_REQUEST['confirm_password']);
$status = mysqli_real_escape_string($link, $_REQUEST['status']);
$timestamp = mysqli_real_escape_string($link, $_REQUEST['timestamp']);
 
 $count=0;   
$username = ""; 
$password = ""; 
$database = ""; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
    $query121="SELECT COUNT(*) AS count FROM user_tbl WHERE email_id=$email_id";
    if ($result = $mysqli->query($query121)) {
    while ($row = $result->fetch_assoc()) {
			$count = $row["count"]; 
           
}
    $result->free();
} 
if($count>=1)
{$email_id_err="This Email ID is already taken!";}
if($password_1!=$confirm_password )
{$password_err="The two passwords do not match . Pleace enter carefully";}
  // Check extension
  if($password_err=="" && $email_id_err==""){
      $password_1 = password_hash($password_1, PASSWORD_DEFAULT); 
     // Insert record
     $sql = "INSERT INTO `user_tbl`(`u_id`, `email_id`, `f_name`, `l_name`, `phone`, `password`, `role`, `status`, `timestamp`) VALUES ('".$u_id."', '".$email_id."', '".$f_name."', '".$l_name."', '".$phone."', '".$password_1."', '".$role."', '$status', '$timestamp')";
     // Upload file
    
     
if(mysqli_query($link, $sql)){
    
   $msg = "Hello $f_name $l_name,\n Welcome to CLASSIO, You can log in at https://pick-a-bag.000webhostapp.com/index - Copy.php and do not forget to fill in your details in the profile section . \n\n Hope you have a wonderful experience here at CLASSIO .";
    mail($email_id,"Welcome to CLASSIO",$msg);
   header("location: ../index - Copy.php");
    
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

  }
  else
  header("location: ../signup.php?email_id_err=$email_id_err&password_err=$password_err");
?>
