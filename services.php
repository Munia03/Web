<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Instruction an Education Category Bootstrap Responsive Web Template | About :: w3layouts</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Instruction Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">


</head>

<body>
<!-- header -->
<div class="header-1">
	<div class="content white agile-info">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">
						<h1><span class="fa fa-book" aria-hidden="true"></span> Research Aid <label>Education</label></h1>
					</a>
				</div>
				<!--/.navbar-header-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
							<li><a href="index.html" class="effect-3">Home</a></li>
							<li><a href="about.html" class="effect-3">About</a></li>
							<li class="active"><a href="services.html" class="effect-3">Resources</a></li>
							<!--<li><a href="gallery.html" class="effect-3">Profile</a></li>-->
							<!--<li class="dropdown">-->
							<!--<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Pages <b class="caret"></b></a>-->
							<!--<ul class="dropdown-menu">-->
							<!--<li><a href="codes.html">Codes</a></li>-->
							<!--<li><a href="icons.html">Icons</a></li>-->
							<!--</ul>-->
							<!--</li>-->
							<li><a href="home.html" class="effect-3">Sign In</a></li>
							<li><a href="#" data-toggle="modal" data-target="#SignupModal" class="effect-3">Sign Up</a></li>
						</ul>
					</nav>
				</div>
				<!--/.navbar-collapse-->
				<!--/.navbar-->
			</div>
		</nav>
	</div>
</div>
<!-- //header -->
<!-- about -->


<?php session_start();
 if (isset($_GET['iot'])) {

	$txt = "Internet of Things (IOT)";
	$_SESSION['type'] =$txt ;
	header("location: resources.php");}


if (isset($_GET['ml'])) {
 
	$txt = "Machine Learning";
	$_SESSION['type'] =$txt ;
	header("location: resources.php");}

if (isset($_GET['ai'])) {
 
	$txt = "Artificial Intelligence (AI)";
	$_SESSION['type'] =$txt ;
	header("location: resources.php");}


if (isset($_GET['data_mining'])) {
 
	$txt = "Data Mining";
	$_SESSION['type'] =$txt ;
	header("location: resources.php");}



if (isset($_GET['net'])) {
 
	$txt = "Networking";
	$_SESSION['type'] =$txt ;
	header("location: resources.php");}

if (isset($_GET['graphics'])) {
 
	$txt = "Graphics";
	$_SESSION['type'] =$txt ;
	header("location: resources.php");}

if (isset($_GET['cloud'])) {
 
	$txt = "Cloud Computing";
	$_SESSION['type'] =$txt ;
	header("location: resources.php");}

if (isset($_GET['fog'])) {
 
	$txt = "Fog Computing";
	$_SESSION['type'] =$txt ;
	header("location: resources.php");}



if (isset($_GET['bio'])) {
 
	$txt = "Bio-informatics";
	$_SESSION['type'] =$txt ;
	header("location: resources.php");}

if (isset($_GET['nlp'])) {
 
	$txt = "Natural Language Processing (NLP)";
	$_SESSION['type'] =$txt ;
	header("location: resources.php");}

if (isset($_GET['robo'])) {
 
	$txt = "Robotics";
	$_SESSION['type'] =$txt ;
	header("location: resources.php");}

if (isset($_GET['mob'])) {
 
	$txt = "Mobile Computing";
	$_SESSION['type'] =$txt ;
	header("location: resources.php");



}
?>


<div class="welcome">
	<div class="container">
		<h3 class="heading-agileinfo">Research Topics<span>  </span></h3>
		<div class="w3ls_news_grids">
		<!--<ul class="footer_grid_list"> -->
			<h3><li><a href="services.php?ai='1'" >Artificial Inteligence (AI)</a></li>
				<li><a <a href="services.php?iot='1'">Internet Of Things (IOT)</a></li>


				<li><a href="services.php?ml='1'" >Machine Learning (ML)</a></li>
				<li><a href="services.php?data_mining='1'" >Data Mining</a></li>
				<li><a href="services.php?net='1'" >Networking</a></li>
				<li><a href="services.php?graphics='1'" >Graphics</a></li>
				<li><a href="services.php?cloud='1'" >Cloud Computing</a></li>
				<li><a href="services.php?fog='1'" >Fog Computing</a></li>
				<li><a href="services.php?mob='1'" >Mobile Computing</a></li>
				<li><a href="services.php?bio='1'" >Bio-informatics</a></li>
				<li><a href="services.php?nlp='1'" >Natural Language Processing (NLP)</a></li>
				<li><a href="services.php?robo='1'" >Robotics</a></li>
				
				<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a>
			<div class="clearfix"> </div>
			</h3>

		</div>

	</div>
</div>
<!-- //about -->

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- skills -->
<script src="js/skill.bars.jquery.js"></script>
<script>
		$(document).ready(function(){

			$('.skillbar').skillBars({
				from: 0,
				speed: 4000,
				interval: 100,
				decimals: 0,
			});

		});
	</script>
<!-- //skills -->
<!-- footer -->
<div class="footer_top_agileits">
		<div class="container">

			<div class="col-md-4 footer_grid">

			</div>


			<div class="col-md-4 footer_grid">
				<h3>Contact Info</h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>8088 USA, Honey block, <span>New York City.</span></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+09187 8088 9436</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- footer -->


	<!-- //sign up modal    //blue: 1da1f2  //pink: ff4f81-->

	<div class="modal about-modal fade" id="SignupModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">

						<h2>Signup </h2>
						<form>
							<div class="lable">
								<div class="col_1_of_2 span_1_of_2">	<input type="text" class="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" id="active"></div>
								<div class="col_1_of_2 span_1_of_2"><input type="text" class="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></div>
								<div class="clear"> </div>
							</div>
							<div class="lable-2">
								<input type="text" class="text" value="your@email.com " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your@email.com ';}">
								<input type="password" class="text" value="Password " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password ';}">
							</div>

							<div class="submit">
								<input type="submit" onclick="myFunction()" value="Create account" >
							</div>
							<div class="clear"> </div>
						</form>
						<!-----//end-main---->




				</div>
			</div>
		</div>
	</div>

	<!-- sign up modal -->
</body>
</html>
