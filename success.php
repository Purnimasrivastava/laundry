<?php
if(isset($_POST['pickup_submit'])){
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	//$headers .= 'From: <webmaster@example.com>' . "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";

	$msg = 'Hi,<br>User Name : '.$_POST['pickup_name'].', Contact Number : '. $_POST['pickup_phone'].' booked a pickup appointment from "'.$_POST['area'].'"' ."<br> User's address: ".$_POST['pickup_address']."<br> Appointment time: " .$_POST['pickup_time']."<br><br><br>Thankyou";

	mail("laprestigelaundry@gmail.com","Schedule For Pickup",$msg,$headers);
	?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  
<!-- Mirrored from 138.68.248.212/demo/laundryes/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Aug 2020 13:19:50 GMT -->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success</title>
    <meta name="description" content="Laundryes - ">
    <meta name="keywords" content="laundry, multipage, business, clean, bootstrap">
    
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	<!-- ==============================================
	CSS
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	
	
	
	<!-- ==============================================
	Google Fonts
	=============================================== -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900' rel='stylesheet' type='text/css'>
	
	
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	
    <script type="text/javascript" src="js/modernizr.min.js"></script>
	
</head>

<body>
	
	<?php include "template/header.php" ; ?>

 
	<!-- BANNER ROTATOR -->
	<div class="section subbanner" style="background:url('images/slide_page.jpg') no-repeat center center;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="caption">
						<h3>Thank You</h3>
						<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li class="active">Thank You</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	
	<!-- ABOUT SECTION -->
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">Thankyou!<br><br>Our Team will get back to you soon!</h2>
						<p class="sublead"></p>
					</div>
				</div>
			</div>
			
			
			
		</div>
	</div>
	
		
	<?php include "template/footer.php";?>
	
	
	
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>
	<script type='text/javascript' src='js/jqBootstrapValidation.js'></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
	
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			setTimeout(function(){ 
				window.location.href= 'index.php'
			 }, 5000);
		})
	</script>
</body>

<!-- Mirrored from 138.68.248.212/demo/laundryes/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Aug 2020 13:19:57 GMT -->
</html>
<?php
}

if(isset($_POST['contact_submit'])){
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	//$headers .= 'From: <webmaster@example.com>' . "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";

	$msg = 'Hi,<br>User Name : '.$_POST['name'].', Contact Number : '. $_POST['phone'].', Email : '. $_POST['email'].' wanted to contact us. "'."<br> User's address: ".$_POST['address'].", ".$_POST['zip']."<br> User's Message : " .$_POST['message']."<br><br><br>Thankyou";

	mail("laprestigelaundry@gmail.com","Contact Us",$msg,$headers);
	?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  
<!-- Mirrored from 138.68.248.212/demo/laundryes/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Aug 2020 13:19:50 GMT -->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success</title>
    <meta name="description" content="Laundryes - ">
    <meta name="keywords" content="laundry, multipage, business, clean, bootstrap">
    
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	<!-- ==============================================
	CSS
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	
	
	
	<!-- ==============================================
	Google Fonts
	=============================================== -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900' rel='stylesheet' type='text/css'>
	
	
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	
    <script type="text/javascript" src="js/modernizr.min.js"></script>
	
</head>

<body>
	
	<?php include "template/header.php" ; ?>

 
	<!-- BANNER ROTATOR -->
	<div class="section subbanner" style="background:url('images/slide_page.jpg') no-repeat center center;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="caption">
						<h3>Thank You</h3>
						<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li class="active">Thank You</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	
	<!-- ABOUT SECTION -->
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">Thankyou!<br><br>Our Team will get back to you soon!</h2>
						<p class="sublead"></p>
					</div>
				</div>
			</div>
			
			
			
		</div>
	</div>
	
		
	<?php include "template/footer.php";?>
	
	
	
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>
	<script type='text/javascript' src='js/jqBootstrapValidation.js'></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
	
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			setTimeout(function(){ 
				window.location.href= 'index.php'
			 }, 5000);
		})
	</script>
</body>

<!-- Mirrored from 138.68.248.212/demo/laundryes/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Aug 2020 13:19:57 GMT -->
</html>
<?php
}

if(isset($_POST['partner_submit'])){
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	//$headers .= 'From: <webmaster@example.com>' . "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";

	$msg = 'Hi,<br>User Name : '.$_POST['name'].', Contact Number : '. $_POST['phone'].', Email : '. $_POST['email'].' wanted to be a Partner With Us. "'."<br> User's City: ".$_POST['city'].", User's Company ".$_POST['company']." <br> User's Message : " .$_POST['message']."<br><br><br>Thankyou";

	mail("laprestigelaundry@gmail.com","Partner With Us",$msg,$headers);
	?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  
<!-- Mirrored from 138.68.248.212/demo/laundryes/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Aug 2020 13:19:50 GMT -->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success </title>
    <meta name="description" content="Laundryes - ">
    <meta name="keywords" content="laundry, multipage, business, clean, bootstrap">
    
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	<!-- ==============================================
	CSS
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	
	
	
	<!-- ==============================================
	Google Fonts
	=============================================== -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900' rel='stylesheet' type='text/css'>
	
	
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	
    <script type="text/javascript" src="js/modernizr.min.js"></script>
	
</head>

<body>
	
	<?php include "template/header.php" ; ?>

 
	<!-- BANNER ROTATOR -->
	<div class="section subbanner" style="background:url('images/slide_page.jpg') no-repeat center center;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="caption">
						<h3>Thank You</h3>
						<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li class="active">Thank You</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	
	<!-- ABOUT SECTION -->
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">Thankyou!<br><br>Our Team will get back to you soon!</h2>
						<p class="sublead"></p>
					</div>
				</div>
			</div>
			
			
			
		</div>
	</div>
	
		
	<?php include "template/footer.php";?>
	
	
	
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>
	<script type='text/javascript' src='js/jqBootstrapValidation.js'></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
	
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			setTimeout(function(){ 
				window.location.href= 'index.php'
			 }, 5000);
		})
	</script>
</body>

<!-- Mirrored from 138.68.248.212/demo/laundryes/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Aug 2020 13:19:57 GMT -->
</html>
<?php
}
?>