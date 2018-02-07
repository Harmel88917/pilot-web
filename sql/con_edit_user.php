<?php
if (isset($_POST["edit_account"])) {

$data_root_path = dirname("../../");	
require_once $data_root_path."con_db.php";


// create short variable names

$id = $_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$user_type = $_POST["user_type"];
$password = $_POST["password"];
$hashed_password = md5($password);


//INSERT INTO table_name (column1, column2, column3,...) VALUES (value1, value2, value3,...) ;

$update_user = "UPDATE users SET username = '".$username."',  email = '".$email."', 
user_type = '".$user_type."',password = '".$hashed_password." WHERE id = ".$id."";


if ($connect->query($update_user) === TRUE){
header("Location: ../admin/view_users.php");
exit();
} else {
    echo "Error: " . $update_user . "<br>" . $connect->error;
}
}
?>
