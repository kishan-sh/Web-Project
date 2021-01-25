
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

$email = $mysqli->real_escape_string($_REQUEST['email']);
$mobile = $mysqli->real_escape_string($_REQUEST['mobile']);


$dish = $mysqli->real_escape_string($_REQUEST['dish']);

$feed = $mysqli->real_escape_string($_REQUEST['feedback']);



 
// Attempt insert query execution
$sql = "INSERT INTO feedback (fname,lname,email,mobile,dish,feedback) VALUES ('$firstname','$lastname', '$email','$mobile', '$dish','$feed')";


 






	
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

else {

	echo "Fail";
}
// Close connection
$mysqli->close();



?>