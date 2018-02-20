<?php 
	session_start(); 
	$username = $_SESSION["loggedInUsername"];
	if (!isset($username) || empty($username)) {
		header("Location: exercise_4.php");
	}
?>
<html>
<head>
</head>
<body>
<h2>Offensive Security Bank</h2>
<?php
	function showLoginForm() {
		echo "<form action='' method='POST'>
			New Password: <input type='text' name='newPassword' size=100 /><br />
			Repeat New Password: <input type='password' name='repeatNewPassword' size=100 /><br />
			<input type='submit' value='Submit' name='submit' />
		</form>";
	}

	echo "Welcome $username<br />";
	echo "<p><a href='exercise_4.php'>Back to Home</a></p>";

	if (isset($_POST['newPassword']) && !empty($_POST['newPassword'])
		&& isset($_POST['repeatNewPassword']) && !empty($_POST['repeatNewPassword'])
	) {
		$servername = "db";
		$serverUsername = "user4";
		$serverPassword = "password";
		$database = "exercise_4_db";

		$mysqli = new mysqli($servername, $serverUsername, $serverPassword, $database);

		$newPassword = $_POST['newPassword'];
		$repeatPassword = $_POST['repeatNewPassword'];

		if ($newPassword != $repeatPassword) {
			showLoginForm();
			echo "Error: New passwords do not match"; 
		}
		else {
			$escapedNewPassword = $mysqli->real_escape_string($newPassword);
			$query = "UPDATE users SET password='$escapedNewPassword' WHERE username = '$username'";
			$result = $mysqli->query($query);
			if ($result) {
				echo "Password changed successfully<br />";
			}
			else {
				echo "Error: Failed to update password";
			}
		}

		$mysqli->close();
	}
	else {
		showLoginForm();
	}
?>
<p><a href="/">Back to exercises</a></p>
</body>
</html>