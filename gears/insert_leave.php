<?php
$em_id = htmlspecialchars($_POST["em_id"]);
$f_name = htmlspecialchars($_POST["f_name"]);
$l_name = htmlspecialchars($_POST["l_name"]);
$age = htmlspecialchars($_POST["age"]);
$state = htmlspecialchars($_POST["state"]);
$address = htmlspecialchars($_POST["address"]);
$education = htmlspecialchars($_POST["education"]);
$role= htmlspecialchars($_POST["role"]);
$team = htmlspecialchars($_POST["team"]);
$status = htmlspecialchars($_POST["status"]);
$timestamp = htmlspecialchars($_POST["timestamp"]);

$link = mysqli_connect("localhost", "id15286122_classio", "ITurs*Db_1123", "id15286122_classiodb"); 

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$em_id = mysqli_real_escape_string($link, $_REQUEST['em_id']);
$f_name = mysqli_real_escape_string($link, $_REQUEST['f_name']);
$l_name = mysqli_real_escape_string($link, $_REQUEST['l_name']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$education= mysqli_real_escape_string($link, $_REQUEST['education']);
$role= mysqli_real_escape_string($link, $_REQUEST['role']);
$team = mysqli_real_escape_string($link, $_REQUEST['team']);
$status = mysqli_real_escape_string($link, $_REQUEST['status']);
$timestamp = mysqli_real_escape_string($link, $_REQUEST['timestamp']);

$username = ""; 
$password = ""; 
$database = ""; 
$mysqli = new mysqli("localhost", $username, $password, $database); 

     $sql = "INSERT INTO `leave_tbl`(`em_id`, `f_name`, `l_name`, `age`, `role`, `state`, `address`,`education`, `team`, `status`, `timestamp`) VALUES ('".$em_id."','".$f_name."', '".$l_name."', '".$age."', '".$role."', '".$state."','".$address."','".$education."', '".$team."',  '$status', '$timestamp')";
     // Upload file
    
     
if(mysqli_query($link, $sql)){
    
   $msg = "I wish to request for leave from $date_from to $age due to $reason . ";
    mail($role,"Leave Application",$msg);
   header("location: ../index - Copy.php");
    
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
?>
