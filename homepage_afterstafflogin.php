<?php
				session_start();
				$message=$_SESSION['username'];
	//echo "<script type='text/javascript'>alert('logged in as $message(Staff)');</script>";
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
	<div class="maindiv">
  	<table class="submain">
  		<br><br>
  	<tr><h1> <font color="#E3E1DF">Catalogue  Management System </font></h1></tr>
  	<br><br>
  	<tr><h3><font color="#CFCCC8"> We got courses for every taste </font></h3></tr>
      <tr>
      <td><a href="cs.html"><h3><center>Computer Science</center></h3><br>
	<p><center>"Take a look at oue academic program"</center></p></a></td>
      <td><a href="EE.html"><h3><center>Electrical Engineering</center></h3><br>
  	<p><center>"Take a look at oue academic program"</center></p></a></td>
      <td><a href="CE.html"><h3><center>Civil Engineering</center></h3><br>
  	<p><center>"Take a look at oue academic program"</center></p></a></td>
      </tr>
    </table>	
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
