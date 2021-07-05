
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/sign_style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/style-site.css" rel="stylesheet">
	 <link rel="stylesheet" href="../css/style_log.css">
	
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../css/style.css"> <!-- Gem style -->
	<script src="../js/modernizr.js"></script> 
	<script src="../js/index.js"></script>
	<script src="../js/jquery-2.1.1.min.js"></script>
	<script src="../js/sign.js"></script>
    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
				<script type="text/javascript" src="../js/jquery.js"></script>
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

td{text-align:center;text-transform:uppercase}}

</style>
	
	
	
</head>

<body>

    <!-- Navigation -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
        <div class="container">
		
		
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.html"><img src="image/logo.png"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="../index.php">Hire Developer</a>
                    </li>
             
               
                </ul>
				
			
            </div>
            

            <!-- /.navbar-collapse -->
        </div>
		</nav>
	<!-- Navigation -->
	
  
  <div class="hr_style">
             <hr class="style2">
			 <hr class="middle1">
			 <div class="headline">
			 <h4>Customer Profile<h4>
			 </div>
   </div>
 
		            <!--Start company customer Profile section -->
	<div class="container">	

			 <div class="row">
         <div class="profile">
		 
		  
		 <div class="pro_left">
		 
	<image src="../image/hd.jpg" width="530px" height="500px"/>
		 </div>
		 
		 
		 
		 <div class="pro_right">
		 
	

<?php
include("connect.php");

// username and password sent from form 
$email=$_POST['email']; 
$pass=$_POST['pass']; 

$sql="SELECT * FROM web_deve WHERE email='$email' and pass='$pass'";
$web_deve=mysql_query($sql);
$count=mysql_num_rows($web_deve);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){



while($row = mysql_fetch_array($web_deve))
  { 
  echo "<table width='80%' height='200px' border='6' align='center'>";
  echo "<h1 style='font-size:22px;color:black'>Customer Information</h1>";
  
  echo "<tr>";
  echo "<td>CUSTOMER ID :</td>";
  echo "<td>" . $row['id'] . "</td>";
   echo "</tr>";
      echo "<tr>";
  echo "<td>FULL NAME :</td>";
  echo "<td>" . $row['fname'] . "</td>";
     echo "</tr>";
     echo "<tr>";
  echo "<td>USER NAME :</td>";
  echo "<td>" . $row['uname'] . "</td>";
     echo "</tr>";
     echo "<tr>";
  echo "<td>EMAIL :</td>";
  echo "<td style='text-transform:lowercase'>" . $row['email'] . "</td>";
     echo "</tr>";
     echo "<tr>";
  echo "<td>MOBILE :</td>";
  echo "<td>" . $row['mobile'] . "</td>";
     echo "</tr>";
     echo "<tr>";
  echo "<td>ADDRESS :</td>";
  echo "<td>" . $row['address'] . "</td>";
     echo "</tr>";
	 
  echo "</tr>";
  echo "</table>";
  

  
 echo "<h1 style='font-size:22px;color:black'>Order Information</h1>";
  echo "<table width='80%' height='200px' border='6' align='center'>";

     echo "<tr>";
  echo "<td>WORK :</td>";
  echo "<td>" . $row['work'] . "</td>";
     echo "</tr>";
	    echo "<tr>";
  echo "<td>COMMENT :</td>";
  echo "<td style='text-transform:lowercase'>" . $row['comment'] . "</td>";
     echo "</tr>";
	 echo "<tr>";
  echo "<td>ORDER DATE :</td>";
  echo "<td>" . $row['sub_date'] . "</td>";
  echo "</tr>";
  
    echo "<tr>";
  echo "<td>NID NUMBER :</td>";
  echo "<td>" . $row['nid'] . "</td>";
     echo "</tr>";
  	  
	
  echo "</tr>";
  echo "</table>";
  }




}

else{


echo "<tr>";
echo "<td>";
echo "<b style='font-size:315%'>Wrong Details Submitted! Please insert Correctly..</b>";
echo "<br><a href='../index.php' style='font-size:40px;text-align:center'>GO Back</a>";
echo "</td>";
echo "</tr>";
}


?>


	

		 </div>
		 
		 </div>
        </div>
</div>



		   <div class="hr_style">
             <hr class="style2">
			 <hr class="middle1">
			 <div class="headline_footer">
			
            <!-- company Details section -->
			<?php include("../includes/company_details.php"); ?>
			<!-- company Details section -->
           
		
			 <!-- company footer section -->
			<?php include("../includes/footer.php"); ?>
			<!-- company footer section -->
			

    <!-- /.container -->
	
	
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
