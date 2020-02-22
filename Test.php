<?php>
	if(isset($_POST['submit']))
	{
		
		if(empty(trim($uname=$_POST[uname])))
		{
			echo "Username cannot be empty";
			
		}
		
		
		elseif(empty(trim($email=$_POST[email])))
		{
			echo "Email cannot be empty";
		}
		
		
		elseif(empty(trim($gender=$_POST[gender])))
		{
			echo "At least one of them has to be selected";
		}
		
		
		elseif(empty(trim($dob=$_POST[dob])))
		{
			echo " Date of Birth cannot be empty";
		}
		
		
		elseif(empty(trim($degree=$_POST[gender])))
		{
			echo "At least one of them has to be selected";
		}
		
		
		elseif(empty(trim($bg)))
		{
			echo "At least one of them must to be selected";
		}
		
		
		
		else(
		echo $uname."<br>";
		echo $email."<br>";
		echo $gender."<br>";
		echo $dob."<br>";
		echo $degree."<br>";
		echo $bg."<br>";
		
		)
	}

<?>

