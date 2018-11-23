<?php 
	$con = mysqli_connect("localhost","root","","socialnetwork") or die("Connection was not established");
	session_start();
	function insertUser(){
		//echo("Entered function");
		global $con;
		if(isset($_POST['submit'])){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$name = $fname." ".$lname;
			//echo "<script>alert('$name')</script>";
			$bday = $_POST['bday'];
			$gender = $_POST['gender'];
			$email = $_POST['email'];
			$password = trim($_POST['password']);
			$c_password = trim($_POST['c_password']);
			$status = "unverified";


			$get_email = "select * from users where user_email='$email'";
			$run_email = mysqli_query($con,$get_email);
			$check = mysqli_num_rows($run_email);
			if ($check==1) {
				echo "<script>alert('Email is already registered')</script>";
				exit();
			}
			if($password===$c_password){
				//echo gettype($password);
				//echo gettype($email);
				if(strlen($password)<8){
					echo "<script>alert('Password should be minimum 8 characters')</script>";
				}
				else{
					$insert = "insert into users(user_name,user_pass,user_email,user_bday,user_gender,user_image,register_date,last_login,status,posts) values('$name','$password','$email','$bday','$gender','NONE',NOW(),NOW(),'$status','no')";
					$run_insert = mysqli_query($con,$insert);
					if($run_insert){
						$_SESSION['user_email']=$email;
						echo "<script>localStorage.setItem('user_email','$email');</script>";
						echo "<script>alert('Registration Succesful!')</script>";
						echo "<script>window.open('home.php','_self')</script>";
					}
				}
			}
			else{
				echo "<script>alert('Password not matching')</script>";
			}
		}
	}
	
	function login(){
		global $con;
		if(isset($_POST['login'])) {
			$email = $_POST['uname'];
			$pass = $_POST['pwd'];
			$get_user = "select * from users where user_email='$email' AND user_pass='$pass'";
			$run_user = mysqli_query($con,$get_user);
			$check = mysqli_num_rows($run_user);
			if($check==1){
				$_SESSION['user_email']=$email;
				echo "<script>localStorage.setItem('user_email','$email');</script>";
				echo "<script>window.open('home.php','_self')</script>";
			}
			else{
				echo "<script>alert('Password or email is not correct')</script>";
			}
		}
	}
	function insertPost(){
			global $con;
			global $user_id;
			if(isset($con))
				//echo "hello";
			
				if(isset($_POST['add_post'])){
					//echo "test";
					$content=addslashes($_POST['post_text']);
					//$user="select * from users where user_id='$user_id'";//getting the user who has posted this
					$email=$_SESSION['user_email'];
					$user="select * from users where user_email='$email'";
					//echo $user;	
					$run_user=mysqli_query($con,$user);
					$row_user=mysqli_fetch_array($run_user);
					$user_id=$row_user['user_id'];
					//echo $user_id;
					$title="";
					$insert="insert into posts(user_id,post_title,post_content,post_likes,post_date,post_comments) values('$user_id','$title','$content',0,NOW(),0)";
					//echo $insert;
					$run=mysqli_query($con,$insert);	
							if($run){
								$update="update users set posts='yes' where user_id='$user_id'";
								$run_update=mysqli_query($con,$update);
							}
			}
	}

	function get_posts(){
			global $con;
			$per_page=20;
			global $user_id;
			$all_data = array();
				if(isset($_GET['page'])){   //page initialization
					$page=$_GET['page'];
				}
				else {
					$page=1;
				}
				$start_from=($page-1) *$per_page;
				$get_posts="select * from posts ORDER by 1 DESC LIMIT $start_from,$per_page";
				$run_posts=mysqli_query($con,$get_posts);

				while($row_posts=mysqli_fetch_array($run_posts)){
					$row_data = array();
					$post_id=$row_posts['post_id'];
					$user_id=$row_posts['user_id'];
					$post_title=$row_posts['post_title'];
					$content=$row_posts['post_content'];
					$post_date=$row_posts['post_date'];
					$post_likes=$row_posts['post_likes'];
					$post_comments=$row_posts['post_comments'];
					$user="select * from users where user_id='$user_id'";//getting the user who has posted this

					$run_user=mysqli_query($con,$user);
					$row_user=mysqli_fetch_array($run_user);
					$user_name=$row_user['user_name'];
					$user_image=$row_user['user_image'];
					array_push($row_data, $user_image);
					array_push($row_data, $user_name);
					array_push($row_data, $content);
					array_push($row_data, 'NONE');
					array_push($row_data, $post_likes);
					array_push($row_data, $post_comments);
					array_push($row_data, $post_date);
					array_push($all_data, $row_data);
					//Displaying all posts
/*					echo "<div id='posts'>
					<p><img src='user/user_images/$user_image' width='50' height='50'></p>
					<h3>$user_name</h3>
					<h3>$post_title</h3>
					<p>$post_date</p>
					<p>$content</p>
					<a href='single.php?post_id=$post_id' style='float:right;'><button>COMMENTS</button></a>

					</div>
					";
*/
				}
				//include("paginitiation.php");
				return $all_data;
		}
?>
