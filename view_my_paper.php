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
	<title>Instruction an Education Category Bootstrap Responsive Web Template | About :: w3layouts</title>
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
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
							<li><a href="index.html" class="effect-3">Home</a></li>
							<li  class="active"><a href="myreadpapers.php" class="effect-3">My Read papers</a></li>
							<li><a href="about.html" class="effect-3">About</a></li>
							<li><a href="services.php" class="effect-3">Resources</a></li>
				
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




<?php
$id = isset($_GET['id'])? $_GET['id'] : "";
session_start();
$_SESSION['paper_id']=$id;
include("connect.php");
$display = mysqli_query($conn,"select title from Resources where id=".$id);
$row = mysqli_fetch_array($display);

$title = $row[0];
$_SESSION['title']=$title;

$display = mysqli_query($conn,"select summary from Read_papers where paper_id=".$id);
$row = mysqli_fetch_array($display);

$summary = $row[0];

?>




	<div class="container">
             <div class="page-header">
             <p style="font-size:50px;"><?php echo $title?></p>
     
             </div>


        </div>


<div class="container-fluid">
<div>
    <div class="col-sm-7">
     <iframe src="viewpaper/view_pdf.php?id=<?php echo $id?>" width="710" height="1000"></iframe>

    </div>
    <div class="col-sm-5" >
  
        <div id="summarydiv">
             
	    <h4><b> My summary:</b></h4>
            <div  style="padding:15px 0px 0px 0px">
        <p> <h4><?php echo $summary?></h4> </p>
            </div>
        </div>


         <div  style="padding:18px 0px 0px 290px">
        

       
            <button type='submit'  class="btn btn-info btn-xs edit_data" name='edit'style="height:40px;width:90px;float: right">edit</button>

        </div> 
      
   
    </div>

    
</div>



    
</div>






<!-- Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title" align = "center">Add summary</h4>
            </div>
            <div class="modal-body">
                <form id="insert_form" method="post" >
                   <div class="form-group">
    		   <label for="exampleFormControlTextarea1">Edit summary</label>
   		   <textarea class="form-control" name="summary" id="summary" rows="3"><?php echo $summary?></textarea>
 		 </div>
            
                   

            </div>

            <div class="modal-footer">
                <!-- <button data-dismiss="modal" align=>Add</button>-->

                <input type="submit" name="submit" id="submit"  value="Insert" class="btn btn-success">

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
<script>
		$(document).ready(function(){

			$('.skillbar').skillBars({
				from: 0,
				speed: 4000,
				interval: 100,
				decimals: 0,
			});

                     $(document).on('click', '.edit_data', function(){  
            
                     $('#myModal').modal('show');  
             
      });  
				 $('#insert_form').on("submit", function(event){  
   				event.preventDefault();  
   					 if($('#summary').val() == "")  
					  {  
 					  alert("summary is required");  
 						 }  

 					
   
 					 else  
 					 {  
 						  $.ajax({  
 						   url:"edit_summary.php",  
						    method:"POST",  
                                                     data:$('#insert_form').serialize(),  
						   
                          
						    beforeSend:function(){  
 						    $('#insert').val("Inserting");
                                                     
						    },  
 						   success:function(data){  
  						   $('#insert_form')[0].reset();  
  						   $('#myModal').modal('hide');
					
  						   $(".modal-backdrop").remove();
  						   $('#summarydiv').html(data);  
  							  }  
   							});  
 							 }  
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
</html></title>
</head>
<body>

</body>
</html>
