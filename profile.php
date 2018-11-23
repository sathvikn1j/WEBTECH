<?php
	session_start();
	$conn=mysqli_connect("localhost","root","","socialnetwork") or die("Connection was not established");
	$email=$_SESSION['user_email'];
	$st="select * from users where user_email='$email'";
	$res=mysqli_query($conn,$st);
	$row = $res->fetch_assoc();
	foreach($row as $key=>$value){
		echo "<script>localStorage.setItem('".$key."','".$value."')</script>";
	}
	//print_r($row);
?>
<html>
<head>
	<title>LIFEBOOK</title>
    <link href="styles/header.css" type="text/css" rel="stylesheet">
	<style>
		body{
			text-align:center;
		}
		p{
			margin-top: 30px;
			position:relative;
			left:;
			width:400px;
			background-color:white;
			text-align:center;
			left:470px;
			display:block;
			height:30px;
			border:1px solid black;
			
			margin-bottom:25px;
		}
	</style>
</head>
<body>
	<header>
            <div class="row">
                <a href='home.html'><img src="logo.png" alt="Logo" class="Logo"></a>
                <input type="text" placeholder="Search">
                <ul class="main-nav">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="friends.php">Friends</a></li>
                    <li><a href="settings.php">Settings</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
        </header>
		
		<img src="atul.jpeg" id="img" height="200px" width="200px" style="margin-top:12px;">
		<Section id="det">
		<p id="fname"></p>
		<p id="email"></p>
		<p id="bday"></p>
		<p id="gender"></p>
		
		 
		<p id="sdate"></p>
		
		<p id="ldate"></p>
		</Section>
	<script>
		keys=["user_name","user_email","user_bday","user_gender","register_date","last_login"];
		var ps=document.querySelectorAll("Section p");
		for(var i in ps){
			ps[i].innerHTML=keys[i]+"  :  "+localStorage.getItem(keys[i]);
			//ps[i].style.margin-bottom="10px";
			//ps[i].style.background-color="white";
			//ps[i].style.display="block";
		}
		if(localStorage.getItem("user_image").toString() != "NONE")
				document.getElementById("img").src="images/"+localStorage.getItem("user_image").toString();
		else
				document.getElementById("img").src="images/default_user.jpg";
		document.getElementsByTagName("header")[0].style.backgroundColor = localStorage.accentColor;
	</script>	
		
</body>

</html>