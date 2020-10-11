	<?php include "conn.php"; ?>
	<style type="text/css">

		.floating-div{
			position: fixed;
		    top: 38vh;
		    background: #85DBFF;
		    padding: 10px 20px 30px;
		    text-align: center;
		    align-items: center;
		    color: white;
		    transform: rotate(270deg);
		    right: -85px;
		    cursor: pointer;
		}
		.floating-button{
			color:#171717;

		}
		.floating-button:hover{
			color:#171717;
			text-decoration: none;
		}
		.floating-div:hover{
			padding: 15px 20px;
			transition:.3s ease;
		}
	</style>
	<!-- Load page -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	
	<!-- NAVBAR SECTION -->
	<div class="navbar navbar-main navbar-fixed-top">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
						<div class="info">
							<div class="info-item">
								<span class="fa fa-phone"></span> Phone +91 9859091091, +91 9761088631
							</div>
							<div class="info-item">
								<span class="fa fa-envelope-o"></span> <a href="mailto:laprestigelaundry@gmail.com" title="">Email: laprestigelaundry@gmail.com</a>
							</div>
							
						</div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
						<div class="top-sosmed pull-right">
							<a href="#" title=""><span class="fa fa-facebook"></span></a>
							<a href="#" title=""><span class="fa fa-twitter"></span></a>
							<a href="#" title=""><span class="fa fa-instagram"></span></a>
							<a href="#" title=""><span class="fa fa-pinterest"></span></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<!--a class="navbar-brand" href="index.html"><img src="images/logo_blue.png" alt="" /></a-->
				<a class="navbar-brand" href="index.php"><img src="assets/img/logo/logo2.png" alt="" /></a>
				
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<!--li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="index.html">Homepage Default</a></li>
						<li><a href="index2.html">Homepage Sliders</a></li>
					  </ul>
					</li-->
					<li><a href="<?php echo $path; ?>about.php">ABOUT</a></li>
					<li><a href="<?php echo $path; ?>services.php">SERVICES</a></li>
					<li><a href="<?php echo $path; ?>pricing.php">PRICING</a></li>
					<li><a href="<?php echo $path; ?>faq.php">FAQ</a></li>
					<li><a href="<?php echo $path; ?>blog.php">BLOG</a></li>
					<li><a href="<?php echo $path; ?>contact.php">CONTACT</a></li>
					<li><a href="<?php echo $path; ?>partner-with-us.php">PARTNER WITH US</a></li>
				</ul>
			</div>
		</div>
    </div>