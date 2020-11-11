<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Sinh viên</title>
</head>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sinhvien";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	$lop = isset($_POST['lop'])? $_POST['lop']:'';
	$hoten = isset($_POST['hoten'])? $_POST['hoten']:'';
	$ngaysinh = isset($_POST['ngaysinh'])? $_POST['ngaysinh']:'';
	$gioitinh = isset($_POST['gioitinh'])? $_POST['gioitinh']:'';
	$sql = "Update INTO test VALUES (null,'$lop','$hoten', '$ngaysinh', '$gioitinh')";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	?>
<body>
	
</body>
</html>