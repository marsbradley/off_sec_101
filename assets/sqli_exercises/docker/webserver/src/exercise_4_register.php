<html>
<head>
</head>
<body>
<h2>Offensive Security Bank</h2>
<p><a href='exercise_4.php'>Back to login page</a></p>
<?php
	function showRegistrationForm() {
		echo "<form action='' method='POST'>
			Username: <input type='text' name='username' size=100 /><br />
			First Name: <input type='text' name='firstname' size=100 /><br />
			Surname: <input type='text' name='surname' size=100 /><br />
			New Password: <input type='password' name='password' size=100 /><br />
			Repeat Password: <input type='password' name='repeatPassword' size=100 /><br />
			<input type='submit' value='Submit' name='submit' />
		</form>";
	}

	$username = $_POST['username'];
	$password = $_POST['password'];
	$repeatPassword = $_POST['repeatPassword'];
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];

	if (isset($username) && isset($password) && isset($firstname) && isset($surname)) {
		if (empty($username) || empty($password) || empty($firstname) || empty($surname)) {
			showRegistrationForm();
			echo "All fields must not be empty";
		}
		else if ($password != $repeatPassword) {
			showRegistrationForm();
			echo "Passwords do not match";
		}
		else {
			$servername = "db";
			$serverUsername = "user4";
			$serverPassword = "password";
			$database = "exercise_4_db";
			$mysqli = new mysqli($servername, $serverUsername, $serverPassword, $database);

			$statement = $mysqli->prepare("SELECT * FROM users WHERE username =?");
			$statement->bind_param("s", $username);
			$statement->execute();
			$statement->store_result();
			if ($statement->num_rows > 0) {
				showRegistrationForm();
				echo "Error: user '$username' already exists";
			}
			else {
				$statement = $mysqli->prepare("INSERT INTO users (username, password, firstname, surname) VALUES (?, ?, ?, ?)");
				$statement->bind_param("ssss", $username, $password, $firstname, $surname);
				if ($statement->execute()) {
					echo "New user '$username' created successfully";
				} else {
					showRegistrationForm();
					echo "Error creating new user";
				}
			}

			$mysqli->close();
		}
	}
	else {
		showRegistrationForm();
	}
?>
<p><a href="/">Back to exercises</a></p>
</body>
</html>