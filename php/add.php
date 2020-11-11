<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Student1</title>
</head>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "l02_test1";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	$name = isset($_POST['name'])? $_POST['name']:'';
	$age = isset($_POST['age'])? $_POST['age']:'';
	$Address = isset($_POST['address'])? $_POST['address']:'';
	$sql = "INSERT INTO test VALUES (null,'$name', '$age', '$address')";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	?>
<body>
	<form action="#" method="post">
		<table border="1">
			<tr>
				<h4>Student information</h4>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" placeholder="Nhập tên"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age" placeholder="Nhập tuổi"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" placeholder="Nhập địa chỉ"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="submit" value="Add">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
	<a href="qlsv.php">RETURN</a>
</body>
</html>
