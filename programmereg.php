<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="programme.css">
	<title>Programme Registration form</title>
</head>
<center>
<body>
	<div>
		<form action="programme.php" method="post">
			<div class="container">
				<h1>Programme Registration Form</h1>
				<p>Enter the programme details & submit</p>
					
				    <input type="text" name="programmecode" id="code" placeholder="Enter the Programme Code" required>
			
				    <input type="text" name="programmetitle" id="title" placeholder="Enter the Programme Title" required>
			
				    <input type="text" name="programmelevel" id="number" placeholder="Enter the Programme Level" required>

				    <input type="text" name="programmelength" id="number" placeholder="Enter the Programme length (Hrs)" required>

				     <input type="text" name="schoolname" id="name" placeholder="Enter the School name" required>
			
				    <br>
				<button class="btn1"><a href="pgd.html">Details</button>   
				<button class="btn">SUBMIT</button>
				<button class="btn1"><a href="homepage.html">HOME</button>
			</div>
		</form>
	</div>
</body>
</center>
</html>