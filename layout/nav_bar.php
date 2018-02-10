
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CapJ|Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!-- Custom styles-->
    <link href="css/modern-business.css" rel="stylesheet">
	<link href="css/jaay.css" rel="stylesheet">
    <style>
    i {
    font-size : 12px;
    padding-right: 10px;
    color: #007bff;
}


/* Footer */
.footer {
    position: relative;
    background-color: #092746;
    color: #fff;
    padding: 95px 0 50px;
    font-size:16px;
}
.footer p {
    line-height:26px;
    color : #fff;
}
.footer h5 {
    font-size: 22px;
    font-weight: 700;
    color: #007bff  ;
    position: relative;
    padding-bottom: 16px;
}
.footer h5:after {
    content: '';
    display: block;
    margin: 5px 0 0;
    width: 40%;
    height: 1px;
    background-color: #1e1d22 ;
}

.footer ul {
    list-style: none;
    line-height:35px;
    margin: 0px;
    color:#fff;
    
}
.footer a {
    color:#fff ;
   
}
.footer a:hover {
    color: #007bff ;
}

/* Footer Logo */
.foot-logo {
    margin: 0px 0px 18px 0px;
    padding: 0;
}

/*footer bottom */
.footer-bottom {
    padding-top: 10px;
    padding-bottom: 25px;
    border-top: 1px solid #2f2f33 ;
    background: #1e1d22  ;
    
}
.copyright-text p {
    color: #7d7975;
    margin-top: 18px;
    margin-bottom: 0;
    font-size:15px;
}

.copyright-text a {
    color: #7d7975;
    margin: 0px 10px 0px 10px;
    
}
.copyright-text a:hover {
    color: #007bff  ;
    
    
}
/* Social Icons */

.social-icons{
    
    margin: 0;
    padding: 0;
    font-size : 10px;
}

.social {
    margin:7px 7px 7px 0px;
    color:#fff;
}


#social-fb:hover {
     color: #3B5998;
     transition:all .25s;
 }
 #social-tw:hover {
     color: #4099FF;
     transition:all .25s;
 }
 #social-gp:hover {
     color: #d34836;
     transition:all .25s;
 }
 #social-em:hover {
     color: #f39c12;
     transition:all .25s;
 }
    </style>
			
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo/capture.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" 
		aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
				  <a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="portfolio.php">Portfolio</a>
				</li>
				
				<!-- Login form starts here -->
				<li class="dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Login<span class="caret"></span></a>
				  <ul class="dropdown-menu login-panel">
					<li>
						<div class="dropdown-header ">
							<span class="login-header color-blue">Log In</span>
							 
						</div>
						<div class="clearfix"></div>
						<div style="padding: 8px;">
							<form id="loginform" action="index.php" role="form"  method="POST">
								<?php echo display_error(); ?>
								<div style="margin-bottom: 10px" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
									<!-- USERNAME OR EMAIL ADDRESS -->
									<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" pattern="[a-zA-Z0-9]{5,}" title="Minimum 5 letters or numbers." oninvalid="this.setCustomValidity('Enter User Name Here')" oninput="setCustomValidity('')" required>                                        
								</div>
								<div style="margin-bottom: 10px" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
									<!--  PASSWORD  -->
									<input id="login-password" type="password" class="form-control" name="password" placeholder="password" pattern=".{5,}" title="Minmimum 5 letters or numbers." oninvalid="this.setCustomValidity('Enter a password')" oninput="setCustomValidity('')" required>
								</div>
								<div class="left-text">
									<label><input id="login-remember" type="checkbox" name="remember" value="1"> Remember me</label>
								</div>
								<div style="margin-top:10px" class="form-group">
									<!-- Button -->
									<div class="left-text">
									  <button type="submit" class="btn btn-primary" name="login_btn">Login</button><br/><br/>  
									  &nbsp; Not yet a member click <a href="register.php"> Register</a>
									</div>
								</div>  
							</form>
						</div>                
					</li>
				  </ul>
				</li>
				<!-- login form ends here-->

				<!-- Register form starts here -->
				<li class="dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Register<span class="caret"></span></a>
				  <ul class="dropdown-menu login-panel">
					<li>
						<div class="dropdown-header ">
							<span class="login-header color-blue">Log In</span>
							 
						</div>
						<div class="clearfix"></div>
						<div style="padding: 8px;">
							<form id="loginform" action="index.php" role="form"  method="POST">
								<?php echo display_error(); ?>
								<div style="margin-bottom: 10px" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
									<!-- USERNAME OR EMAIL ADDRESS -->
									<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" pattern="[a-zA-Z0-9]{5,}" title="Minimum 5 letters or numbers." oninvalid="this.setCustomValidity('Enter User Name Here')" oninput="setCustomValidity('')" required>                                        
								</div>
								<div style="margin-bottom: 10px" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
									<!--  PASSWORD  -->
									<input id="login-password" type="password" class="form-control" name="password" placeholder="password" pattern=".{5,}" title="Minmimum 5 letters or numbers." oninvalid="this.setCustomValidity('Enter a password')" oninput="setCustomValidity('')" required>
								</div>
								<div class="left-text">
									<label><input id="login-remember" type="checkbox" name="remember" value="1"> Remember me</label>
								</div>
								<div style="margin-top:10px" class="form-group">
									<!-- Button -->
									<div class="left-text">
									  <button type="submit" class="btn btn-primary" name="login_btn">Login</button><br/><br/>  
									  &nbsp; Not yet a member click <a href="register.php"> Register</a>
									</div>
								</div>  
							</form>
						</div>                
					</li>
				  </ul>
				</li>
				<!-- Register form ends here-->
				
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
      </div>
    </nav>