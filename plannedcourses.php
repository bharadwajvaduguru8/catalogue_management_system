
<?php
session_start();
//echo($_SESSION['username']);
				$message=$_SESSION['username'];
				//echo "<script type='text/javascript'>alert(' $message (Student)');</script>";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cataloguesystem";

	$conn =  mysqli_connect($servername, $username, $password, $dbname);
	if (mysqli_connect_errno()) {
	    echo "An Error occured while connecting to database ".mysqli_connect_errno();
	}

		$message=$_SESSION['username'];
		$selectQuery = "SELECT * FROM courses WHERE faculty='$message'";
		$result=mysqli_query($conn, $selectQuery);
		$count  = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="cataloguesystem.css">
</head>
<body>
	<div class="wrapper">
		<div class="topnav">

		    <pre class="tab2"></pre><button class="button3"><a href="login.php">login</a></button>
		    <pre class="tab"></pre>
		    <button class="button4"><a href="signup.php">signup</a></button>
		    

		    <pre class="tab4"></pre><a href=https://www.facebook.com/><img class="image1" src="static\fb.png" ></a>

		    <pre class="tab"></pre><a href=https://www.instagram.com/><img class="image2" src="static\instagram.png" ></a>

		    <pre class="tab"></pre><a href=https://www.youtube.com/?gl=IN><img class="image3" src="static\youtube.png" ></a>

		    <pre class="tab6"></pre><button class="button_logout"><a href=logout.html>Logout</a></button>

		</div>
		<div class="middlenav">
			<div class="midnav">
				<ul style="float:right">
				<?php	
				echo '<a href="homepage_afterstafflogin.php">Home     </a>';
				echo '&nbsp;&nbsp;&nbsp;';
				echo '<a href="aboutpage_afterstafflogin.php">About   </a>';
				echo '&nbsp;&nbsp;&nbsp;';
				echo '<a href="Blog_staff.php">Forum    </a>';
				echo '&nbsp;&nbsp;&nbsp;';
				echo '<a href=upcomingcourses.php?username=';
				echo $message;
				echo '>Upcoming courses</a>';
				echo '&nbsp;&nbsp;&nbsp;';
				echo '<a href=plannedcourses.php?username=';
				echo $message;
				echo '>Planned courses</a>';
				echo '&nbsp;&nbsp;&nbsp;';
				echo '<a href=feedback_staff.php?username=';
				echo $message;
				echo '>Feedback</a>';
				?>
			</ul>
			</div>
		</div>
		<div class="plannedcourses">
			<h2><center>Planned Courses</center></h2>
			<div class="gridee2">
		  		<br>
		  		<br>
<?php 
		  		  $i=0;
					while($row = $result->fetch_assoc()) {
					?>
		  			<div class="enroll<?php echo $i ?>" style="margin: 10px;">
		  			<div class="courseimage1176">
		  				<img src="static/empty155.png" style="height: 136%;width: 100%;
"></>
					</div>
					<div class="coursename1176">
					<br>
					<br>
					<h3><?php echo $row["courseid"]?>--<?php echo $row["coursename"]?></h3>
					<br>
					</div>
		  		</div> <?php
		  		$i++;
		  		}
		  		?>
		  		<!--<div class="two2">
		  			<div class="courseimage199">
		  				<img src="static/empty90.png"></>
					</div>
					<div class="coursename199">
					<br>
					<br>
					<h4><center>CSE 5330-Database Systems<center></h4>
					</div>
		  		</div>
		  		<div class="three3">
		  			<div class="courseimage199">
		  				<img src="static/empty90.png"></>
					</div>
					<div class="coursename199">
					<br>
					<br>
					<h4><center>CSE 6367-Computer vision</center></h4>
					</div>
		  		</div>
		  		<div class="four4">
		  			<div class="courseimage199">
		  				<img src="static/empty90.png"></>
					</div>
					<div class="coursename199">
					<br>
					<br>
					<h4><center>CSE 5382-Secure Programming</center></h4>
					</div>
		  		</div>
		  		<div class="five5">
		  			<div class="courseimage199">
		  				<img src="static/empty90.png"></>
					</div>
					<div class="coursename199">
					<br>
					<br>
					<h4><center>CSE 5321- Software Testing</center></h4>
					</div>
		  		</div> -->
		  		</div>
		</div>
		</div>
<footer>
	<div class="Foot">
		<br>
		<br>
		<div class="login_txt">
		<hr style="width:90%;margin-left:05%; align-items: center;">
		<br>
			<font color="#FFFFFF" style="margin-left: 05%;">Created by</font>
			<div class="sub_txt">
			<font color="#FFFFFF" style="margin-left: 75%;">All Rights Reserved</font>
		</div>
	</div>
	</div>
</footer>
	</div>
</body>
</html>
