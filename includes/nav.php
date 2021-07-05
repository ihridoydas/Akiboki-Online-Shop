
<style>
.input_de {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.button2 {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border-radius: 5px;
    cursor: pointer;
    width: 50%;
}



.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 15%;
}



span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 640px) {
    span.psw {
       display: block;
       float: none;
    }

.button2 {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border-radius: 5px;
    cursor: pointer;
    width: 50%;
}
.input_de{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


    
}
</style>

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
                <a class="navbar-brand" href="index.php"><img src="image/logo.png"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav navbar-right">
                    <li class="active" id="border">
                        <a href="#service">Hire Developer</a>
                    </li>
                    <li>
                        <a href="shop">Buy Portfolio</a>
                    </li>
                  
               
                </ul>
				<p class="flip1">Log In</p>
				
			
            </div>
            

            <!-- /.navbar-collapse -->
        </div>
		
		
		      <!-- /Fly Log IN start -->
		<div class="panel1">
		<div class="set_log">
<div class="container">
<form id="form1" name="form1" method="post" action="member/index.php" >
    
 <table width="46%" border="0" align="center" cellpadding="0" cellspacing="0" class="black12bold">
 <div class="imgcontainer">
    <img src="image/avatar.png" alt="Avatar" class="avatar">
	 <h1>Please Log In </h1>
  </div>
  
  
   <div class="container">
  
    <input type="text" placeholder="Enter Email" name="email" required class="input_de">


    <input type="password" placeholder="Enter Password" name="pass" required class="input_de">
        
    <button class="button2" type="submit" name="submit">Login</button>
    
  </div>

 
                 
                      </table>  
					  </form>
        </div>

<p class="flip1">Close</p>
	
	
    </div>	
    </div>	
	
	
	      <!-- /Fly Log IN End -->
        <!-- /.container -->
		
 <?php include("includes/panel/web_panel.php"); ?>
 <?php include("includes/panel/graph_panel.php"); ?>
 <?php include("includes/panel/app_panel.php"); ?>
 <?php include("includes/panel/video_panel.php"); ?>
		

		





		
    </nav>
