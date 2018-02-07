<?php 
include('../sql/functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>


<!DOCTYPE html>
<html>
	<head>
	   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<title>Admin</title>
	
	<!-- Bootstrap core CSS -->
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles-->
    <link rel="stylesheet" href="../css/style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
	</head>
	
	<body>
		<table align = "center" border = "0" style = "border-collapse: collapse" width= "100%" >
			<tr>
				<td colspan = "" align = "left" valign = "top" bgcolor = "#003366">
					<a href = "index.php">
						<button class="btn btn-primary" id="sendMessageButton">Close Window</button>
					<a/>
				</td>
			</tr>
			<tr>
				<td colspan = "" align = "center" valign = "top" bgcolor = "#003366">
				<strong><br/><br/>
					<font color = "white" size = "10"  ><p>THE LIST OF RECIEVED MESSAGES </p></font>
				</strong><br/><br/>
				</td>
			</tr>
		</table>
			
		<?php
		include_once('../sql/con_db.php');
		$spot_messages = "SELECT name, email, phone, message FROM contacts";
		$result = $connect->query($spot_messages);
		?>
		<table align = "center" border = "1" style = "border-collapse: collapse" width="100%" bgcolor = "#0080c5">
			
			<tr bgcolor="#003366" >
			<td>Name </td>
			<td>email</td>
			<td>Phone</td> 
			<td>Message</td>
			<td>Delete Message</td>
			</tr>
		<?php
			if($result->num_rows > 0 ){
			while($row = $result->fetch_assoc()){
		?>
			
		<tr>
			<td><?php echo $row["name"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["phone"]; ?></td>
			<td><?php echo $row["message"]; ?></td>
			
			<td align = "center">
				<!-- Delete Link Starts-->
				<a href = "delete_message.php?name=<?php echo $row["name"]; ?>" OnClick = "return confirm('are you sure you want to delete this <?php echo $row["name"]; ?> from the database?')" 
				title = "Delete messages<?php echo $row["name"]; ?>"><center><img width = "30px" height = "25px" src = "../img/logo/delete.jpg" /><center></a>
				<!-- Delete Link Ends-->
			</td>
		</tr>
		
		<?php
			}
		?>
			
			<?php
		}
			?>
		</table>							
	</body>
</html>
	
	