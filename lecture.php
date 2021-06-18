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

    $lecturername = $_POST['lecturername'];
    $lecturetitle = $_POST['lecturetitle'];
    $schoolname = $_POST['schoolname'];
    $sql = "INSERT INTO `lecturer` (`id`, `lecturer name`, `lecture title`,`school name`) VALUES (NULL, '$lecturername', '$lecturetitle', '$schoolname');";

    if ($conn->query($sql) === TRUE) {
     echo "You have successfully registered for the lecture!";
     
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();  
?>
<form>
    <button class="btn"><a  href="lecturereg.php">Go Back</button>
    <button class="btn1"><a href="homepage.html">HOME</button>
</form>

