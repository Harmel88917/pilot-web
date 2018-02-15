<?php include('sql/functions.php') ?>

<!-- Navbar-->
<?php include("layout/nav_bar.php"); ?>

    <!-- Page Content -->
    <div class="container">
    <div class="row">
    <div class="col-md-8 footer-one">
	      <!-- Image Header -->
	      <br /><img class="img-fluid rounded mb-4" src="img/boeing9.jpeg" alt="">
	</div>
		<div class="col-md-4 footer-one"><br /><p>Contact details:</p><br />
			<p><strong><abbr title="Phone number">Phone:</abbr></strong>
                +254-720-635-709
            </p>
			<p><strong><abbr title="Email">Email:</abbr></strong>
                <a href="https://www.gmail.com" target="_blank">
				<font color= "">info@captain.com</font></a></p>
            <p><strong><abbr title="Facebook">Facebook:</abbr></strong>
                <a href="http://www.facebook.com/" target="_blank">
				<font color= "">Captain Jaay</font></a>
            </p>
            <p><strong><abbr title="Instagram">Instagram:</abbr></strong>
                <a href="https://www.instagram.com/pilot_jaay/" target="_blank">
				<font color= "">pilot_jaay</font></a>
            </p>
            <p><strong><abbr title="website">Website:</abbr></strong>
                <a href = "contact.php" ><font color= "">www.captainjaay.com</font></a>
            </p>
			<p><strong><abbr title="P.O.BOX">P.O.BOX:</abbr></strong>
                15326 - 00400 Nairobi
            </p>
    	</div>
    
    </div>
      <!-- Page Heading/Breadcrumbs -->
      <h1><font size="" face = "Georgia" color="#007bff"><center>Contact <small><u>Us</u></small></center></font></h1>

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-12 mb-4">
			<p><center>Contact me today, and get reply with in 24 hours!</center></p>
			<form action = "sql/contact_con.php" method = "POST">
				<div class="form-group col-lg-12">
					<div id="success">
					<!-- For success/fail messages -->
					</div>
				</div>
                <div class="row">
                    <div class="form-group col-lg-12">
					 <div id="success">
						<!-- For success/fail messages -->
					</div>
					</div>
				<div class="control-group form-group col-lg-4">
				  <div class="controls">
					<label>Full Name:</label>
					<input type="text" class="form-control" name="name" required >
					<p class="help-block"></p>
				  </div>
				</div>
				
				<div class="control-group form-group col-lg-4">
				  <div class="controls">
					<label>Email Address:</label>
					<input type="email" class="form-control" name="email" required >
				  </div>
				</div>
				
				<div class="control-group form-group col-lg-4">
				  <div class="controls">
					<label>Phone Number:</label>
					<input type="tel" class="form-control" name="phone" required >
				  </div>
				</div>
				
				<div class="control-group form-group col-lg-12">
				  <div class="controls">
					<label>Message:</label>
					<textarea rows="10" cols="100" class="form-control" name="message" required maxlength="999" style="resize:none"></textarea>
				  </div>
				</div>
				<div class="form-group col-lg-12">
					<button type="submit" class="btn btn-primary" id="sendMessageButton" name="Send_Message">Send Message</button>
				</div>
			</div>
                </div>
            </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer
    ================================================== -->
    <?php include("layout/footer.php"); ?>