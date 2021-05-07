<?php
echo "Hi";
print_r($_POST);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cataloguesystem";
$conn =  mysqli_connect($servername, $username, $password, $dbname);
echo $sql = "INSERT INTO feedback(username, courseid, feedback) VALUES ('".$_POST['username']."', '".$_POST['course']."', '".$_POST['content']."')";
header('Location:http://localhost/project4/homepage_afterstudentlogin.php?username='.$_POST['username']) ;
// echo "Hi";
 mysqli_query($conn,$sql) or die(mysqli_error($conn)); 