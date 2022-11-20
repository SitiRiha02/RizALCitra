<!DOCTYPE html>
<html>

	<head>
		<title>RizALCitra Software House</title>
		<link rel="stylesheet" type="text/css" href="css/shop.css">
		<style>
		#right-nav {
height: 600px;
width:1000px;
border: 1px solid #dfe0e4;
background-color: #ffc0cb;
border-radius: 4px;
margin-top:80px;
}
</style>
	</head>

<body>
<?php include ('config.php');?>

	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="home.php" title="Cosmetic Sale System"><b>Cosmetic Sale System</b></a></li>
				<li><a href="profile.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
				<li><a href="home.php"><label>Home</label></a></li>
				<li><a href="shop.php"><label class="active">Products</label></a></li>
				<li><a href="contactus.php"><label>Contact Us</label></a></li>
				<li><a href="logout.php"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
		<center><div id="right-nav">
			<h2>Online Cosmetic Store</h2>
			
			<table style="text-align:center;">
			<tr>
				<td><img src="image/CONCEALER.webp" width = 130 height = 150 ></td>
				<td><img src="image/FOUNDATION.webp" width = 130 height = 150 ></td>
				<td><img src="image/HIGHLIGHTER.jpg" width = 130 height = 150 ></td>
				<td><img src="image/BROW.jpg" width = 130 height = 150 ></td>
			</tr>
			<tr>
				<td>CONCEALER<br>RM54.60</td>
				<td>FOUNDATION<br>RM59.00</td>
				<td>HIGHLIGHTER<br>RM45.50</td>
				<td>BROW<br>RM40.00</td>
			</tr>
			<br>
			<tr>
				<td><img src="image/LIPCOLOR.webp" width = 130 height = 150 ></td>
				<td><img src="image/MASCARA.jpg" width = 130 height = 150 ></td>
				<td><img src="image/POWDER.jpg" width = 130 height = 150 ></td>
				<td><img src="image/GLOSS.jpg" width = 130 height = 150 ></td>
			</tr>
			<tr>
				<td>LIQUID LIPCOLOR<br>RM59.00</td>
				<td>MASCARA<br>RM59.00</td>
				<td>FOUNDATION<br>RM68.00</td>
				<td>LIP GLOSS<br>RM45.50</td>
			</tr>
			</table>
		</div></center>
	</div>
</body>
</html>