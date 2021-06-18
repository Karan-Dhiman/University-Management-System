<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="faculty.css">
	<title>Faculty Registration form</title>
</head>
<center>
<body>
	<div>
		<form action="faculty.php" method="post">
			<div class="container">
				<h1>Faculty Details</h1>
				<p>Enter the Faculty details & submit</p>
					
				    <input type="text" name="staffid" id="id" placeholder="Enter the Staff ID" required>
			
				    <input type="text" name="facultyname" id="facultyname" placeholder="Enter the Faculty name" required>
					
			     	<input type="text" name="deanname" id="deanname" placeholder="Dean Name" required>
			
				    <input type="text" name="facultybuilding" id="facultybuilding" placeholder="Enter the Faculty building number" required>
			
				    <br>
				<button class="btn">SUBMIT</button>
				<button class="btn1"><a href="details.html">Details</button>
				<button class="btn1"><a href="homepage.html">HOME</button>
			</div>
		</form>
	</div>
</body>
</center>
</html>