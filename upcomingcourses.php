<?php
session_start();
$message=$_SESSION['username'];
//echo "<script type='text/javascript'>alert('logged in as $message (Student)');</script>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cataloguesystem";

$conn =  mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    echo "An Error occured while connecting to database ".mysqli_connect_errno();
}

	$message=$_SESSION['username'];
	$selectQuery = "SELECT * FROM courses WHERE faculty='".$message."' AND is_published=0";
	$result=mysqli_query($conn, $selectQuery);
	$count  = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
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
				<a href="homepage_afterstafflogin.php">Home</a> &emsp;
				<a href="aboutpage_afterstafflogin.php">About</a> &emsp;
				<a href="Blog_staff.php">Forum</a> &emsp;
				<a href="upcomingcourses.php">Upcoming courses</a>&emsp;
				<a href="plannedcourses.php">Planned courses</a>&emsp;
				<a href="feedback_staff.php">View Feedback</a>
			</ul>
			</div>
		</div>
		<div class="upcomingcourses">
			<h2><center>Courses for upcoming semester</center></h2>
		</div>
		<button class="add_button"> <a href="#" onclick="add_course()">Add Course</a></button>
		<div class="up_courses">
			<div class="gridee1">
		  		<br>
		  		<br>
		  		<?php 
		  		  $i=0;
					while($row = $result->fetch_assoc()) {
					?>
					<div class="enroll<?php echo $i ?>">
						<div class="courseimage44">
							<img src="static/empty155.png"></>
					</div>
					<div class="coursename44">
					<br>
					<br>
					<h3><?php echo $row["courseid"]?>--<?php echo $row["coursename"]?></h3>
					<br><button class="button3"><a href="#" onclick="publish_course('<?php echo $row["courseid"]?>')">Publish</a></button>
					<button class="button3"><a href="#" onclick="delete_course('<?php echo $row["courseid"]?>')">Delete</a></button>
					</div>
					</div>

		  			<!-- <div class="enroll<?php echo $i ?>" style="margin: 10px;">
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
		  		</div>  --><?php
		  		$i++;
		  		}
		  		?>

		  		<!-- <div class="one">
		  			<div class="courseimage44">
		  				<img src="static/empty155.png"></>
					</div>
					<div class="coursename44">
					<br>
					<br>
					<h3>CSE 5321- Software Testing</h3>
					<br><button class="button3"><a href="#">Add/</a><a href="#">Edit/</a><a href="#">Delete</a></button>
					</div>
		  		</div> -->
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
<script type="text/javascript">
	function add_course() {
		// body...
		window.location.href = "http://localhost/project4/add_course.php";
	}
	function publish_course(courseid) {
			//console.log(username);
			var username = "<?php echo $_SESSION['username']; ?>"
				$.ajax({	
				  type: "POST",
				  data: { username: username, courseid: courseid},
				  url: "publish_course.php",
				  
				  success: function(msg) {
				  	alert(msg);
				  	location.reload();
				  }
				});
				

	}
		function delete_course(courseid) {
			//console.log(username);
			var username = "<?php echo $_SESSION['username']; ?>"
				$.ajax({	
				  type: "POST",
				  data: { username: username, courseid: courseid},
				  url: "delete_course.php",
				  
				  success: function(msg) {
				  	alert(msg);
				  	location.reload();
				  }
				});
				

	}
</script>
