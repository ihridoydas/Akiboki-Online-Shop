<div id="app_panel">
<div class="container_sign">

<section class="left" style="width:50%;float:left">

 <h2>Customer Information</h2>
<form method="post" action="responce.php" enctype="multipart/form-data">
			 
				<div class="form-row">
				  <label for="Name">Full Name</label>
				  <input type="text" name="fname" placeholder="Enter Full Name" required autofocus>
				</div>
				<div class="form-row">
				  <label for="lastName">UserName</label>
				  <input type="text" name="uname" placeholder="Enter User Name" required>
				</div>
				<div class="form-row">
				  <label for="email">Email ID</label>
				  <input type="email" name="email" placeholder="Enter Email" required>
				</div>
				<div class="form-row">
				  <label for="password">Password</label>
				  <input type="password" name="pass" placeholder="Enter Password" required>
				</div>
					<div class="form-row">
				  <label for="Mobile">Mobile</label>
				  <input type="mobile" name="mobile" placeholder="Enter Mobile Number" required>
				</div>
				<div class="form-row">
				  <label for="Address">Address</label>
				  <input type="address" name="address" placeholder="Enter Contact Address" required>
				</div>
				<div class="form-row">
				  <label for="nid">NID Number</label>
				  <input type="nid" name="nid" placeholder="Enter NID Number" required>
				</div>
</section>
  
 <section class="right" style="width:50%;float:right">
 <h2>Order Information</h2>
				  <p style="color:red">Hint: What kind of Application you want to make ? </p>
				<div class="form-row">
				  <label style="color:white">Application</label>
			 <select name="work" required>
				  <option selected style="cursor:not-allowed"></option>
			
				  <option>Android Apps</option>
				  <option>OIS Apps</option>
				  <option>Others</option>
				  </select>
		
				</div>
			<div class="form-row">
				 	<p style="color:silver; font-size:10px">Hint: You can build your Application for the convenience </p><p style="color:silver;font-size:10px">some important files you can send. So you can send this via e-mail.</p>	
					<p style="color:silver;font-size:10px">Please with your user name and mobile number will be associated with.</p>
				 <h3 style="color:white;">support@akiboki.com<h3>
				</div>
					<div class="form-row">
				  <textarea type="Comment" name="comment" placeholder="Enter Comment" required></textarea>
				</div>
				<div class="form-row">
				 <input type="checkbox" required><a href="#" style="font-size:16px;Color:Green;background:#fbfbfb;margin-left:5px">Trams And Condition</a>
				</div>
				
				<button type="submit" name="submit">Sign up</button>
				</form>
				
 
</section>
  </div>
<img src="image/arrow.png" class="app_flip1"/>
</div>