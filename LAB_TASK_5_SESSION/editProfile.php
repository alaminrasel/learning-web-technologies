<html>
<head>
	<title>HTML Form Tag</title>
</head>
<body>

	
		<legend></legend>
		<form method="POST" action="abc.html">
			<table border="1">
<tr>  
<th colspan="2"> PERSON PROFILE</th>
</tr>
			
</tr>
				
				<tr>
					<td>Name </td>
					<td><input type="text" name="username" value="" placeholder="type username"></td>
				</tr>
					<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="" ></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender" value=""> Male
						<input type="radio" name="gender" value=""> Female
						<input type="radio" name="gender" value=""> Other
					</td>
				</tr>
				
			
				<tr>
					<td>Date of Birth</td>
					<td><input type="date" name="dob"  size="2px"></td>
				</tr>
				
				
				
				 <tr>
					  <td>Change Profile Picture</td>
					   <td>
						    <input type="file" name="photo"> <br>
					  </td>
				 </tr>
                
				   <tr align="right">
				       
					   <td colspan="2">
						<input type="submit" name="submit" value="Submit">
						<input type="reset" name="reset" value="Reset">
						
					</td>
				</tr>
			</table>
		</form>
	
</body>
</html>
