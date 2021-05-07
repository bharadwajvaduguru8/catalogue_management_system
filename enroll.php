<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cataloguesystem";

	$conn =  mysqli_connect($servername, $username, $password, $dbname);
	if (mysqli_connect_errno()) {
	    echo "An Error occured while connecting to database ".mysqli_connect_errno();
	}

				session_start();
				$message=$_SESSION['username'];
				$selectQuery = "SELECT username,coursename,courseid FROM enrolledcourses WHERE username='$message'";
		$result=mysqli_query($conn, $selectQuery);
		$count  = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="cataloguesystem.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
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

		    <pre class="tab6"></pre><button class="button_logout"><a href=logout.php >Logout</a></button>

		</div>

		<div class="middlenav">
			<div class="midnav">
				<ul style="float:right">		
				<a href="homepage_afterstudentlogin.php">Home</a> &emsp;
				<a href="aboutpage_afterstudentlogin.php">About</a> &emsp;
				<a href="Blog_student.php">Forum</a> &emsp;
				<a href="listofcourses.php">List of courses</a>&emsp;
				<a href="feedback_student.php">Feedback</a>
			</ul>
			</div>
		</div>
		<div class="enrolldiv">
			<h2>Enrolled Courses</h2>
		</div>
		<div class="enroll_courses">
			<div class="gridee1">
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
					<br><button class="button_unen"><a href="enroll.php" style="
    text-decoration: none;"onclick='unenroll("<?php echo $row["coursename"] ?>","<?php echo $_SESSION['username'] ?>")'>Unenroll</a></button>
					</div>
		  		</div> <?php
		  		$i++;
		  		}
		  		?>
		  		<!-- <div class="two_enroll">
		  			<div class="courseimage1176">
		  				<img src="static/empty155.png"></>
					</div>
					<div class="coursename1176">
					<br>
					<br>
						<h3>CSE 5365- Computer Graphics</h3>
					<br><button class="button3"><a href="enroll.html">Unenroll</a></button>
					</div>
		  		</div>
		  		<div class="three">
		  			<div class="courseimage1176">
		  				<img src="static/empty155.png"></>
					</div>
					<div class="coursename1176">
					<br>
					<br>
						<h3>CSE 5365- Data Mining</h3>
					<br><button class="button3"><a href="enroll.html">Unenroll</a></button>
					</div>

		  		</div> -->
		  		<br>
		  		<br>
		  		<br>
		  		<br>
		  		<br>
		  		<br>
		  		<br>
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
<script>
			function unenroll(coursename,username)
			{

				//console.log(username);
				$.ajax({	
				  type: "POST",
				  data: { username: username, coursename: coursename},
				  url: "unenroll_submit.php",
				  
				  success: function(msg) {
				  	alert(msg);
				  }
				});
				

				
			}
		</script>
