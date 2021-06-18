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

    $committeetitle = $_POST['committeetitle'];
    $staffid = $_POST['staffid'];
    $facultyname = $_POST['facultyname'];
    $buildingno = $_POST['buildingno'];
    $sql = "INSERT INTO `committee` (`id`, `committee title`, `staff id`, `faculty name`, `building no`) VALUES (NULL, '$committeetitle', '$staffid', '$facultyname', '$buildingno')";

    if ($conn->query($sql) === TRUE) {
     echo "You have successfully registered for the club!";
     
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();  
?>
<form>
    <button class="btn"><a href="committeereg.php">Go Back</button>
    <button class="btn1"><a href="homepage.html">HOME</button>
</form>

