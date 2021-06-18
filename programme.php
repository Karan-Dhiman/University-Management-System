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

    $programmecode = $_POST['programmecode'];
    $programmetitle = $_POST['programmetitle'];
    $programmelevel = $_POST['programmelevel'];
    $programmelength = $_POST['programmelength'];
    $schoolname = $_POST['schoolname'];
    $sql = "INSERT INTO `programme` (`id`, `program code`, `program title`, `program level`, `program length`, `school name`) VALUES (NULL, '$programmecode', '$programmetitle', '$programmelevel', '$programmelength', '$schoolname');";

    if ($conn->query($sql) === TRUE) {
     echo "You have successfully registered for the programme!";
     
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();  
?>
<form>
    <button class="btn"><a  href="programmereg.php">Go Back</button>
    <button class="btn1"><a href="homepage.html">HOME</button>
</form>

