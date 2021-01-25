
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "brikks");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security

$firstname = $mysqli->real_escape_string($_REQUEST['fname']);

$lastname = $mysqli->real_escape_string($_REQUEST['lname']);

$contactno = $mysqli->real_escape_string($_REQUEST['mobile']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$password = $mysqli->real_escape_string($_REQUEST['password']);



 
// Attempt insert query execution
$sql = "INSERT INTO users (fname,lname,email,password,mobile) VALUES ('$firstname','$lastname', '$email','$password','$contactno')";


 






	
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