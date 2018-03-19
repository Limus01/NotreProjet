<?php
		session_start();

		$username = "";
		$email = "";
		$exampleInputUsername = "";
		$exampleInputEmail = "";
		$telephone = "";
		$description = "";
		$errors = array();

        // connection to database
		$db = mysqli_connect('localhost', 'root', '', 'todolist');

		// if register button is clicked
		if (isset($_POST['register'])){
			$username = mysql_real_escape_string($_POST['username']);
			$email = mysql_real_escape_string($_POST['email']);
			$password_1 = mysql_real_escape_string($_POST['password_1']);
			$password_2 = mysql_real_escape_string($_POST['password_2']);


			//check if forms are well filled
			if (empty($username)){
				array_push($errors, "Username is required");
			}
			if (empty($email)){
				array_push($errors, "Email is required");
			}
			if (empty($password_1)){
				array_push($errors, "Password is required");
			}

			if ($password_1 != $password_2){
				array_push($errors, "The two passwords do not match");
			}

			// if there are no errors save user to data base
			if (count($errors) == 0) {
				$password = md5($password_1);  // encrypt password befor storing
				$sql = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
				mysqli_query($db, $sql);
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: todo.php'); // redirect to activity page
			}
		}


		// log user in from login page
		if (isset($_POST['login'])){
			$username = mysql_real_escape_string($_POST['username']);
			$password = mysql_real_escape_string($_POST['password']);


			//check if forms are well filled
			if (empty($username)){
				array_push($errors, "Username is required");
			}
			if (empty($password)){
				array_push($errors, "Password is required");
			}

			if (count($errors) == 0 ) {
				$password = md5($password); // encrypt password before comparing with that from database
				$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
				$result = mysqli_query($db, $query);
				if (mysqli_num_rows($result) == 1) {
					// log in user
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "You are now logged in";
					header('location: todo.php'); // redirect to activity page
				}else{
					array_push($errors, "Wrong username/Password combination");
				}
			}
		}


		// log user in from index page
		if (isset($_POST['signin'])){
			$username = mysql_real_escape_string($_POST['username']);
			$password = mysql_real_escape_string($_POST['password']);


			//check if forms are well filled
			if (empty($username)){
				array_push($errors, "Username is required");
			}
			if (empty($password)){
				array_push($errors, "Password is required");
			}

			if (count($errors) == 0 ) {
				$password = md5($password); // encrypt password before comparing with that from database
				$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
				$result = mysqli_query($db, $query);
				if (mysqli_num_rows($result) == 1) {
					// log in user
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "You are now logged in";
					header('location: todo.php'); // redirect to activity page
				}else{
					array_push($errors, "Wrong username/Password combination"); 
					header('location: index.php');
				}
			}
		}


		//Logout
		if (isset($_GET['logout'])){
			session_destroy();
			unset($_SESSION['username']);
			header('location: index.php');
		}



		// if send message button is clicked
		if (isset($_POST['validate'])){
			$exampleInputUsername = mysql_real_escape_string($_POST['exampleInputUsername']);
			$exampleInputEmail = mysql_real_escape_string($_POST['exampleInputEmail']);
			$telephone = mysql_real_escape_string($_POST['telephone']);
			$description = mysql_real_escape_string($_POST['description']);


			//check if forms are well filled
			if (empty($exampleInputUsername)){
				array_push($errors, "Your name is required");
			}
			if (empty($exampleInputEmail)){
				array_push($errors, "Your email is required");
			}
			if (empty($telephone)){
				array_push($errors, "Your phone number is required");
			}

			if (empty($description)){
				array_push($errors, "You must type in your message");
			}

			// if there are no errors save message to data base
			if (count($errors) == 0) {
				$sql = "INSERT INTO contacts (cname, cemail, cphone, cmessage) VALUES('$exampleInputUsername', '$exampleInputEmail', '$telephone', '$description')";
				mysqli_query($db, $sql);
				header('location: contact.php'); // redirect to home page
			}
		}
 ?>

