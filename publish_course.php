<?php
//echo "Hi";
// print_r($_POST);
// die;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cataloguesystem";
$conn =  mysqli_connect($servername, $username, $password, $dbname);
 $sql = "UPDATE courses SET is_published =1 WHERE faculty='".$_POST['username']."' and courseid='".$_POST['courseid']."'";
#echo "Hi";
if ($conn->query($sql) === TRUE) {
         echo $html_msg = "The course is published sucessfully and the students can get enrolled";  
       } else {
         echo $html_msg = "Something went wrong! The course was not published";
       }
 //mysqli_query($conn,$sql) or die(mysqli_error($conn)); 