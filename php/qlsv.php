<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>student</title>
</head>
<body>
	<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "l02_test1";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection			
	?>
	
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>Address</th>
			<th>option</th>
		</tr>
		<tr>
			<?php 

					$id = isset($_GET['id'])?($_GET['id']):0;
					echo $id;
					$sql1 = "DELETE FROM test WHERE id=".$id;
					$result = mysqli_query($conn, $sql1);
					if ($conn->query($sql1) === TRUE) {
					  echo "Record deleted successfully";
					} else {
					  echo "Error deleting record: " . $conn->error;
					}
					$sql = "SELECT * FROM test";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
				  	while($row = mysqli_fetch_assoc($result)) {    		
				    	?>
				    		<tr>
				    			<td><?= $row['id'] ?></td>
					    		<td><?= $row['name'] ?></td>
					    		<td><?= $row['age'] ?></td>
					    		<td><?= $row['address'] ?></td>
					    		<td><a href="#">Update</a> <a href="qlsv.php?id=<?= $row["id"] ?>">Delete</a> </td>
				    		</tr>				    		

				    	<?php

				  }
				}								
				
				
				mysqli_close($conn);
				$conn = new mysqli($servername, $username, $password);
			 ?>
		</tr>
		<a href="add.php">Add</a> 
	</table>

</body>
</html>