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

    $schoolname = $_POST['schoolname'];
    $schoolbuilding = $_POST['schoolbuilding'];
    $campusname = $_POST['campusname'];
    $sql = "INSERT INTO `school` (`id`, `school name`, `school building`, `campus name`) VALUES (NULL, '$schoolname', '$schoolbuilding', '$campusname')";

    if ($conn->query($sql) === TRUE) {
     echo "You have successfully registered for the school of your choice!";
     
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();  
?>
<form>
    <button class="btn"><a href="schoolreg.php">Go Back</button>
    <button class="btn1"><a href="homepage.html">HOME</button>
</form>

