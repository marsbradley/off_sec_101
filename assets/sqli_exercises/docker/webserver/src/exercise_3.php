<html>
<head>
	<script type="text/javascript">
		function goToProduct(id) {
			console.log('going to product: ' + id);
			document.getElementById('hiddenIdField').value = id;
			document.forms['form'].submit();
		}
	</script>
</head>
<body>
<h2>Offensive Security Cheese Store - v3</h2>
<?php
	$servername = "db";
	$serverUsername = "user3";
	$password = "password";
	$database = "exercise_3_db";

	$connection = new mysqli($servername, $serverUsername, $password, $database);

	if ($connection->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if (isset($_POST['id']) && !empty($_POST['id'])) {
		# Protect with escaping
		$id = $connection->real_escape_string($_POST['id']);

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
		$product = $_POST['product'];

		echo '<form name="form" method="post" action="">
						<input id="hiddenIdField" type="hidden" name="id" value="" />
						<input type="string" name="product" value="'. $product . '" size=100 />
						<input type="submit" value="Search" name="search" />';

		if (!empty(trim($product))) {
			# Protect with escaping
			$product = $connection->real_escape_string($product);

			$query = "SELECT * FROM products WHERE name LIKE '%$product%'";
			$result = $connection->query($query) or die("Something went wrong");

			if ($result->num_rows > 0) {
				echo '<p>Products found:<br />';
				echo '<table border="1">';
				echo "<tr><th>Product</th><th></th></tr>";
				while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["name"] . "</td>";
					echo '<td><a href="#" onclick="goToProduct(' . $row["id"] . ')" \>More Info</a></td>';
					echo "</tr>";
				}
				echo "</table>";
				echo "</p>";
			} else {
				echo "<p>No products like '$product' found.</p>";
			}
		}

		echo '</form>';
	}

	$connection->close();
?>
<p><a href="/">Back to exercises</a></p>
</body>
</html>