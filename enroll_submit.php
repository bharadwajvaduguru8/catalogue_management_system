<?php
//echo "Hi";
//print_r($_POST['']);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cataloguesystem";
$conn =  mysqli_connect($servername, $username, $password, $dbname);
 $sql = "INSERT INTO enrolledcourses(username, courseid, coursename,faculty) VALUES ('".$_POST['username']."', '".$_POST['courseid']."', '".$_POST['coursename']."','".$_POST['faculty']."')";
#echo "Hi";
if ($conn->query($sql) === TRUE) {
         echo $html_msg = "The corse got added successfully";  
       } else {
         echo $html_msg ="The course is already in your list, try a different one!";
       }
 //mysqli_query($conn,$sql) or die(mysqli_error($conn)); 