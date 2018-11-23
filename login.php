


<!DOCTYPE html>
<?php
	//session_start();
	include("functions.php");
?>
<html>
	<head>
		<title>Login / Sign Up</title>
		<style>
			*{
				box-sizing:border-box;
			}
			html{
				margin:0px;
				padding:0px;
				border:0px;
				background-color:#e9e9e9;
				background-image:url(".jpg");
			}
			form#login input{
				border:;
				border-bottom:;
				border-radius:12px;
				border-color:#2929a3;
				height:30px;
				width:400px;
				margin-bottom:15px;
				margin-top:30px;
				font-size:17px;
				text-align:center;
				font-family:inherit;
			}
			input:focus{
				outline:none;
			}
			form#signup input{
				border-color:#2929a3;
				height:30px;
				width:400px;
				border-radius:12px;
				font-size:17px;
				text-align:center;
			}

			form#login{
				border-radius:25px;
				position:absolute;
				border:1px solid #2929a3;
				margin:10px 10px 10px 10px;
				text-align:center;
				background-color:#2929a3;
				height: 270px;
				width: 630px;
				background-color:;
				top:170px;
				left:25px;
				font-family:inherit;
			}
			form#signup{
				position:absolute;
				border:;
				margin:10px 10px 10px 10px;
				text-align:center-left;
				height:450px;
				width:630px;
				background-color:;
				top:170px;
				left:700px;
				border-radius:25px;
				font-family:inherit;
			}
			form#login div,div#foot{
				height:50px;
				background-color:;
				color:black;
				
			}
			div#foot{
				border:1px solid #2929a3;
				background-color:#2929a3;
				color:white;
			}
			div#head{
				height:50px;
				background-color:#2929a3;
				color:white;
				
			}
			form#signup div{
				text-align:center;
				height:50px;
				margin-top:;
				font-family:inherit;
			}
			p{
				position:relative;
				font-size:50px;
				font-weight:bolder;
				color:white;
				top:20px;
				left:25px;
			}
			span{
				font-size:30px;
				font-weight:bold;
				color:white;

			}
		</style>
	</head>
	<body>
		<div id="head" style="position:relative;bottom:15px;height:100px; border-radius:15px;width:1150px;"><p>LifeBook&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<span>-A nice place to be</span></p></div>
		<img src="logo.png" style="float:right;border-radius:30px;position:relative;bottom:145px;">
		<!--<img src="icon.jpg" height="300px" width="600px" style="float:right">-->
		<form id="login" method="post">

			<div style="margin-top:20px;"><input id="uname" type="text" placeholder="Enter your email ID" name="uname" spellcheck="false" color="white"></div>
			<div><input id="pwd" type="password" placeholder="Enter password" name="pwd" spellcheck="false" color="false"></div>
			<div></div>
			<div><button name = "login" style="height:40px;width:150px;font-size:20px;background-color:whilte;border-color:#2929a3;color:#2929a3;">Login</button></div>
			<div style="height:20px;color:white;">Dont have an account?<a href="#signup" style="color:#1DA1F2;">Sign UP</a></div>
		</form>
		<?php login();?>
		<script>
			
		</script>
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
		<script src="comments.js"></script>
	</body>
</html>
