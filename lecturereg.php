<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="lecture.css">
	<title>Lecturer Registration form</title>
</head>
<center>
<body>
	<div>
		<form action="lecture.php" method="post">
			<div class="container">
				<h1>Lecturer Registration Form</h1>
				<p>Enter the Leturer details & submit</p>
					
				    <input type="text" name="lecturername" id="name" placeholder="Enter the Lecturer's name" required>
			
				    <input type="text" name="lecturetitle" id="title" placeholder="Enter the title for the lecture" required>
			
				    <input type="text" name="schoolname" id="name" placeholder="Enter the School Name" required>

				    <br>
                <button class="btn1"><a href="details.html">Details</button>     
				<button class="btn">SUBMIT</button>
				<button class="btn1"><a href="homepage.html">HOME</button>
			</div>
		</form>
	</div>
</body>
</center>
</html>