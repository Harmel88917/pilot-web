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
	
	<title>Admin|Home</title>
	
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

<body><br><br><br><br><br>
	<div class="header">
		<h2>Admin - Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info ">
			<img src="../img/logo/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br><br>
						<a href="../index.php?logout='1'" style="color: red;"><button class="btn btn-default" > LOGOUT</button></a> &nbsp; 
						<a href="create_user.php"> <button class="btn" name="register_btn"> + Add User</button></a> &nbsp; 
					    <a href="message_views.php"><button class="btn" name="register_btn"> + Received Messages</button></a> &nbsp;
					    <a href="view_users.php"><button class="btn" name="register_btn"> + View Users</button></a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>