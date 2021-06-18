<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="campus.css">
	<title>Campus Registration form</title>
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
		<form action="campus.php" method="post">
			<div class="container">
				<h1>Campus Details</h1>             
           <p> Details Regarding the Campus </p>
           <table style="width:100%;" id="t01">
           <tr>
           <th>Campus Name</th>
           <th>Address</th> 
           <th>Campus Distance</th>
           </tr>
           <tr>
           <td>Education Campus</td>
           <td>Building No. 1, 2, & 3 of the Campus</td>
           <td>500m from the Entrance</td>
           </tr>
           <tr>
           <td>Sports Campus</td>
           <td>Building No. 4 & 5 of the Campus</td>
           <td>200m from the Entrance</td>
           </tr>
           <tr>
           <td>Office Campus</td>
           <td>Building No. 6 of the Campus</td>
           <td>300m from the Entrance</td>
           </tr>
           </table>
           <br>
				<h1>Campus Detail Form</h1>
				<p>Enter the Campus details & submit</p>
					
				    <input type="text" name="campusname" id="name" placeholder="Enter the Campus name" required>
			
				    <input type="text" name="campusaddress" id="address" placeholder="Enter the Campus address" required>
					
			     	<input type="text" name="distance" id="number" placeholder="Enter the Campus distance from the Entrance" required>
			
				    <br>
				<button class="btn">SUBMIT</button>
				<button class="btn1"><a href="homepage.html">HOME</button>
			</div>
		</form>
	</div>
</body>
</center>
</html>