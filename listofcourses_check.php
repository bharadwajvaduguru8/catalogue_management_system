<?php
session_start();
//echo($_SESSION['username']);
				$message=$_SESSION['username'];
				//echo "<script type='text/javascript'>alert(' $message (Student)');</script>";
?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cataloguesystem";

	$conn =  mysqli_connect($servername, $username, $password, $dbname);
	if (mysqli_connect_errno()) {
	    echo "An Error occured while connecting to database ".mysqli_connect_errno();
	}

	$prj= mysqli_query($conn,"select dept,coursename,courseid,faculty from courses") or die(mysqli_error($conn));
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
<link rel="stylesheet" type="text/css" href="./style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
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
				<a href="homepage_afterstudentlogin.php">Home</a> &emsp;
				<a href="aboutpage_afterstudentlogin.php">About</a> &emsp;
				<a href="Blog_student.php">Forum</a> &emsp;
				<a href="listofcourses.php">List of courses</a>&emsp;
				<a href="feedback_student.php">Feedback</a>
			</ul>
			</div>
		</div>

        <section class="content">
            <label class="content-heading">Courses Offered</label>
            <button class="btn1 btn-enrolled1"><a href=enroll.php>Enrolled courses</a></button>
            <br><br>
            <div class="content-flex-container1">
                <div class="content-flex-columns1">
                    <div class="side-tab1">
                        Choose your courses:
                    </div>
                </div>

                <div class="content-flex-columns1">
                    <div class="cards1">
                    <?php foreach($record as $rec){?>
                        <div class="card1"  onclick='add("<?php echo $x ?>","<?php echo $y ?>","<?php echo $message ?>","<?php echo $faculty ?>")';

                        	<?php $a = 0; ?>
                            <div class="card-image1"></div>
                            <div class="card-text1"><?php 
                            echo $rec['courseid'];
                            echo $rec['coursename'];
                            ?></div>
                            <?php 
                            $x=$rec['coursename'];
							$faculty=$rec['faculty'];
							$y=$rec['courseid']; ?>
						<?php } ?>
						                        <?php	echo $x; ?>
							</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
			function add(variable,variable1,variable2,variable3)
			{
				console.log(variable);
				$.ajax({
				  method: "POST",
				  url: "enroll_submit.php",
				  data: { username: variable2, courseid:variable1, coursename: variable,faculty:variable3},
				  success: function(msg) {
				  	alert(msg);
				  }
				})
				

				
			}
		</script>