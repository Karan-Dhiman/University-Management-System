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

    $clubname = $_POST['clubname'];
    $clubphoneno = $_POST['clubphoneno'];
    $sport = $_POST['sport'];
    $campusbuilding = $_POST['campusbuilding'];
    $sql = "INSERT INTO `club` (`id`, `club name`, `club phone no`, `sport`, `campus building`) VALUES (NULL, '$clubname', '$clubphoneno', '$sport', '$campusbuilding')";

    if ($conn->query($sql) === TRUE) {
     echo "You have successfully registered for the club!";
     
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();  
?>
<form>
    <button class="btn"><a href="clubreg.php">Go Back</button>
    <button class="btn1"><a href="homepage.html">HOME</button>
</form>

