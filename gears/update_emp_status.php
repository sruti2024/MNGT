<?php
$em_id = htmlspecialchars($_POST["em_id"]);
$new_stat = htmlspecialchars($_POST["new_stat"]);

$link = mysqli_connect("localhost", "id15286122_classio", "ITurs*Db_1123", "id15286122_classiodb"); 

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$em_id = mysqli_real_escape_string($link, $_REQUEST['em_id']);
$new_stat = mysqli_real_escape_string($link, $_REQUEST['new_stat']);

$username = ""; 
$password = ""; 
$database = ""; 
$mysqli = new mysqli("localhost", $username, $password, $database); 

     $sql = "UPDATE employee SET status='$new_stat' WHERE emp_id='$em_id'";
     
if(mysqli_query($link, $sql)){
    
   header("location: ../employee.php");
    
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
?>
