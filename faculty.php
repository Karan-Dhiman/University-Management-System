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

    $staffid = $_POST['staffid'];
    $facultyname = $_POST['facultyname'];
    $deanname = $_POST['deanname'];
    $facultybuilding = $_POST['facultybuilding'];
    $sql = "INSERT INTO `faculty` (`id`, `staff id`, `faculty name`, `dean name`, `faculty building`) VALUES (NULL, '$staffid', '$facultyname', '$deanname', '$facultybuilding')";

    if ($conn->query($sql) === TRUE) {
     echo "You have successfully registered for the faculty!";
     
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();  
?>
<form>
    <button class="btn"><a  href="facultyreg.php">Go Back</button>
    <button class="btn1"><a href="homepage.html">HOME</button>
</form>

