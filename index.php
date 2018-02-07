<?php include('sql/functions.php') ?>

<!-- Navbar-->
<?php include("layout/nav_bar.php"); ?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/boeing7.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Get Started</a></p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/boein0.png')">
            <div class="carousel-caption d-none d-md-block">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Get Started</a></p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/boeing9.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Get Started</a></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4"><font color="#007bff"><center>Welcome our Services</center></font></h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Kikanda</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Bitoyo</h4>
            <div class="card-body">
              <p class="card-text">
			  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, 
			  nam perspiciatis natus commodi similique totam consectetur praesentium molestiae 
			  atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Binkubala</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Features Section -->
		<div class="row">
			<div class="col-lg-6"><br/><br/>
			  <h2><font size="" color="#007bff">Captain Jay</font></h2>
			  <strong><abbr title="Vision">Vision:</abbr></strong>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, 
			  omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora 
			  minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
			
			  <strong><abbr title="Mission">Mission:</abbr></strong>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, 
			  omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora 
			  minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
			</div>
			<div class="col-lg-6">
			  <img class="img-fluid rounded" src="img/boein0.png" alt="">
			</div>
		</div>
      <!-- /.row -->
	</div>
    <!-- /.container -->

	
    <!-- Footer
    ================================================== -->
    <?php include("layout/footer.php"); ?>