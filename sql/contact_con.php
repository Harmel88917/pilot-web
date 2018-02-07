<?php 

require_once ("con_db.php");

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
	
include("con_db.php");

$sql = "INSERT INTO contacts (name,email,phone,message)
VALUES ('".$name."','".$email."','".$phone."','".$message."')";

if ($connect->query($sql) === TRUE) {
    echo "Sending successful."."<br />"."Thank you for sending us a message, we will try to get you back soon."."<br /><br />";

	
?>
<br/>
<br/>
<a href="../contact.php">Go back</a>
<?php
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();	
?>
