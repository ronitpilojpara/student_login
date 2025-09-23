<html>
<head>
  <meta charset="utf-8">
  <title>Student Registration Form</title>
  <style>
  /*PAGE BACKGROUND COLOR*/
  body {
    background-color: #f0f8ff;
    margin: 20px;
    font-family: Arial, sans-serif;
  }
  </style>
</head>
<body>
	<h1 style="text-align:center; margin-bottom:20px; color:darkblue;">
  Student Registration Form
</h1>

<form action="insert_7019.php" method="post">
<center>
    <table border="1">
    <tr><td>GR No:</td>
	<td><input type="number" name="grno"></td></tr>
      
	<tr><td>Enrolment No:</td>
	<td><input type="text" name="enrno"></td></tr>
      
	<tr><td>First Name:</td><td>
	<input type="text" name="fname"></td></tr>
    
	<tr><td>Middle Name:</td>
	<td><input type="text" name="mname"></td></tr>
      
	<tr><td>Last Name:</td>
	<td><input type="text" name="lname"></td></tr>
      
	<tr><td>Date of Birth:</td>
	<td><center><input type="date" name="dob"></center></td></tr>
      
	<tr><td>Phone No:</td>
	<td><input type="text" name="phone"></td></tr>
      
	<tr><td>Address:</td>
	<td><input type="text" name="address"></td></tr>
      
	<tr><td>Email:</td>
	<td><input type="email" name="email"></td></tr>
      
	<tr><td>Gender:</td>
    <td>
        <input type="radio" name="gender" value="MALE"> MALE
        <input type="radio" name="gender" value="FEMALE"> FEMALE
    </td>
    </tr>
    
	<tr><td>City:</td>
    <td><center>
    <select name="city">
        <option value="RAJKOT">RAJKOT</option>
        <option value="MORBI">MORBI</option>
        <option value="JAMNAGER">JAMNAGER</option>
    </select></center>
	</td>
    </tr>
      
	<tr><td>State:</td><td><input type="text" name="state"></td></tr>
     <tr><td>Country:</td>
    <td><center>
    <select name="country">
        <option>INDIA</option>
        <option>AUSTRALIA</option>
        <option>CHINA</option>
    </select></center>
    </td>
    </tr>
      
	<tr><td>Aadhar No:</td>
	<td><input type="text" name="aadhar"></td></tr>

    <tr><td>Course:</td>
    <td><center>
    <select name="course">
        <option>MBA</option>
        <option>MCA</option>
        <option>M.Com</option>
    </select></center>
    </td>
    </tr>

    <tr><td>10th Percentage:</td>
	<td><input type="text" name="ssc"></td></tr>
      
	<tr><td>12th Percentage:</td>
	<td><input type="text" name="hsc"></td></tr>
      
	<tr><td>Transportation:</td>
        <td><center><input type="radio" name="bus" value="YES"> YES <input type="radio" name="bus" value="NO"> NO</center></td>
      </tr>
      
	<tr><td>Hostel:</td>
        <td><center><input type="radio" name="hostel" value="YES"> YES <input type="radio" name="hostel" value="NO"> NO</center></td>
      </tr>
    </table>

    <input type="submit" style="font-size:15px" value="SUBMIT">
    <input type="reset" style="font-size:15px" value="CANCEL">
    </center>
  </form>
</body>
</html>
