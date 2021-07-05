<!DOCTYPE html>
<html lang="en">
<head>
<?php include('session.php'); ?>
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

	<style type="text/css">
	.right_form{width:40%;float:right;margin-right:10%}
	.left_form{width:30%;float:left;}

	</style>
	
	
</head>

<body>
<?php
include('config.php');
if(isset($_POST['submit']))
{
$admin_name=mysql_real_escape_string($_POST['admin_name']);
$work=mysql_real_escape_string($_POST['work']);
$cus_id=mysql_real_escape_string($_POST['cus_id']);
$work_payout=mysql_real_escape_string($_POST['work_payout']);
$admin_note=mysql_real_escape_string($_POST['admin_note']);
$com_not=mysql_real_escape_string($_POST['com_not']);
$date=date('y-m-d');
$query1=mysql_query("insert into adminnote values('','$admin_name','$work','$cus_id','$work_payout','$admin_note','$com_not','$date')");
echo "insert into adminnote values('','$admin_name','$work','$cus_id','$work_payout','$admin_note','$com_not','$date')";
if($query1)
{
header("location:show.php");
}
}
?>
<hr>
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
                <a class="navbar-brand" href="index.html"><img src="../shop/include/logo.png"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<h1 style="color:white;font-size:20px">Admin Panel Economy Information</h1>
			
            </div>
            

            <!-- /.navbar-collapse -->
        </div>
		


		
    </nav>
<div class="container">
<div class="left_form">
  <h1>Admin All Note For Site Economy</h1>
  <div class="list-group">
    <a href="index.php" class="list-group-item active">
      <h4 class="list-group-item-heading">Add Complete Note</h4>
      <p class="list-group-item-text">This is all Payout Information</p>
    </a>
    <a href="show.php" class="list-group-item">
      <h4 class="list-group-item-heading">Show All Note</h4>
      <p class="list-group-item-text">List of all information</p>
    </a>
    <a href="list.php" class="list-group-item">
      <h4 class="list-group-item-heading">Edit and Delete Information</h4>
      <p class="list-group-item-text">Customize all Economy Information</p>
    </a>
  </div>

</div>
<div class="right_form">
<form method="post" action="">
  <div class="form-group">
    <label for="Admin Name">Admin Name:</label>
	 <select type="text" name="admin_name" class="form-control" required>
	 <option value="Hridoy Chandra Das">Hridoy Chandra Das</option>
	 <option value="Jahidul Islam Robin">Jahidul Islam Robin</option>
	 </select>
  </div>
   <div class="form-group">
    <label for="Work ">Work: </label>
	 <Select type="text" name="work" class="form-control" required>
	 <optgroup label="Web Development">
	 <option value="Static Website">Static Website</option>
	 <option value="Dynamic Website">Dynamic Website</option>
	 <option value="CMS Website">CMS Website</option>
	 <option value="Others">Others</option>
	 	 </optgroup>
	 <optgroup label="Graphics Design">
	 <option value="Banner">Banner</option>
	 <option value="Logo">Logo</option>
	 <option value="Visiting Cars">Visiting Cars</option>
	 <option value="Other">Other</option>
	 	 </optgroup>
	 <optgroup label="Apps Development">
	 <option value="Android Apps">Android Apps</option>
	 <option value="OIS Apps">OIS Apps</option>
	 <option value="Other">Other</option>
	 	 </optgroup>
	 <optgroup label="Video Animation">
	 <option value="Simple Animation">Simple Animation</option>
	 <option value="professional Animation">professional Animation</option>
	 <option value="Others">Others</option>
	
	 	 </optgroup>
	 </select>
  </div>
   <div class="form-group">
    <label for="Customer Id">Customer Id:</label>
	 <input type="text" name="cus_id" class="form-control" required>
  </div>
   <div class="form-group">
    <label for="Work Payout">Work Payout:</label>
	 <input type="text" name="work_payout" class="form-control" required>
  </div>
   <div class="form-group">
    <label for="Admin Note">Admin Note:</label>
	 <textarea type="text" name="admin_note" class="form-control" required>
	 </textarea>
  </div>
   <div class="form-group">
    <label for="Complete Or Not">Complete Or Not: </label>
	<select type="text" name="com_not"  class="form-control" required>
	 <option value="Complete">Complete</option>
	 <option value="Not Complete">Not Complete</option>
	
	
	 
	 </select>
  </div>
 
  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
</div>
<div class="btn btn-default"><a href="../shop/admin.php">Back Admin Panel</a></div>
</div>
</body>
</html>