<!DOCTYPE html>
<html>

	<head>
		<title>RizALCitra Software House</title>
		<link rel="stylesheet" type="text/css" href="css/contactus.css">
	</head>

<body>
<?php include ('config.php');?>

	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="home.php" title="Cosmetic Sale System"><b>Cosmetic Sale System</b></a></li>
				<li><a href="profile.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
				<li><a href="home.php"><label>Home</label></a></li>
				<li><a href="shop.php"><label>Products</label></a></li>
				<li><a href="contactus.php"><label class="active">Contact Us</label></a></li>
				<li><a href="logout.php"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
		<center>
		<div id="right-nav">
			<h2>FEEDBACK FORM</h2>
			<form method="post" action="contactus_save.php">
			<table>
				<tr>
					<td><label>Name</label></td>
					<td width="20"></td>
					<td><b><input type="text" name="name" value="<?php echo $row['username']; ?>"></b></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td width="20"></td>
					<td><b><input type="text" name="email" value="<?php echo $row['email']; ?>"></b></td>
				</tr>
				<tr>
					<td><label>Phone</label></td>
					<td width="20"></td>
					<td><b><input type="text" name="number" value="<?php echo $row['number']; ?>"></b></td>
				</tr>
				<tr>
					<td><label>Subject</label></td>
					<td width="20"></td>
					<td><b><input type="text" name="subject"/></b></td>
				</tr>
				<tr>
					<td><label>Message</label></td>
					<td width="20"></td>
					<td><b><textarea name="message" rows="5" cols="30"></textarea></b></td>
				</tr>
				</table>
				<input type="submit" name="submit" value="submit" class="btn-sign-in" title="Submit"/>
				<input type="reset" name="reset" value="reset" class="btn-sign-in" title="Reset"/>
			</form>
		</div></center>
	</div>
</body>
</html>