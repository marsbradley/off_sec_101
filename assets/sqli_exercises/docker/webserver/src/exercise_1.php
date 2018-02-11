<html>
<head></head>
<body>
<h2>Offensive Security Cheese Store - v1</h2>
<?php
		$product = $_GET['product'];

		echo '<form action="">
						<input type="string" name="product" value="'. $product . '" size=100 />
						<input type="submit" value="Search" name="search" />
					</form>';

		if (!empty(trim($product))) {
			$servername = "db";
			$serverUsername = "user1";
			$password = "password";
			$database = "exercise_1_db";

			$connection = new mysqli($servername, $serverUsername, $password, $database);

			if ($connection->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$query = "SELECT * FROM products WHERE name LIKE '%$product%'";
			$result = $connection->query($query) or die($connection->error);

			if ($result->num_rows > 0) {
				echo '<p>Products found:<br />';
				echo '<table border="1">';
				echo "<tr><th>Product</th><th>Price</th></tr>";
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["name"] . "</td><td>" . $row["price"] . "</td></tr>";
				}
				echo "</table>";
				echo "</p>";
			} else {
				echo "<p>No products like '$product' found.</p>";
			}
		}
?>
</html>