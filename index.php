<!DOCTYPE html>
<?php
	session_start();
	include("functions.php");
?>
<html>
	<head>
		<title>Login / Sign Up</title>
		<link href="styles/login.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div id="head" style="position:relative;bottom:15px;height:100px; border-radius:15px;width:1200px;"><p>LifeBook&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<span>-A nice place to be</span></p></div>
		<img src="logo.png" style="float:right;border-radius:30px;position:relative;bottom:145px;">
		<form id="login" method="post">
			<div style="margin-top:20px;"><input id="uname" type="email" placeholder="Enter your email ID" name="uname" spellcheck="false" color="white"></div>
			<div><input id="pwd" type="password" placeholder="Enter password" name="pwd" spellcheck="false" color="false"></div>
			<div></div>
			<div><button name = "login" style="height:40px;width:150px;font-size:20px;background-color:white;border-color:#3b5998;color:#3b5998;">Login</button></div>
			<div style="height:20px;">Dont have an account?<a href="#signup" style="color:#1DA1F2;">Sign UP</a></div>
		</form>
		
		<?php login();?>
		
		<div id="foot" style="font-size:21px;position:relative;width:650px;height:140px;top:340px;left:20px;border-radius:18px;text-align:center-left;font-family:inherit;">
							</br>
		&nbsp;&nbsp;	    Contact us:
		&nbsp;&nbsp;				Siddarth Punit Atul Sathvik</br>
		&nbsp;&nbsp;				PES University,</br>
		&nbsp;&nbsp;				100ft Outer Ring Road,</br>
		&nbsp;&nbsp;				Bangalore-85
		</div>
		
		<form id="signup" method="post">
			<div style="margin-top:30px;"><input type="text" name="fname" type="text" placeholder="First Name" spellcheck="false" color="white"></div>
			<div><input type="text" name="lname" placeholder="Last Name" spellcheck="false" color="white"></div>
			<div><input type="date" name="bday" placeholder="1-11-2018"></div>
			<div name="gender" style="font-size:22px;color:white;">
			<input type="text" name="gender" placeholder="Enter your gender" spellcheck="false" color="white">
			</div>
			<div><input type="email" placeholder="your Email id" spellcheck="false" name="email"></div>
			<div><input type="password" placeholder="Your new password" spellcheck="false" name = "password"></div>
			<div><input type="password" placeholder="Retype password" spellcheck="false" name="c_password"></div>
			<div><button name = "submit" style="height:40px;width:150px;font-size:20px;background-color:whilte;border-color:#3b5998;color:#3b5998;">submit</button></div>
		</form>
		
		<?php insertUser();?>
		
	</body>
</html>
