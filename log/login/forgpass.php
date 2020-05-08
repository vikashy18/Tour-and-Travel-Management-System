<?php
$p = $_POST['pass'];
$user = $_SESSION['email'];
$con = mysqli_connect('localhost','root','','travel');
mysqli_query($con, "UPDATE user_auth SET pwd = '$p' where email = '$user';");
echo "<script>alert('password reset');</script>";
header("Location:user_dash.php");

 ?>
