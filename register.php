<?php include('sql/functions.php') ?>


<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<title> Jay|SignUP </title>
	
	<!-- Bootstrap core CSS -->
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles-->
    <link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	
		<div class="header">
			<h2>Register Form</h2><br/>
			<a class="nav-link" href="index.php"><font color="white" size="3"> Go back</font></a>
		</div>
		
		<form method="post" action="register.php">
			<?php echo display_error(); ?>

			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email" value="<?php echo $email; ?>">
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
				<button type="submit" class="btn btn-primary" name="register_btn">Register</button>
			</div>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
	
</body>
</html>