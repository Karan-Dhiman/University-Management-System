<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="school.css">
	<title>School Registration form</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: center;
}
#t01 {
  width: 100%;    
  background-color: #f1f1c1;
}
</style>
<center>
<body>
	<div>
		<form action="school.php" method="post">
			<div class="container">
				<h1>School  Form</h1>
				<p>Details Regarding the School</p>
				<table style="width:100%" id="t01">
                <tr>
                <th>School Name</th>
                <th>School Building No.</th>
                <th>Campus Name</th> 
                </tr>
                <tr> 
                <td>School Of Science</td>
                <td>Building No. 1</td>
                <td>Education Campus</td> 
                </tr>
                <tr> 
                <td>School Of Commerce</td>
                <td>Building No. 2</td>
                <td>Education Campus</td> 
                </tr>
                <tr> 
                <td>School Of Arts</td>
                <td>Building No. 3</td>
                <td>Education Campus</td> 
                </tr>
                </table>
                <br>
				<h1>School Detail Form</h1>
				<p>Enter the School details & submit</p>
					
				    <input type="text" name="schoolname" id="name" placeholder="Enter the School name" required>
			
				    <input type="text" name="schoolbuilding" id="name" placeholder="Enter the School building" required>
			
				    <input type="text" name="campusname" id="name" placeholder="Enter the Campus name" required>
			
				    <br>
				<button class="btn">SUBMIT</button>
				<button class="btn1"><a href="homepage.html">HOME</button>
			</div>
		</form>
	</div>
</body>
</center>
</html>