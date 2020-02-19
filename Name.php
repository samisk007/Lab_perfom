<!Doctype html>
<html>
	<head>
		<title> Show Profile </title>
	</head>
	
	<body>
	
					<h1> <center> Person Profile </center> </h1>
	
	
			<form method="POST" action="Test.php">
					Name: <input type="text" name="uname" value=""> <br>
					
					Email: <input type="text" name="email" value=""> <br>
					
					Gender: <input type="radio" name="gender" value="">Male 
							<input type="radio" name="gender" value="">Female
							<input type="radio" name="gender" value="">Other <br>
							
					Date of Birth: <input type="date" name="" value=""> <br>
					
					Blood Group: <select name="bg">
								<option>A+</option>
								<option>B+</option>
								<option>A-</option>
								</select> <br>
								
					Degree: <input type="checkbox" name="">SSC
							<input type="checkbox" name="">HSC
							<input type="checkbox" name="">BSc.
							<input type="checkbox" name="">MSc.
							<br>
							
					<input type="submit" name="submit" value="submit">
					<input type="reset" name="" value="reset">
			</form>
	
	</body>
	
	
</html>