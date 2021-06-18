<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="student.css">
	<title>Student Registration form</title>
</head>
<center>
<body>
	<div>
		<form action="student.php" method="post">
			<div class="container">
				<h1>Student Details</h1>
				<p>Enter the Student details & submit</p>
				<p>To create your own student ID, type "ABCUNI & the last 4 digits of your phone number."</p> 	
				    <input type="text" name="studentid" id="id" placeholder="Enter the student id" required>
			
				    <input type="text" name="studentname" id="name" placeholder="Enter the student name" required>
					
			     	<input type="text" name="studentdob" id="dob" placeholder="Enter the student date of birth" required>
			
				    <input type="text" name="studentdoa" id="doa" placeholder="Enter the student date of admission" required>
			
				    <input type="text" name="programcode" id="pc" placeholder="Enter the program code" required>
				    <br>
				<button class="btn">SUBMIT</button>
				<button class="btn1"><a href="homepage.html">HOME</button>
			</div>
		</form>
	</div>
</body>
</center>
</html>