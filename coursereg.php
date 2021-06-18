<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="course.css">
  <title>Course Registration form</title>
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
    <form action="course.php" method="post">
      <div class="container">
        <h1>Courses</h1>
           <p> Details Regarding the Courses Available </p>
           <table style="width:100%;" id="t01">
           <tr>
           <th>Course Code</th>
           <th>Course Name</th> 
           <th>Subjects</th>
           </tr>
           <tr>
           <td>S101</td>
           <td>SCIENCE</td>
           <td>PHYSICS, CHEMISTRY, BIOLOGY, MATHS, COMPUTER, ENGLISH</td>
           </tr>
           <tr>
           <td>C101</td>
           <td>COMMERCE</td>
           <td>ACCOUNTANCY, BUSINESS STUDIES, ECONOMICS, MATHS, ENGLISH</td>
           </tr>
           <tr>
           <td>A101</td>
           <td>ARTS</td>
           <td>HISTORY, POLITICAL SCIENCE, SOCIOLOGY, ECONOMICS, GEOGRAPHY, PSYCHOLOGY, ENGLISH</td>
           </tr>
           </table>
           <br>
        <h1>Course Registration Form</h1>
        <p>Enter the course details & submit</p>

        <input type="text" name="studentid" id="code" placeholder="Enter the student id" required>
        
        <input type="text" name="coursecode" id="code" placeholder="Enter the course code" required>

        <input type="text" name="coursetitle" id="title" placeholder="Enter the course title" required>
        <br>
        <button class="btn">SUBMIT</button>
        <button class="btn1"><a href="homepage.html">HOME</button>

      </div>
    </form>
  </div>
</body>
</center>
</html>
