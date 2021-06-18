<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "university";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $studentid = $_POST['studentid'];
    $studentname = $_POST['studentname'];
    $studentdob = $_POST['studentdob'];
    $studentdoa = $_POST['studentdoa'];
    $programcode = $_POST['programcode'];
    $sql = "INSERT INTO `student` (`id`, `student id`, `student name`, `student dob`, `student doa`, `Program code`) VALUES (NULL, '$studentid', '$studentname', '$studentdob', '$studentdoa', '$programcode')";

    if ($conn->query($sql) === TRUE) {
     echo "You have successfully registered as a student!";
     
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();  
?>
<form>
    <button class="btn"><a  href="studentreg.php">Go Back</button>
    <button class="btn1"><a href="homepage.html">HOME</button>
</form>

