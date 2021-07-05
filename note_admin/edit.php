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
                <a class="navbar-brand" href="index.html"><img src="../shop/include/logo.png"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
         
            <h1 style="color:white;font-size:30px">Show All Note Update Customer paid Details</h1>

            <!-- /.navbar-collapse -->
        </div>
		


		
    </nav>
<div class="container">
<div class="row">
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{

$admin_name=$_POST['admin_name'];
$work=$_POST['work'];
$cus_id=$_POST['cus_id'];
$work_payout=$_POST['work_payout'];
$admin_note=$_POST['admin_note'];
$com_not=$_POST['com_not'];

$query3=mysql_query("update adminnote set  admin_note='$admin_note', com_not='$com_not' where id='$id'");
if($query3)
{
header('location:show.php');
}
}
$query1=mysql_query("select * from adminnote where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<div style="width:50%">
<form method="post" action="">

Admin Name: <input type="text" name="admin_name" class="form-control" disabled="disabled" required value="<?php echo $query2['admin_name']; ?>" /><br />
Work: <input type="text" name="work" required  class="form-control" disabled="disabled" value="<?php echo $query2['work']; ?>" /><br /><br />
Customer Id <input type="text" name="cus_id" class="form-control" disabled="disabled" required  value="<?php echo $query2['cus_id']; ?>" /><br /><br />
Work Payout: <input type="text" name="work_payout" class="form-control"  disabled="disabled" required value="<?php echo $query2['work_payout']; ?>" /><br /><br />
Admin Note: <textarea type="text" name="admin_note" class="form-control" required /><?php echo $query2['admin_note']; ?></textarea><br /><br />
Complete Or Not: <select type="text" name="com_not" class="form-control" required  value="<?php echo $query2['com_not']; ?>" />
<option value="Complete">Complete</option>
<option value="Not Complete">Not Complete</option>
</select>
<br /><br />
<input type="submit" name="submit" value="update" class="btn btn-default"/>
</form>
</div>
<?php
}
?>
</div>
 <div class="btn btn-default"><a href="index.php">Back</a></div>
</div>
</body>
</html>