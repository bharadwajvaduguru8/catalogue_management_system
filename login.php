<?php
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cataloguesystem";

	$conn =  mysqli_connect($servername, $username, $password, $dbname);
	if (mysqli_connect_errno()) {
	    echo "Error occured while connecting to database ".mysqli_connect_errno();
	}

	if(isset($_POST['Submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

		if(!isset($username)){
			echo "<p><font color=red size='10pt'>User name is required for login</font></p>";
		}
		else if(!isset($password)){
			echo "<p><font color=red size='10pt'>Password is required for login</font></p>";
		}
		
		$selectQuery = "SELECT username,password,role FROM login WHERE username='$username' AND password='$password'";
		$result=mysqli_query($conn, $selectQuery);
		$count  = mysqli_num_rows($result);
		if($count==0) {
			echo '<script>alert("Either login or password is wrong")</script>';
		} 
		else {

			$logged_in_user = mysqli_fetch_assoc($result);
			if ($logged_in_user['role'] == 'Student') {
				$_SESSION['username'] = $logged_in_user['username'];
				header('Location:http://localhost/project4/homepage_afterstudentlogin.php?username='.$username ) ;
			}
			else if ($logged_in_user['role'] == 'Staff') {
				$_SESSION['username'] = $logged_in_user['username'];
				header('Location:http://localhost/project4/homepage_afterstafflogin.php?username='.$username ) ;
			}
			else {
				$_SESSION['username'] = $logged_in_user['username'];
				header('Location:http://localhost/project4/adminpage.php?username='.$username ) ;
			}
			
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="cataloguesystem.css">
 <script>
  function validateForm() {
   var x = document.forms["form"]["username"].value;
   if (x == "") {
    alert("Please specify your Username");
    return false;
  }
 var x = document.forms["form"]["password"].value;
 if (x == "") {
  alert("Please enter the password");
  return false;
}
}
</script>
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
				<a href="homepage.html">Home</a> &emsp;
				<a href="aboutpage.html">About</a> &emsp;
				<a href="Blog.html">Forum</a>
			</ul>
			</div>
		</div>
		<div class="logindiv">
		<form method="POST" enctype="multipart/form-data" name="form" onsubmit="return validateForm()">
			<h1>Login</h1>
			<br>
			<br>
		    <label> <b> Username: </b></label> <input type="text" name="username" placeholder="Please enter your Username" title="Please enter your username(5-15 characters, you may use _@$&#)" pattern="[A-Za-z0-9_@$&# ]{5,15}" >
		    <br>
		    <br>
		    <label><b> Password: </b> </label> <input type="Password" placeholder="Please enter password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
		    <br>
		    <br>
		    <br>
		    <input type="submit" name="Submit" value="Submit" style="width: 25%; height:5%; margin-left: 45%;" />
		  </form> 
		    
		</div>
<footer>
	<div>
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
