<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "cataloguesystem";
$conn = new mysqli($servername, $username, $password, $database);
if(isset($_POST['Submit']))
{
 session_start();
 $coursename=$_POST['coursename'];
 $courseid=$_POST['courseidid'];
 $dept=$_POST['dept'];
 $message=$_SESSION['username'];
 $sql = "INSERT INTO courses (coursename, courseid, dept, faculty,is_published) VALUES ('$coursename', '$courseid', '$dept','$message','0')";
 mysqli_query($conn,$sql);
 header("location: upcomingcourses.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="cataloguesystem.css">
  <script>
  function validateForm() {
   var x = document.forms["form"]["coursename"].value;
   if (x == "") {
    alert("Please specify your Coursename");
    return false;
  }
  var x = document.forms["form"]["Courseid"].value;
  if (x == "") {
   alert("Please specify correct Course Id");
   return false;
 }
 var x = document.forms["form"]["Department"].value;
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

		<div class="signupdiv">
		<form method="POST" enctype="multipart/form-data" name="form" onsubmit="return validateForm()">
			<h1><u>Add the Course</u></h1>
			<br>
			<br>
		    <label> <b> Coursename: &nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp;&emsp;&nbsp;&nbsp;</b></label> <input type="text" name="coursename" placeholder="Please enter your Coursename" title="Please enter your coursename" >
		    <br>
		    <br>
		    <label> <b> Course Id: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</b></label> <input type="text" placeholder="Please enter the courseid"name="courseid">
		    <br>
		    <br>
		    <label> <b> Department: &emsp;&emsp;&emsp;&emsp;&emsp;</b></label> <input type="text" placeholder="Please enter the Department"name="dept">
		    <br>
		    <br>
		    <input type="submit" name="Submit" value="  Submit  ">
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