<?php
session_start();
//echo($_SESSION['username']);
				$message=$_SESSION['username'];
				//echo "<script type='text/javascript'>alert(' $message (Student)');</script>";
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
				echo '<a href=feedback_staff.php?username=';
				echo $message;
				echo '>Feedback</a>';
				?>
			</ul>
			</ul>
			</div>
		</div>
		<div class="about_main">
			<div class="row">
				<img class="image5" src="static\aboutus2.jpg" >
			</div>
			<div class="row_txt">
				<br>
				<h2>Catalogue Management System</h2>
				<br>
				<p>This website aids the institution to function smoothly, it helps students, staff and admin to mangage their works properly. A studnet can enroll, give feedback to different courses and the faculty on other hand can add new courses, view feedback from students. Admin access helps to add, edit or delete users.</p>
				<br>
			</div>

			<div class="row3">
				<br><br>
				<h2>About the Various Departments</h2>
				<br>
				<p>This website aids the institution to function smoothly, it helps students, staff and admin to mangage their works properly. A studnet can enroll, give feedback to different courses and the faculty on other hand can add new courses, view feedback from students. Admin access helps to add, edit or delete users.</p>
				<br>
			</div>
			<div class="row4">
				<img class="image_dept" src="static\profile1.jpg">
			</div>
			<div class="row_three">
				<br>
				<p>This website aids the institution to function smoothly, it helps students, staff and admin to mangage their works properly. A studnet can enroll, give feedback to different courses and the faculty on other hand can add new courses, view feedback from students. Admin access helps to add, edit or delete users.</p>
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
