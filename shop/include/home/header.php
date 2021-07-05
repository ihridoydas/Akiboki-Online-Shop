<?php include('db.php'); ?>
<?php session_start(); ?>
<?php //print_r($_SESSION['cart']); ?>
<?php date_default_timezone_set('Asia/Dhaka'); ?>
<?php
    $jim = new Data();
    $countproduct = $jim->countproduct();
    
    $cat = $jim->getcategory();
    class Data {
        function countproduct(){
            $count = 0;
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart']:array();
            foreach($cart as $row):
                if($row['qty']!=0){
                    $count = $count + 1;
                }
            endforeach;
            
            return $count;
        }
        function getcategory(){
            $result = mysql_query("SELECT * FROM category");
            return $result;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Akiboki.com || Buy Portfolio</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">

	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       

</head><!--/head-->

<body>
	<?php include("nav.php"); ?>
	<br>
<header id="header"><!--header-->
	
		<!--/header_top-->
		
		<!--header-middle-->
		<!--<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="logo pull-left">
							<center><a href="index.php"><img src="images/home/header1.jpg" alt="" class="img-responsive"/></a></center>
						</div>
		
					</div>
					
				</div>
			</div>
		</div>-->
		<!--/header-middle-->
	
		<div class="header-bottom navbar navbar-inverse"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <?php
                                            $cat = $jim->getcategory();
                                            while($row = mysql_fetch_array($cat)){
                                                echo '<li><a href="category.php?filter='.$row['title'].'">'.$row['title'].'</a></li>';
                                            }
                                        ?>
    
                                    </ul>
                                </li> 
								<li><a href="about.php">About Us</a></li> 
								<li><a href="contact.php">Contact</a></li>
								<li><a href="cart.php">Cart <span class="badge"></span></a></li>
								<li><a href="login.php">Login</a></li>
							</ul>
						</div>
					</div>
                    <div class="col-sm-3">
						<div class="search_box pull-right">
                            <form action="index.php" method="post">
							     <input type="text" placeholder="Search" name="filter" />
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
    