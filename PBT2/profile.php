<!DOCTYPE html>
<html>

	<head>
		<title>RizALCitra Software House</title>
		<link rel="stylesheet" type="text/css" href="css/profile.css">
	</head>

<body>
<?php include ('config.php');?>

	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="home.php" title="Cosmetic Sale System"><b>Cosmetic Sale System</b></a></li>
				<li><a href="profile.php" title="<?php echo $username ?>"><label class="active"><?php echo $username ?></label></a></li>
				<li><a href="home.php"><label>Home</label></a></li>
				<li><a href="shop.php"><label>Products</label></a></li>
				<li><a href="contactus.php"><label>Contact Us</label></a></li>
				<li><a href="logout.php"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
	<center>
	<?php
	include("dbpbt2.php");
			$query=mySQL_query("SELECT * from login where idL='$id' order by idL DESC") or die(mySQL_error());
			while($row=mySQL_fetch_array($query)){
				$id = $row['idL'];
	?>	
		<div id="left-nav">
			<h2>PERSONAL INFO</h2>
			<table>
				<tr>
					<td><label>Username</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['username']; ?></b></td>
				</tr>
				<tr>
					<td><label>Birthday</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['birthday']; ?></b></td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['gender']; ?></b></td>
				</tr>
				<tr>
					<td><label>Contact</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['number']; ?></b></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['email']; ?></b></td>
				</tr>
				
			</table>
		</div>
	<?php
	}
	?>
	</div>
</body>
</html>