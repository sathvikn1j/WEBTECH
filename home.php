<html>
	
	<?php
		include("functions.php");
	?>
	
    <head>
        <title>LIFEBOOK</title>
        <link href="styles/header.css" type="text/css" rel="stylesheet">
        <link href="styles/homepage.css" type="text/css" rel="stylesheet">
        <script src="scripts/home.js"></script>
        <script src="comments.js"></script>
        <?php
            /*
                $filename = "posts/index.txt"; 
                $file = fopen($filename, 'r'); 
                $size = filesize($filename); 
                $filedata = fread($file, $size);
                fclose($file);
                $filedata = explode("\n",$filedata);
                $postcount = (int)$filedata[0];
                $all_data = array();
                for($x = 1; $x<=$postcount; $x++) {
                    $f = 'posts/'.$filedata[$x]; 
                    $fobj = fopen($f, 'r'); 
                    $size = filesize($f); 
                    $data = fread($fobj, $size);
                    fclose($fobj);
                    array_push($all_data, explode("\n",$data));
                }*/
                $all_data = get_posts();
                $postcount = sizeof($all_data);
                //echo $all_data;
        ?>
		<script type="text/javascript">
			var all_data = <?php echo json_encode($all_data); ?>;
		</script>
		
    </head>
    
    <body onload="loadAll(all_data)">
		<?php
			include("templates/header.php");
		?>
		
		<div class="modal">
        	<div class="modal_content">
        		<span class="close">&times;</span>
        		<h3> Add a new post </h3>
        		<form method="POST" id="new_post">
        			<div><input type="text" name="post_text" placeholder="Enter Post Text" required></div>
        			<!--<div>Choose an image: <input id="image_file" type="file" name="post_image" accept="image/*" value="NONE"></div>-->
        			<button name="add_post">Create New Post</button>
        		</form>
				
        	</div>
        </div>
        <?php 
        	insertPost();
        ?>
		
        <div class="feed">
            <section class="head">
                <h1> NEWS FEED </h1>
            </section>
            
            <section class="add_post">
            	<button> Add a New Post </button>
            </section>
            
            <?php
                
            	for($x = $postcount; $x>=1; $x--) {
            		include("templates/post.php");
            		echo "
            		<script> 
            			document.getElementsByClassName('post')[$postcount-".$x."].id = 'post".$x."';
            		</script>";
            	}
                global $con;
                $email=$_SESSION['user_email'];
                $user="select * from users where user_email='$email'";
                $run_user=mysqli_query($con,$user);
                $row_user=mysqli_fetch_array($run_user);
                $user_name = $row_user['user_name'];
                echo "
                <script>
                        localStorage.setItem('user','$user_name');
                </script>
                ";
            ?>
            
        </div>
    </body>

</html>
