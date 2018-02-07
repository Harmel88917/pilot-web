<?php include('sql/functions.php') ?>

<!-- Navbar-->
<?php include("layout/nav_bar.php"); ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><font size="" color="#007bff">Contact <small>Me</small></font></h1>

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-12 mb-4">
			<p> Contact me today, and get reply with in 24 hours!</p>
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