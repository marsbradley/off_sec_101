<?php session_start(); ?>
<html>
<head>
</head>
<body>

<h2>Offensive Security Exercise</h2>

<p>Enter the password stored in a file hosted elsewhere.</p>

<form action="" method="POST">
	<input type="string" name="key" size=100 /><input type="submit" value="Submit" name="submit" />
</form>

<?php
	$key = $_POST['key'];

	if (isset($key) && !empty($key)) {
		if ($key === 'HAX123') {
			echo '<p>Congratulations!</p>';
		} else {
			echo "<p>$key is incorrect</p>";
		}
	}
?>
</body>
</html>