<?php
session_start();
				$message=$_SESSION['username'];
				//echo "<script type='text/javascript'>alert('logged in as $message (Student)');</script>";
			
?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cataloguesystem";

	$conn =  mysqli_connect($servername, $username, $password, $dbname);
	$prj= mysqli_query($conn,"select courseid from enrolledcourses where username='$message'") or die(mysqli_error($conn));
        $record = array();
        while($row = mysqli_fetch_assoc($prj)){
            $record[] = $row;

        }
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
<link rel="stylesheet" type="text/css" href="cataloguesystem.css">
</head>
<body>
	 <div class="wrapper">
        <div class="topNav">
            <button class="btn btn-outline">Login</button>
            <button class="btn btn-primary">Sign Up</button>
        </div>
        <nav>
            <ul>
                <li> <a href="">Home</a></li>
                <li> <a href="">About</a></li>
                <li> <a href="">Forum</a></li>
                <li> <a href="">List of Courses</a></li>
                <li> <a href="">Feedback</a></li>
            </ul>
        </nav>

        <section class="content">
           		<form  method="POST" enctype="multipart/form-data" action="feedback_submit.php">	
           			<div class="drop">
           				<label>Select the Course Id:</label>
             			<select class = "myList" name="course">
             				 <?php //$a = 0; ?>
							      <?php foreach($record as $rec){ 	
				               echo "<option value ="; 
				               echo $rec['courseid'];
				               echo ">";
				               echo $rec['courseid'];
				               echo "</option>";
				               }
				               ?>
             			</select>
           			</div> <br>
           			<textarea name="content" id="textarea" class="feed_txt" style="margin: 0px 65.3125px 65.3125px -87.0938px;width: 785px;height: 225px;"></textarea>

           			<br>
           			 <input type="hidden" name="username" value="<?php echo $message ?>">
		    		<input type="submit" class="btn btn-primary" value="Submit" />
				</form>

				 <form action="MAILTO:bharadwaj.vaduguru@mavs.uta.edu?subject=Feedback for the courses" method="POST" enctype="multipart/form-data"> <br>
				 	<div>
				 	<button class="btn btn-outline"> Feedback through Mail</button>
				 </div>
				 </form>
        </section>

        <footer id="footer">
            <label class="lb1">Created by</label>
            <label class="lb2">All Rights Reserved</label>
        </footer>
    </div>
<!-- 	<div class="wrapper">
		<div class="topnav">
		    <pre class="tab2"></pre><button class="button3"><a href="login.php">login</a></button>
		    <pre class="tab"></pre>
		    <button class="button4"><a href=signup.php>signup</a></button>	

		    <pre class="tab4"></pre><a href=https://www.facebook.com/><img class="image1" src="static\fb.png" ></a>

		    <pre class="tab"></pre><a href=https://www.instagram.com/><img class="image2" src="static\instagram.png" ></a>

		    <pre class="tab"></pre><a href=https://www.youtube.com/?gl=IN><img class="image3" src="static\youtube.png" ></a>
		</div>
		<div class="middlenav">
			<div class="midnav">
				<ul style="float:right">		
				<a href="homepage_afterstudentlogin.php">Home</a> &emsp;
				<a href="aboutpage_afterstudentlogin.php">About</a> &emsp;
				<a href="Blog_student.php">Forum</a> &emsp;
				<a href="listofcourses.php">List of courses</a>&emsp;
				<a href="feedback_student.php">Feedback</a></ul>
			</div>
		</div>
		<div class="maintitle"> 
			<h3 ><center>Feedback about the courses</center></h3>
		</div>
		<br>
		<div class="feedbackstudent">
		<form  method="POST" enctype="multipart/form-data" action="feedback_submit.php">	
			<div class="drop">
			 <label>Select the Course Id:</label>
             <select class = "myList" name="course">
             	 <?php //$a = 0; ?>
			      <?php foreach($record as $rec){ 	
               echo "<option value ="; 
               echo $rec['courseid'];
               echo ">";
               echo $rec['courseid'];
               echo "</option>";
               }
               ?>
             </select>
         	</div>
           <br>
		   <textarea name="content" id="textarea" class="feed_txt" style="margin: 0px 65.3125px 65.3125px -87.0938px;width: 785px;height: 225px;"></textarea>
		    <br>
		    <input type="hidden" name="username" value="<?php echo $message ?>">
		    <input type="submit" value="Submit" style="width: 15%; height:5%; margin-left: -85%;" />
		 </form> 
		 <form action="MAILTO:bharadwaj.vaduguru@mavs.uta.edu?subject=Feedback for the courses" method="POST" enctype="multipart/form-data">
		 	<div class="mailbutton">
		 	<button>&emsp; Feedback through Mail&emsp;</button>
		 </div>
		 </form>	
		</div></div>
<footer>
	<div class="Foot">
		<br>
		<br>
		<hr style="width:90%;margin-left:05%; align-items: center;">
		<br>
		<font color="#FFFFFF" style="margin-left: 05%;">Created by</font>
		<font color="#FFFFFF" style="margin-left: 75%;">All Rights Reserved</font>
	</div>
</footer>
	</div> -->
</body>
</html>