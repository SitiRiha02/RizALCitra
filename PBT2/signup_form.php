<?php include ('config.php');?>
<?php
	include ('dbpbt2.php');
	
	if (isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$username2=$_POST['username2'];
		$birthday=$_POST['day']."/".$_POST['month']."/".$_POST['year'];
		$gender=$_POST['gender'];
		$number=$_POST['number'];
		$email=$_POST['email'];
		$email2=$_POST['email2'];
		$password=$_POST['password'];
		$password2=$_POST['password2'];
		
			$sql=mySQL_query("select * from login WHERE email='$email'") or die (mySQL_error());
			$row=mySQL_num_rows($sql);
			if ($row > 0)
			{
			echo "<script>alert('E-mail already taken!'); window.location='signup.php'</script>";
			}
			elseif($password != $password2)
			{
			echo "<script>alert('Password do not match!'); window.location='signup.php'</script>";
			}else
		{
			mySQL_query("INSERT INTO login (username,username2,birthday,gender,number,email,email2,password,password2)
			VALUES ('$username','$username2','$birthday','$gender','$number','$email','$email2','$password','$password2')")
			or die (mySQL_error());
			echo "<script>alert('Account successfully created!'); window.location='signin.php'</script>";
		}
			
	}
	
?>