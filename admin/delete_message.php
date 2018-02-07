<?php
//Connection to the database
$data_root_path = dirname("../../");	
require_once $data_root_path."/sql/con_db.php";

$name = $_GET["name"];

// del_patient to delete a record
$del_user = "DELETE FROM contacts WHERE name = '$name' LIMIT 1";

if ($connect->query($del_user) === TRUE) {
header("Location: message_views.php");
exit();
} else {
    echo "Error deleting record: " . $connect->error;
}
?>