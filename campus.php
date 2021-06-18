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

    $campusname = $_POST['campusname'];
    $campusaddress = $_POST['campusaddress'];
    $distance = $_POST['distance'];
    $sql = "INSERT INTO `campus` (`id`, `campus name`, `campus address`, `distance`) VALUES (NULL, '$campusname', '$campusaddress', '$distance')";

    if ($conn->query($sql) === TRUE) {
     echo "You have successfully registered for the campus!";
     
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();  
?>
<form>
    <button class="btn"><a href="campusreg.php">Go Back</button>
    <button class="btn1"><a href="homepage.html">HOME</button>
</form>

