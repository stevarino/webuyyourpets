<?php include 'header.php'; ?>
<!---->
<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
		 <div class="col-md-6 log">
				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously Login with us, <span>click here</span></p>
				 <form>
					 <h5>User Name</h5>
					 <input type="text" value="">
					 <h5>Password</h5>
					 <input type="password" value="">
					 <input type="submit" value="Login">
						<a class="acount-btn" href="account.html">Create an Account</a>
				 </form>
				 <a href="#">Forgot Password ?</a>

		 </div>

		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<div class="subscribe">
	 <div class="container">
		 <h3>Newsletter</h3>
		 <form>
			 <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			 <input type="submit" value="Subscribe">
		 </form>
	 </div>
</div>
<?php include 'footer.php'; ?>
