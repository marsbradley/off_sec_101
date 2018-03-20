<?php session_start(); ?>
<html>
<head>
</head>
<body>

<h2>File Storage</h2>

<?php
	function showLoginPage() {
		# Log in page
		echo '<form action="" method="POST">
			Username: <input type="string" name="username" size=100 /><br />
			Password: <input type="string" name="password" size=100 /><br />
			<input type="submit" value="Log In" name="login" /><br />
		</form>';
	}

	$servername = "db";
	$serverUsername = "admin";
	$serverPassword = "password";
	$database = "exercise_db";

	$mysqli = new mysqli($servername, $serverUsername, $serverPassword, $database);

	$errorMessage;

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = 'something';

	if (isset($username) && !empty($username)) {
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = $mysqli->query($query) or die($mysqli->error);

		if ($result->num_rows > 0) {
			$_SESSION["loggedInUsername"] = $username;
		}
		else {			
			$errorMessage = "No matching user found for username and password";
		}
	} else {
		$errorMessage = 'Enter a username and password';
	}

	if (isset($_SESSION["loggedInUsername"]) && !empty($_SESSION["loggedInUsername"])) {
		$loggedInUsername = $_SESSION["loggedInUsername"];

		$query = "SELECT * FROM users WHERE username ='$loggedInUsername'";
		$result = $mysqli->query($query) or die($mysqli->error);

		# Logged in page
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<p>Welcome $loggedInUsername<br /><a href='final_logout.php'>Log out</a></p>";
				echo '<p>Your files:<br />
						<a href="./file" download>file with password</a>
					</p>';

			}
		} else {
			$errorMessage = "Unknown user: $loggedInUsername";
			showLoginPage();
			echo $errorMessage;
		}
	} else {
		showLoginPage();
		echo $errorMessage;
	}

	$mysqli->close();
?>
</body>
</html>