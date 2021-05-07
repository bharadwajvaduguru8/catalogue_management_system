<?php
	$servername = @"127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "cataloguesystem";

	$conn =  mysqli_connect($servername, $username, $password, $dbname);
	if (mysqli_connect_errno()) {
	    echo "An Error occured while connecting to database ".mysqli_connect_errno();
	}

	$prj= mysqli_query($conn,"select dept,tag from homepage") or die(mysqli_error($conn));
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
				<a href="homepage.php">Home</a> &emsp;
				<a href="aboutpage.html">About</a> &emsp;
				<a href="Blog.html">Forum</a>
			</ul>
			</div>
		</div>
	<div class="maindiv_homepage">
  	<table class="submain_homepage">
  		<br>
  	<tr><h1> <font color="#E3E1DF">Catalogue  Management System </font></h1></tr>
  	<br><br>
  	<tr><h3><font color="#CFCCC8"> We got courses for every taste </font></h3></tr>
      <tr>
      <?php $a = 0; ?>
      <?php foreach($record as $rec){
      	 if ($a%3==0) { 
  				echo "<tr>";
  				echo "</tr>";
				 } 
				echo "<td>";
				echo '<a href="cs.html"><h3><center>';
				echo "     ";
				echo "<br>";
				echo $rec['dept'];
				echo "</center></h3><br>";
				echo "<p><center>";
				echo $rec['tag'];
				echo "     ";
				echo"</center></p></a></td>";
				$a=$a+1;
			}
				?>  	
    </tr>
    </table>	
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