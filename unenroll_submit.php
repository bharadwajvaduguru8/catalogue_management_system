<?php
//echo "Hi";
// print_r($_POST);
// die;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cataloguesystem";
$conn =  mysqli_connect($servername, $username, $password, $dbname);
$sql = "DELETE FROM enrolledcourses WHERE username='".$_POST['username']."' and coursename='".$_POST['coursename']."'";
#echo "Hi";
if ($conn->query($sql) === TRUE) {
         echo $html_msg = "You have successfully unenrolled from the course!";  
       } else {
         echo $html_msg = "Something went wrong! The course was not unenrolled";
       }
 //mysqli_query($conn,$sql) or die(mysqli_error($conn)); 