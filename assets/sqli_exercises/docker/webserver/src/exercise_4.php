<?php session_start(); ?>
<html>
<head>
</head>
<body>

<h2>Offensive Security Bank</h2>

<?php
	function showLoginPage() {
		# Log in page
		echo '<form action="" method="POST">
			Username: <input type="string" name="username" size=100 /><br />
			Password: <input type="password" name="password" size=100 /><br />
			<input type="submit" value="Log In" name="login" /><br />
			<a href="exercise_4_register.php">
				<input type="button" value="Register" name="register" />
			</a>
		</form>';
	}

	$servername = "db";
	$serverUsername = "user4";
	$serverPassword = "password";
	$database = "exercise_4_db";

	$mysqli = new mysqli($servername, $serverUsername, $serverPassword, $database);

	$errorMessage;

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (isset($username) && !empty($username)
		&& isset($password) && !empty($password)) {
		$statement = $mysqli->prepare("SELECT * FROM users WHERE username=? AND password=?");
		$statement->bind_param("ss", $username, $password);
		$statement->execute();
		$statement->store_result();
		if ($statement->num_rows > 0) {
			$_SESSION["loggedInUsername"] = $username;
		}
		else {			
			$errorMessage = "No matching user found for username and password";
		}
	}

	if (isset($_SESSION["loggedInUsername"]) && !empty($_SESSION["loggedInUsername"])) {
		$loggedInUsername = $_SESSION["loggedInUsername"];

		$statement = $mysqli->prepare("SELECT * FROM users WHERE username =?");
		$statement->bind_param("s", $loggedInUsername);
		$statement->execute();
		$result = $statement->get_result();

		# Logged in page
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$firstname = $row['firstname'];
				$surname = $row['surname'];
				$balance = $row['balance'];
				$password = $row['password'];

				echo "<p>Welcome $loggedInUsername<br /><a href='exercise_4_logout.php'>Log out</a></p>";
				echo "<p><a href='exercise_4_changepassword.php'>Change Password</a></p>";

				echo "<h3>Your Details</h3>";
				echo "<p>Name: $firstname $surname<br />
						Balance: $balance<br />
						Password: $password<br />
					</p>";
			}
		} else {
			$errorMessage = "Error: User not found";
		}
	} else {
		showLoginPage();
		echo $errorMessage;
	}

	$mysqli->close();
?>
<p><a href="/">Back to exercises</a></p>
</body>
</html>