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
    $coursecode = $_POST['coursecode'];
    $coursetitle = $_POST['coursetitle'];
    $sql = "INSERT INTO `course` (`id`, `student id`, `course code`, `course title`) VALUES (NULL, '$studentid', '$coursecode', '$coursetitle')";

    if ($conn->query($sql) === TRUE) {
     echo "You have registered for the course successfully!";
     
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();  
?>
<form>
    <button class="btn"><a href="coursereg.php">Go Back</button>
    <button class="btn1"><a href="homepage.html">HOME</button>
</form>
