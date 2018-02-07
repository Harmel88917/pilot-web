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
	<?php include_once('view_users.php');  ?>
	
		<body background="../Images/background.jpg">
			<div class="header">
				<h2>Edit user account</h2>
				<font size="4" color="yellow">Edit user <?php echo $row["username"]; ?> </font>
			</div>
			
			<form action = "../sql/con_edit_user.php" method = "POST">

				<?php echo display_error(); ?>

				<div class="input-group">
					<label>Username</label>
					<input type="text" name="username" value="<?php echo $row["username"]; ?>">
				</div>
				<div class="input-group">
					<label>Email</label>
					<input type="email" name="email" value="<?php echo $row["email"]; ?>">
				</div>
				<div class="input-group">
					<label>User type</label>
					<select name="user_type" id="user_type" >
						<option value=""></option>
						<option value="admin">Admin</option>
						<option value="user">User</option>
					</select>
				</div>
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="password_1">
				</div>
				<div class="input-group">
					<label>Confirm password</label>
					<input type="password" name="password_2">
				</div>
				<div class="input-group">
					<button type="submit" class="btn" name="register_btn"> Edit User</button>
				</div>
			</form>
						
		
		<br>
		<div id = "content" align = "center">
			<font size="4">
			<a href = "view_users.php">Close Window</a></font>
			</div>
	</body>
</html>