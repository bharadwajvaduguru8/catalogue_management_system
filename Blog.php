<?php
session_start();
echo($_SESSION['username']);
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
		    <button class="button4"><a href="signup.html">signup</a></button>
		    

		    <pre class="tab4"></pre><a href=https://www.facebook.com/><img class="image1" src="static\fb.png" ></a>

		    <pre class="tab"></pre><a href=https://www.instagram.com/><img class="image2" src="static\instagram.png" ></a>

		    <pre class="tab"></pre><a href=https://www.youtube.com/?gl=IN><img class="image3" src="static\youtube.png" ></a>

		    <pre class="tab6"></pre>

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
	<div class="maindiv_homepage_blog">
  	<table class="submain_homepage_blog">
  		<br>
  	<tr><h1> <font color="#E3E1DF">MY BLOG</font></h1></tr>
  	<br><br>
  	<button class="button_blog"><a href="http://bxv1106.uta.cloud/">View My Blog</a></button>
      <tr>
      <td><a href="#"><h1>Advantages</h1><br>
      	<button class="button_blog1"><a href="http://bxv1106.uta.cloud/uncategorized/advantages/">Learn More</a></button>
	<p><center> &emsp;</center></p></a></td>
      <td><a href="#"><h1>Disadvantages</h1><br>
      	<button class="button_blog2"><a href="http://bxv1106.uta.cloud/uncategorized/Disadvantages/">Learn More</a></button>
  	<p><center></center></p></a></td>
      <td><a href="#"><h1>Need for Improvement</h1><br>
      	<button class="button_blog3"><a href="http://bxv1106.uta.cloud/uncategorized/room-for-improvement/">Learn More</a></button>
  	<p><center></center></p></a></td>
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
