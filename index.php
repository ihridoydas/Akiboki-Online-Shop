<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Akiboki Marketplace">
    <meta name="author" content="Hridoy Chandra Das">

    <title>Akiboki || Online Marketplace </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/sign_style.css" rel="stylesheet">
	<link href="css/features.css" rel="stylesheet">
	<link href="css/circle.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/style-site.css" rel="stylesheet">
    <link href="image/logo.png" rel="short icon">
	 <link rel="stylesheet" href="css/style_log.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy" rel="stylesheet"> 

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
	<script src="js/modernizr.js"></script> 
	<script src="js/index.js"></script>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/sign.js"></script>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
				<script type="text/javascript" src="js/jquery.js"></script>
				<script type="text/javascript"> 
				$(document).ready(function(){
				$(".flip1").click(function(){
					$(".panel1").slideToggle("slow");
				  });
				});
				</script>
	
	<style type="text/css"> 
div.panel1,p.flip1
{
color:white;
width:120px;
height:30px;
text-align:center;
background:#E15B5C;
border:solid 1px #361E36;
float:right;
border-radius:10px;
margin-top:10px;

}
div.panel1
{
color:black;
background:#F5F5F5;
width:100%;
height:60%;
display:none;
z-index:2;
}
p.flip1{cursor:pointer;text-align:center}



</style>
	
	
	
</head>

<body>

    <!-- Navigation -->
    <?php include("includes/nav.php"); ?>
	<!-- Navigation -->

	 <!-- Header Carousel -->
	 <?php include("includes/header.php"); ?>
    <!-- Header Carousel -->
    
  <div class="hr_style">
             <hr class="style2">
			 <hr class="middle1">
			 <div class="headline">
			 <h4>Get Started<h4>
			 </div>
   </div>
			
    <!-- Get Started Page Content -->
    <?php include("includes/get_started.php"); ?>
	<!-- Get Started Page Content -->
	 <div class="hr_style2">
             <hr class="style2_2">
			 <hr class="middle2">
			 <div class="headline2">
			 <h4>Services<h4>
			 </div>
     </div>
   <!-- Services Content page -->
   <?php include("includes/services.php"); ?>
   <!-- Services Content page -->
 
		   <div class="hr_style">
             <hr class="style2">
			 <hr class="middle1">
			 <div class="headline">
			 <h4>Features <h4>
			 </div>
			</div>
	
			<!-- Team section -->
			<?php include("includes/features.php"); ?>
		<!--End Team section -->	
		
		
		   <div class="hr_style">
             <hr class="style2">
			 <hr class="middle1">
			 <div class="headline_footer">
			
            <!-- company Details section -->
			<?php include("includes/company_details.php"); ?>
			<!-- company Details section -->
           
		
			 <!-- company footer section -->
			<?php include("includes/footer.php"); ?>
			<!-- company footer section -->
			

    <!-- /.container -->
	
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->
			
</body>

</html>
