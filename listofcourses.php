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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="cataloguesystem.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="topNav">
            <button class="btn btn-outline">Login</button>
            <button class="btn btn-primary">Sign Up</button>
        </div>
        <nav>
            <ul>
                <li> <a href="homepage_afterstudentlogin.php">Home</a></li>
                <li> <a href="aboutpage_afterstudentlogin.php">About</a></li>
                <li> <a href="Blog_student.php">Forum</a></li>
                <li> <a href="listofcourses.php">List of Courses</a></li>
                <li> <a href="feedback_student.php">Feedback</a></li>
            </ul>
        </nav>

        <section class="content">
            <label class="content-heading">Courses Offered</label>
            <button class="btn btn-enrolled"><a href="enroll.php">Enrolled Courses</a></button>
            <br><br>
            <div class="content-flex-container">
                <div class="content-flex-columns">
                    <div class="side-tab">
                        Choose your courses:
                    </div>
                </div>

                <div class="content-flex-columns">

                    <div class="cards">
                         <?php foreach($record as $rec){ ?>
                            <div class="card" onclick='add("<?php echo $rec["coursename"] ?>","<?php echo $rec["courseid"] ?>","<?php echo $message ?>","<?php echo $rec["faculty"] ?>")';>
                                <div class="card-image"></div>
                                <div class="card-text">
                                    <?php echo $rec['courseid']; ?> --
                                <?php echo $rec['coursename']; ?>
                                </div>
                                
                            </div>

                             <?php } ?>

                    </div>
                </div>
            </div>
        </section>

        <footer id="footer">
            <label class="lb1">Created by</label>
            <label class="lb2">All Rights Reserved</label>
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