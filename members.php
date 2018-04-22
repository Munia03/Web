<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['sign_out'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.html");
  }
  $current_user = $_SESSION['username'];
  $connect = mysqli_connect("localhost", "root", "", "fairuz");  
 $query = "SELECT * FROM profile WHERE username='$current_user'" ;  
 $result = mysqli_query($connect, $query);
 $row = mysqli_fetch_array($result);
      
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Members</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">

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
    		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style_new.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
							<li><a href="home.html" class="effect-3">Home</a></li>
							<li><a href="s_about.html" class="effect-3">About</a></li>
							<li class="active"><a href="services.php" class="effect-3">Resources</a></li>
				
							<li><a href="home.html" class="effect-3">Profile</a></li>
							<li><a href="resources.php?sign_out='1'" class="effect-3" name="sign_out">Sign Out</a></li>						
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


<div class="welcome">
		<div class="container">
		<h3 class="heading-agileinfo">Group Name<span>  </span></h3>
			
				
				<h3>
						
							
								<li><a href="index_search.php" class="effect-3">Member1</a></li>
								<li><a href="about.html" class="effect-3">Member2</a></li>
								<li><a href="login.php" class="effect-3">Member3</a></li>
								<li><a href="login.php" class="effect-3">Member4</a></li>
								<!--<li><a href="gallery.html" class="effect-3">Profile</a></li>-->
								<!--<li class="dropdown">-->
								<!--<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Pages <b class="caret"></b></a>-->
								<!--<ul class="dropdown-menu">-->
								<!--<li><a href="codes.html">Codes</a></li>-->
								<!--<li><a href="icons.html">Icons</a></li>-->
								<!--</ul>-->
								<!--</li>-->
								<li><a href="index_task.php" class="effect-3">Member5</a></li>
							
							
						
					
					</h3>
				
		
		</div>
	</div>


 
<a href="index_search.php">
  <img id="fiximg"src="images/add.png" back width=100 height=100 align="right" >
</a>
	</div>

        </div>





<!-- //about -->


<!--ADD MODAL-->

 <!-- Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog"  style="position:absolute; left:100px; width:100px">
    
      <!-- Modal content-->

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title" align = "center">Add a paper</h4>
        </div>
        <div class="modal-body">
            <form id="insert_form" method="post">
    <div class="form-group">
      <label for="usr">Paper Title:</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
      <label for="pwd">Link:</label>
      <input type="text" class="form-control" id="link" name="link">
    </div>

</div>
        
        <div class="modal-footer">
         <!-- <button data-dismiss="modal" align=>Add</button>-->
	
        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success">
	
	</div>
							
        </form>

      </div>
      
    </div>

  </div>

  




<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- skills -->
<script src="js/skill.bars.jquery.js"></script>

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
</html></title>
</head>
<body>

</body>
</html>
