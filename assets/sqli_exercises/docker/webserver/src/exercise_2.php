<html>
<head></head>
<body>
<h2>Offensive Security Cheese Store - v2</h2>
<?php
	$servername = "db";
	$serverUsername = "user2";
	$password = "password";
	$database = "exercise_2_db";

	$connection = new mysqli($servername, $serverUsername, $password, $database);

	if ($connection->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if (isset($_GET['id']) && !empty($_GET['id'])) {
		# Protect with escaping
		$id = $connection->real_escape_string($_GET['id']);

		$query = "SELECT * FROM products WHERE id = $id";
		$result = $connection->query($query) or die("Something went wrong");

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<h3>" . $row["name"] . "</h3>";

				$available = $row["available"];

				if ($available == 0) {
					echo "<p>Out of Stock</p>";
				}
				else {
					echo "<p>Available: " . $available . "</p>";
				}
				echo "<p>Price: " . $row["price"] . "</p>";
			}
		}
	}
	else {
		$product = $_GET['product'];

		echo '<form action="">
						<input type="string" name="product" value="'. $product . '" size=100 />
						<input type="submit" value="Search" name="search" />
					</form>';

		if (!empty(trim($product))) {
			# Protect with escaping
			$escapedProduct = $connection->real_escape_string($product);

			$query = "SELECT * FROM products WHERE name LIKE '%$escapedProduct%'";
			$result = $connection->query($query) or die("Something went wrong");

			if ($result->num_rows > 0) {
				echo '<p>Products found:<br />';
				echo '<table border="1">';
				echo "<tr><th>Product</th><th></th></tr>";
				while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["name"] . "</td>";
					echo "<td><a href=\"?id=" . $row["id"] . "\">More Info</a></td>";
					echo "</tr>";
				}
				echo "</table>";
				echo "</p>";
			} else {
				echo "<p>No products like '$product' found.</p>";
			}
		}
	}

	$connection->close();
?>
<p><a href="/">Back to exercises</a></p>
</html>