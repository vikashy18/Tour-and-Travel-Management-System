<?php
$con = mysqli_connect('localhost','root','','travel');
if(isset($_POST['log_btn'])){
	$res = mysqli_query($con,"INSERT INTO contact(name,mail,msg) VALUES('".$_POST['a']."','".$_POST['b']."','".$_POST['c']."');");
	echo "<script>alert('Your query has been recorded');</script>";
}



 ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> CONTACT US </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="" method="post">
					<h3>Contact Us</h3>
					<p> We will Contact you ASAP </p>
					<label class="form-group">
						<input type="text" class="form-control"  name = "a" required>
						<span>Your Name</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control"   name = "b" required>
						<span for="">Your Mail</span>
						<span class="border"></span>
					</label>
					<label class="form-group" >
						<textarea maxlength="250" name="" id="" class="form-control"  name = "c" required></textarea>
						<span for="">Your Message</span>
						<span class="border"></span>
					</label>
					<button  name = "log_btn" >Submit
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>

	</body>
</html>
