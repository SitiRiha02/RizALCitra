<!DOCTYPE html>
<html>

	<head>
		<title>RizALCitra Software House</title>
		<link rel="stylesheet" type="text/css" href="css/home.css">
	</head>

<body>
<?php include ('config.php');?>

	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="home.php" title="Cosmetic Sale System"><b>Cosmetic Sale System</b></a></li>
				<li><a href="profile.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
				<li><a href="home.php"><label class="active">Home</label></a></li>
				<li><a href="shop.php"><label>Products</label></a></li>
				<li><a href="contactus.php"><label>Contact Us</label></a></li>
				<li><a href="logout.php"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
		<center><div id="right-nav">
			<h2>CUSTOMER ORDER</h2>
			<img src = "image/makeup.jpg" class = "logo"/>
	<form method="post" action="home_save.php">
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Costumer Name</label></td>
					<td><label>Phone Number</label></td>
					<td><label>Product Name</label></td>
					<td><label>Unit Price</label></td>
					<td><label>Quantity</label></td>
					<td></td>
				</tr>
				<tr>
					<td><input type="text" name="name"/></td>
					<td><input type="text" name="phone"/></td>
					<td><input type="text" name="product"/></td>
					<td><input type="text" name="unit"/></td>
					<td><input type="number" min="0" max="100" name="qtty"/></td>
					<td colspan="5"><input type="submit" value="SEND"></td>
				</tr>
			</table>
    </form>
		</div></center>
	</div>
</body>
</html>