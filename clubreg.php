<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="club.css">
	<title>Club Registration form</title>
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
		<form action="club.php" method="post">
			<div class="container">
				<h1>Club Details</h1>
				<p> Details Regarding the CLubs </p>
                <table style="width:100%" id="t01">
                <tr>
                <th>Club Name</th>
                <th>Building No.</th>
                <th>Phone No.</th> 
                <th>Sport</th>
                </tr>
                <tr> 
                <td>Indoor Club</td>
                <td>Building no. 5</td>
                <td>022 5364865</td>
                <td>T.T, Chess, Carrom, Weightlifting, Powerlifting, Yoga</td> 
                </tr>
                <tr>
                <td>Outdoor Club</td>
                <td>Building no. 6</td>
                <td>022 5321875</td> 
                <td>Football, Tennis, Badminton, Cricket, Hockey, Basketball</td>              
                </tr>
                </table>
                <br>
				<h1>Club Detail Form</h1>
				<p>Enter the Club details & submit</p>
					
				    <input type="text" name="clubname" id="name" placeholder="Enter the Club name" required>
			
			     	<input type="text" name="clubphoneno" id="number" placeholder="Enter the Club Phone No." required>

			     	<input type="text" name="sport" id="number" placeholder="Enter the Sport" required>
			
				    <input type="text" name="campusbuilding" id="number" placeholder="Enter the Campus building no." required>
			
				    <br>
				<button class="btn">SUBMIT</button>
				<button class="btn1"><a href="homepage.html">HOME</button>
			</div>
		</form>
	</div>
</body>
</center>
</html>