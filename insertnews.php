
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "brikks");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security



$email = $mysqli->real_escape_string($_REQUEST['email']);



 
// Attempt insert query execution
$sql = "INSERT INTO newsletter (email) VALUES ( '$email')";


 






	
/*if($mysqli->query($sql) === true){
  
echo "Registration successful";

} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

 */
if($mysqli->query($sql) === true  ){
	//echo "<script>alert('Registration successful');</script>";
 header("Location:logindex.php");

}
// Close connection
$mysqli->close();



?>