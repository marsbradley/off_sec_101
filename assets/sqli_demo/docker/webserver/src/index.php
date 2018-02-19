<html>
<head>
</head>
<body>

<h2>Offensive Security Bank</h2>

<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	echo '<form action="" method="POST">
			Username: <input type="string" name="username" value="' . $username . '" size=100 /><br />
			Password: <input type="password" name="password" size=100 /><br />
			<input type="submit" value="Show Details" name="submit" /><br />
		</form>';

	if (isset($username) && isset($password)) {
		$servername = 'db';
		$serverUsername = 'demo_user';
		$serverPassword = 'password';
		$database = 'demo_db';

		$mysqli = new mysqli($servername, $serverUsername, $serverPassword, $database);

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = $mysqli->query($query);

		if ($result) {
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$firstname = $row['firstname'];
					$surname = $row['surname'];
					$balance = $row['balance'];
					$password = $row['password'];

					echo '<h3>Your Details</h3>';
					echo "<p>Name: $firstname $surname<br />
								Balance: $balance<br />
								Password: $password<br />
							</p>";
				}	
			} else {
				echo "Invalid user and/or password";
			}
		} else {
			echo $mysqli->error;
		}

		$mysqli->close();
	}
?>
</body>
</html>