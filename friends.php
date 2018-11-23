<html>

    <head>
        <title>LIFEBOOK</title>
        <link href="styles/header.css" type="text/css" rel="stylesheet">
        <link href="styles/friends.css" type="text/css" rel="stylesheet">
        <script src="scripts/friends.js"></script>
        
        <script type="text/javascript">
			<?php
				$filename = "posts/friends.txt"; 
				$file = fopen($filename, 'r'); 
				$size = filesize($filename); 
				$filedata = fread($file, $size);
				fclose($file);
				$filedata = explode("\n",$filedata);
				$postcount = (int)$filedata[0];
			?>
			var all_data = <?php echo json_encode($filedata); ?>;
			console.log(all_data);
		</script>
		
    </head>

    <body onload="func(all_data)">
        <?php
			include("templates/header.php");
		?>
        <section class="friend-list">
            <div class="friend">
                <a href="#"><img src="atul.jpeg" alt="Atul" class="profile_pic"/></a>
                <ul class="friend_options">
                    <li class="name"><a href="#"><h4>Atul Anand Gopalkrishnan</h4></a></li>
                    <li><button class="add_friend">Add Friend</button></li>
                    <li><button class="report_user">Report User</button></li>
                    <li><button class="view_profile">View Profile</button></li>
                </ul>
            </div>
            <div class="friend">
                <a href="#"><img src="atul.jpeg" alt="Atul" class="profile_pic"/></a>
                <ul class="friend_options">
                    <li class="name"><a href="#"><h4>Atul Anand Gopalkrishnan</h4></a></li>
                    <li><button class="add_friend">Add Friend</button></li>
                    <li><button class="report_user">Report User</button></li>
                    <li><button class="view_profile">View Profile</button></li>
                </ul>
            </div>
            <div class="friend">
                <a href="#"><img src="atul.jpeg" alt="Atul" class="profile_pic"/></a>
                <ul class="friend_options">
                    <li class="name"><a href="#"><h4>Atul Anand Gopalkrishnan</h4></a></li>
                    <li><button class="add_friend">Add Friend</button></li>
                    <li><button class="report_user">Report User</button></li>
                    <li><button class="view_profile">View Profile</button></li>
                </ul>
            </div>
            <div class="friend">
                <a href="#"><img src="atul.jpeg" alt="Atul" class="profile_pic"/></a>
                <ul class="friend_options">
                    <li class="name"><a href="#"><h4>Atul Anand Gopalkrishnan</h4></a></li>
                    <li><button class="add_friend">Add Friend</button></li>
                    <li><button class="report_user">Report User</button></li>
                    <li><button class="view_profile">View Profile</button></li>
                </ul>
            </div>
            <div class="friend">
                <a href="#"><img src="atul.jpeg" alt="Atul" class="profile_pic"/></a>
                <ul class="friend_options">
                    <li class="name"><a href="#"><h4>Atul Anand Gopalkrishnan</h4></a></li>
                    <li><button class="add_friend">Add Friend</button></li>
                    <li><button class="report_user">Report User</button></li>
                    <li><button class="view_profile">View Profile</button></li>
                </ul>
            </div>
        </section>
        <script>
        	var friends=document.getElementsByClassName("friend");
        	console.log(friends[0]);
        	for(j=0;j<friends.length;j++)
        		friends[j].id = "friend"+String(j+1);
        </script>
    </body>
</html>
