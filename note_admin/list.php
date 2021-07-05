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
	th{background:silver;margin:10px}
	td{background:pink;margin:10px}

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
                <a class="navbar-brand" href="index.html"><img src="../shop/include/logo.png"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
         
            <h1 style="color:white;font-size:30px">Show All Note Ordered Customer paid Details</h1>

            <!-- /.navbar-collapse -->
        </div>
		


		
    </nav>

	<!-- Navigation -->


    
  <div class="hr_style">
             <hr class="style2">
			 <hr class="middle1">
			 <div class="headline">
			 <h4>Admin Panel<h4>
			 </div>
   </div>

   <hr>
 <div class="container">
			<div class="row">
			<?php
include('config.php');
$query1=mysql_query("select id, admin_name, work, cus_id, work_payout, admin_note, com_not, date from adminnote order by 1 DESC");
echo "<table border='1'>
<tr>
<th width='30px'>ID:</th>
<th width='160px'>Admin Name: </th>
<th width='120px'>Work:</th>
<th width='90px'>Customer Id:</th>
<th width='100px'>Work Payout:</th>
<th width='220px'>Admin Note:</th>
<th width='90px'>Complete Or Not:</th>
<th width='120px'>Date:</th>
<th width='50px'>Edit:</th>
<th width='50px'>Delete:</th>

</tr>
</table>";
echo "<br>";
while($query2=mysql_fetch_array($query1))
{
echo "<table border='1'>";
echo "<tr>";
echo "<td width='30px'>".$query2['id']."</td>";
echo "<td width='160px'>".$query2['admin_name']."</td>";
echo "<td width='120px'>".$query2['work']."</td>";
echo "<td width='90px'>".$query2['cus_id']."</td>";
echo "<td width='100px'>".$query2['work_payout']."</td>";
echo "<td width='220px'>".$query2['admin_note']."</td>";
echo "<td width='90px'>".$query2['com_not']."</td>";
echo "<td width='120px'>".$query2['date']."</td>";
echo "<td width='50px'><a href='edit.php?id=".$query2['id']."'>Edit</a></td>";
echo "<td width='50px'><a href='delete.php?id=".$query2['id']."'>Delete</a></td>";
echo "</tr>";
echo "</table>";
echo "<br>";
}
?>

</div>
 <div class="btn btn-default"><a href="index.php">Back</a></div>
 </div>
   
</body>

</html>
