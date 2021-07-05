<!DOCTYPE html>
<html>
<head>
<?php include('../session.php'); ?>
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
<style type="text/css">
tr{text-align:center}
.colorbind{color:red;font-size:13px;line-height:10px}
</style>
</head>
<body>
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
                <a class="navbar-brand" href="index.html"><img src="../images/home/logo.png"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
       
            

            <!-- /.navbar-collapse -->
        </div>
		
		
		      <!-- /Fly Log IN start -->
	

	
	
	      <!-- /Fly Log IN End -->
        <!-- /.container -->
		

		
    </nav>
	
	

  <div class="hr_style">
             <hr class="style2">
			 <hr class="middle1">
			 <div class="headline">
			 <h4>Admin Panel<h4>
			 </div>
   </div>


<div style="width:100%;height:40px;margin-top:30px;background:#abcdef;text-align:center">
<form action="search.php" method="get" enctype="mulpart/form-data">
	Search:<input type="text" name="value" placeholder="Search Id" style="margin:5px;height:30px"/>
	<input type="submit" name="search" value="Search">
	</form>
	 <div class="btn btn-default"><a href="../admin.php">Back</a></div>
	</div>



<?php
include('connect.php');
$query1=mysql_query("select * from web_deve order by 1 DESC");

echo "<br>";
while($query2=mysql_fetch_array($query1))
{
 echo "<table width='50%' height='30%' border='6' align='center'>";
echo "<tr><td><h3 class='colorbind'>Customer ID :</td></h3><td>".$query2['id']."<a href='delete.php?id=".$query2['id']."'>Delete</a></td>";
echo "<tr><td><h3 class='colorbind'> Full Name :</td></h3><td>".$query2['fname']."</td>";
echo "<tr><td><h3 class='colorbind'> User Name :</td></h3><td>".$query2['uname']."</td>";
echo "<tr><td><h3 class='colorbind'> Email :</td></h3><td>".$query2['email']."</td>";
echo "<tr><td><h3 class='colorbind'> Password :</td></h3><td>".$query2['pass']."</td>";
echo "<tr><td><h3 class='colorbind'> Mobile :</td></h3><td>".$query2['mobile']."</td>";
echo "<tr><td><h3 class='colorbind'> Address :</td></h3><td>".$query2['address']."</td>";
echo "<tr><td><h3 class='colorbind'> Work Details :</td></h3><td>".$query2['work']."</td>";
echo "<tr><td><h3 class='colorbind'> Comment :</td></h3><td>".$query2['comment']."</td>";
echo "<tr><td><h3 class='colorbind'> Order Date :</td></h3><td>".$query2['sub_date']."</td>";
echo "<tr><td><h3 class='colorbind'> National ID :</td></h3><td>".$query2['nid']."</td>";


echo "<br>";
 echo "</table>";
}
?>
<hr bgcolor="black">
			  <div style="margin:12px;background:black">
		
				
			  <h2 style="text-transform:uppercase;color:white;text-align:center">Copyright © Akiboki.Com 2016</h2>
				</div>
    
		
</body>
</html>