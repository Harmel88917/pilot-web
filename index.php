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

      <h1 class="my-4"><font color="#007bff"><center>Welcome to Captain Jouvain</center></font></h1>

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
			<div class="col-lg-6">
			  <h2><font size="" color="#007bff"></font></h2>
			  <strong><abbr title="Vision"><font size="4" color="#007bff">Vision:</font></abbr></strong>
			  <p><font size="4" color="#007bff">*</font> To keep the flame burning within us & to stand firm for what we believe into.<br/>
        <font size="4" color="#007bff">*</font> To impact lives ( from all ages ) through what we face as we are growing our wings on your way higher<br />
        <font size="4" color="#007bff">*</font> To promote the appreciation of diversity in the way we are singularly gifted and rise up possibilities of achieving dreams ...</p>
			
			  <strong><abbr title="Mission"><font size="4" color="#007bff">Mission:</font></abbr></strong>
			  <p> This website mainly focuses on the aviation industry. It has purpose of raising awareness of the minimun labour in this industry. It aims to impact people and change lives across the globe. We also aspirento serve and empower our community to bring about the change we want to see around us and help one another reach greatness.</p>
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