<?php
				session_start();
				$message=$_SESSION['username'];
				//echo "<script type='text/javascript'>alert('logged in as $message (Student)');</script>";
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','cataloguesystem');
try
{
$conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
$sql ="SELECT description FROM content ";
$query= $conn -> prepare($sql);
$query-> execute();
$result = $query->fetch(PDO::FETCH_BOTH);
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

		    <pre class="tab6"></pre>

		</div>

		<div class="middlenav">
			<div class="midnav_short">
				<ul style="float:right">		
				<?php	
				echo '<a href="homepage_afterstudentlogin.php">Home     </a>';
				echo '&nbsp;&nbsp;&nbsp;';
				echo '<a href="aboutpage_afterstudentlogin.php">About   </a>';
				echo '&nbsp;&nbsp;&nbsp;';
				echo '<a href="Blog_student.php">Forum    </a>';
				echo '&nbsp;&nbsp;&nbsp;';
				echo '<a href=listofcourses.php?username=';
				echo $message;
				echo '>List of courses</a>';
				echo '&nbsp;&nbsp;&nbsp;';
				echo '<a href=feedback_student.php?username=';
				echo $message;
				echo '>Feedback</a>';
				?>
			</ul>
			</div>
		</div>
		<div class="about_main">
			<div class="row">
				<img class="image5" src="static\aboutus2.jpg" >
			</div>
			<div class="row2">
				<h2>About us</h2>
				<br>
				<p><?php echo htmlentities($result[0]); ?></p>
				<br>
				
				 <button class="button3"><a href="about_learnmore.php">learn more</a></button>
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
