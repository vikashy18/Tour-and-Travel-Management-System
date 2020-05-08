<?php 
	echo "Start";
	session_start();
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'travel');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		echo "in regisyrt";
		// receive all input values from the form
		$fname = mysqli_real_escape_string($db, $_POST['first_name']);
		$lname = mysqli_real_escape_string($db, $_POST['last_name']);
		$dob = mysqli_real_escape_string($db, $_POST['birthday']);
		$gen = mysqli_real_escape_string($db, $_POST['gender']);
		$em = mysqli_real_escape_string($db, $_POST['email']);
		$pwd = mysqli_real_escape_string($db, $_POST['password']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$state = $_POST['stateslist'];
		if (count($errors) == 0) {

			$query = "INSERT INTO `user_auth` (`id`, `fname`, `lname`, `email`, `pwd`, `state`, `phone`, `gender`) 
			VALUES (NULL, '$fname', '$lname', '$em', '$pwd', '$state', '$phone', '$gen');";
			if(mysqli_query($db, $query)){}
				else{echo "Poblem";}

			$_SESSION['fname'] = $fname;
			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: ../../index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM users WHERE username='$username' AND pwd='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				$row = mysqli_fetch_assoc($results);
				$_SESSION['fullname'] = $row['fullname'];
				header('location: ../index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>