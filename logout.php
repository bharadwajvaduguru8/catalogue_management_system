<?php
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cataloguesystem";

	$conn =  mysqli_connect($servername, $username, $password, $dbname);
	// remove all session variables
session_unset();

// destroy the session
session_destroy();
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
		    <button class="button4"><a href=signup.php>signup</a></button>

		</div>

		<div class="middlenav">
			<div class="midnav_short">
				<ul style="float:right">		
				<a href="homepage.html">Home</a> &emsp;
				<a href="aboutpage.html">About</a> &emsp;
				<a href="Blog.html">Forum</a>
			</ul>
			</div>
		</div>
		<div class="logindiv">
		<form method="POST" enctype="multipart/form-data">
			<h1>Logged Out</h1>
			<br>
			<br>
		    <label> <h3> You have been logged Out</h3></label> 
		    <br>
		    <br>
		</form> 
		    
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
