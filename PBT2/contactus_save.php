<!DOCTYPE html>
<html>

	<head>
		<title>RizALCitra Software House</title>
		<link rel="stylesheet" type="text/css" href="css/order.css">
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
				<li><a href="contactus.php"><label>Contact Us</label></a></li>
				<li><a href="logout.php"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
		<div id="right-nav">
<?php
	$name = $_POST['name'];
	$email = $_POST['email']; 
	$number = $_POST['number'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$namafail = "cosmetic.txt";

	//buka fail untuk masuk data
	$fail = fopen($namafail,'a');
	$teks = "Comment by ".$name."\r\n <i>Email : ".$email."\r\n <i>Number Phone : ".$number."\r\n <i>Subject : ".$subject."\r\n <i>Message : ".$message."\r\n <i>At : ".date("H:i:s d/m/Y")."\r\n \r\n";

	//tulis 
	fwrite($fail,$teks);

	//tutup fail 
	fclose($fail); 

	//buka fail untuk baca data
	$fail = fopen($namafail,'r');
	$teks = fread($fail,filesize($namafail));
	$teks = str_replace("\r\n","<br>",$teks);
	echo "<h1>COMMENT FROM CUSTOMER</h1> <a href='contactus.php'>Add</a> | <a href='delete.php'>Delete</a>";
	echo "<hr>";
	echo $teks;

	//tutup fail
	fclose($fail); 
?>
</div>
	</div>
</body>
</html>