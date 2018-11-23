<html>

    <head>
        <title>LIFEBOOK</title>
        <link href="styles/header.css" type="text/css" rel="stylesheet">
        <link href="styles/settings.css" type="text/css" rel="stylesheet">
        <script src="scripts/settings.js"></script>
    </head>

    <body onload="func()">
        <?php
			include("templates/header.php");
		?>
		<div class="modal">
        	<div class="modal_content">
        		<span class="close">&times;</span>
        		<h3> Change Profile Settings </h3>
        		<form method="post" id="new_post">
        			<div>Enter new email-id: <input type="text" name="email" placeholder="Email"></div>
        			<div>Enter new password: <input type="password" name="pwd" placeholder="Password"></div>
        			<div>Re-enter new password: <input type="password" name="rpwd" placeholder="Password"></div>
					
        			<button name="update_settings">Update Settings</button>
        		</form>
				<?php 
						require("functions.php");
						//$con = mysqli_connect("localhost","root","","socialnetwork") or die("Connection was not established");
						global $con;
						//echo $con;
						//echo "<script>alert('hello')</script>";
						if(isset($_POST['update_settings']))
						{
							//echo "<script>alert('hello')</script>";
							$em=$_POST['email'];
							//echo $con;
							echo "<script>alert(".$em.")</script>";
							$pwd=$_POST['pwd'];
							$rpwd=$_POST['rpwd'];
							if($pwd==$rpwd)
							{	
							$str="update users set user_pass='".$pwd."' where user_email='".$em."';";
							//echo $str;
							$run = mysqli_query($con,$str);
							//echo $run;
							//$check = mysqli_num_rows($run);
							//if ($check==1) {
								echo "<script>alert('Password changed')</script>";
							//}
							}
						}
					?>

        	</div>
        </div>
        <section class="settings">
            <div class="change-colour">
                <form><h4>Select a new accent colour: </h4>
                    <input type="color" name="colour-choice"/>
                </form>
                <button class="apply-colour">Apply Colour Changes</button>
                <button class="reset-colour">Reset Changes</button>
            </div>
            <div class="account-settings">
                <button>Account Settings</button>
            </div>
            <!--
            <div class="privacy-settings">
                <button>Privacy Settings</button>
            </div>
            -->
        </section>
    </body>

<html>
