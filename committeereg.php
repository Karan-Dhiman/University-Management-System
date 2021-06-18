<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="committee.css">
	<title>Commitee Registration form</title>
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
		<form action="committee.php" method="post">
			<div class="container">
			 <h1>Committee Details</h1>
				<p>Details Regarding the School</p>
				<table style="width:100%" id="t01">
                <tr>
                <th>Committee Title</th>
                <th>Details</th>
                <th>Committee Building</th>
                </tr>
                <tr> 
                <td>Faculty Committee</td>
                <td>This committee is exclusively for the faculty & lecturer's of the
                univeristy.</td>
                <td>Building no. 07</td> 
                </tr>
                <tr> 
                <td>Study Committee</td>
                <td>This committee is for the students of this university for the academics
                discussion and meetings.</td>
                <td>Building no. 08</td> 
                </tr>
                <tr> 
                <td>Health & Sanity Committee</td>
                <td>This committee is regarding Campus health and Sanity.</td>
                <td>Building no. 09</td> 
                </tr>
                <tr> 
                <td>Anti-Ragging Committee</td>
                <td>This Committee is to prevent the ragging happening around the Campus.</td>
                <td>Building no. 10</td> 
                </tr>
                </table>
                <br>
				<h1>Committee Registration Form</h1>
				<p>Enter the Committee details & submit</p>
					
				    <input type="text" name="committeetitle" id="title" placeholder="Enter the title for the committee" required>
			
				    <input type="text" name="staffid" id="id" placeholder="Enter the staff ID" required>
					
			     	<input type="text" name="facultyname" id="name" placeholder="Enter the name of the faculty" required>
			
				    <input type="text" name="buildingno" id="buildingno" placeholder="Enter the committee building number" required>
			
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