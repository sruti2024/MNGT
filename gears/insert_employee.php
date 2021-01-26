<?php
$emp_id = htmlspecialchars($_POST["emp_id"]);
$f_name = htmlspecialchars($_POST["f_name"]);
$l_name = htmlspecialchars($_POST["l_name"]);
$age = htmlspecialchars($_POST["age"]);
$state = htmlspecialchars($_POST["state"]);
$address = htmlspecialchars($_POST["address"]);
$role=htmlspecialchars($_POST["role"]);
$team = htmlspecialchars($_POST["team"]);
$education = htmlspecialchars($_POST["education"]);
$status = htmlspecialchars($_POST["status"]);
$timestamp = htmlspecialchars($_POST["timestamp"]);
$email = htmlspecialchars($_POST["email"]);
$phone = htmlspecialchars($_POST["phone"]);

$link = mysqli_connect("localhost", "id15286122_classio", "ITurs*Db_1123", "id15286122_classiodb"); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$emp_id = mysqli_real_escape_string($link, $_REQUEST['emp_id']);
$f_name = mysqli_real_escape_string($link, $_REQUEST['f_name']);
$l_name = mysqli_real_escape_string($link, $_REQUEST['l_name']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$state= mysqli_real_escape_string($link, $_REQUEST['state']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$role= mysqli_real_escape_string($link, $_REQUEST['role']);
$team = mysqli_real_escape_string($link, $_REQUEST['team']);
$education= mysqli_real_escape_string($link, $_REQUEST['education']);
$status = mysqli_real_escape_string($link, $_REQUEST['status']);
$timestamp = mysqli_real_escape_string($link, $_REQUEST['timestamp']);
$salary=0000;
$email=mysqli_real_escape_string($link, $_REQUEST['email']);
$phone=mysqli_real_escape_string($link, $_REQUEST['phone']);
$emp_id=$emp_id +1;
$username = ""; 
$password = ""; 
$database = ""; 
$mysqli = new mysqli("localhost", $username, $password, $database); 

     $sql = "INSERT INTO `employee`(`emp_id`, `f_name`, `l_name`, `age`, `state`, `address`,`role`, `team`, `salary`,`email`, `phone`,`education`, `status`, `timestamp`) VALUES ('".$emp_id."', '".$f_name."', '".$l_name."', '".$age."', '".$state."', '".$address."','".$role."', '".$team."','".$salary."','".$email."', '".$phone."','$education', '$status', '$timestamp')";
     // Upload file
    
     
if(mysqli_query($link, $sql)){
    
   header("location: ../employee.php");
    
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
?>
