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
		<body>
		<table align = "center" border = "0" style = "border-collapse: collapse; width:100%;" >
			<tr>
				<td colspan = "21" align = "left" valign = "bottom" bgcolor = "#003366">
					<a href = "index.php">
						<button class="btn btn-primary" id="sendMessageButton">Close Window</button>
					<a/>
				</td>
			</tr>
			<tr>
				<td colspan = "21" align = "center" valign = "top" bgcolor = "#003366">
				<strong><br/><br/>
					<font color = "white" size = "10"  ><p>LIST OF USERS REGISTERED IN THE SYSTEM </p></font>
				</strong><br/><br/>
				</td>
			</tr>
		</table>
		
		<?php
		include_once('../sql/con_db.php');
		$spot_user = "SELECT id, username, email, user_type, password FROM users";
		$result = $connect->query($spot_user);
		?>
		
					<table align = "center" border = "1" style = "border-collapse: collapse" width="100%" bgcolor = "#0080c5">
						<tr bgcolor="#003366" >
						<th >User ID</th>
						<th >Username</th>
						<th >Email</th>
						<th >User type</th>
						<th >Password</th>
						<th >Edit user</th>
						<th >Delete user</th>
						</tr>
					<?php

					while($row = $result->fetch_assoc()){
					?>
						<tr align = "center">
							<td><?php echo $row["id"]; ?></td>
							<td><?php echo $row["username"]; ?><br />
							<td><?php echo $row["email"]; ?></td>
							<td><?php echo $row["user_type"]; ?></td>
							<td><?php echo $row["password"]; ?></td>
							
							<td align = "center">
								<!-- Edit Link Starts-->
								<img width = "30px" height = "25px" src = "../img/logo/edit.png" title = "edit user"/>
								<!-- Edit Link Ends-->
							</td>
							<td align = "center">
								<!-- Delete Link Starts-->
								<a href = "delete_user.php?id=<?php echo $row["id"]; ?>" OnClick = "return confirm('Are you sure you want to delete this user * <?php echo $row["username"]; ?> * in the database?')" 
								title = "Delete user"> <img width = "30px" height = "25px" src = "../img/logo/delete.jpg" /></a>
								<!-- Delete Link Ends-->
							</td>
						</tr>
					
						<?php
					}
					?>
			
				<?php
								
					?>
						
				</table>
	</body>
</html>
					