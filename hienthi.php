<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		table, th, td{
			border:	1px solid black;
		}
		img{
			width: 50px;
			height: 50px;
		}
	</style>
</head>
<body>
	<h1>Danh sách tài khoản</h1> 
	<?php 
		$servername = "localhost";
		$username = "root";
		$pass = "";
		$dbname = "utt_69tt21";

		// Create connection
		$conn = mysqli_connect($servername, $username, $pass, $dbname);
		mysqli_query($conn,"set character set utf8");
		$sql="SELECT * FROM dk1 ";
		$result = $conn ->query($sql);
		if($result ->num_rows > 0){
			echo "<table>
				<tr>
					<th>fullname: </th>
					<th>password: </th>
					<th>nhaplaipassword: </th>
					<th>gioitinh: </th>
					<th>ngaysinh: </th>
					<th>diachi: </th>
					<th>avartar: </th>
					<th>sothich: </th>
					<th>Hành động: </th>
				</tr>";
		while ($row = $result->fetch_assoc()) {
			echo "<tr>
					<td>".$row["fullname"]."</td>
					<td>".$row["password"]."</td>
					<td>".$row["nhaplaipassword"]."</td>
					<td>".$row["gioitinh"]."</td>
					<td>".$row["ngaysinh"]."</td>
					<td>".$row["diachi"]."</td>
					<td><img src= ".$row["avartar"]."></td>
					<td>".$row["sothich"]."</td>
					<td><a href=",">Sửa</a> <a href="," onclick="return confirm('Bạn có muốn xoá?')">Xoá</a></td>
				</tr>";

				
		}
		echo "</table";
		} else{
			echo "0 result";
		}
		mysqli_close($conn);
	 ?>

	 <tr>
	 	<td>
	 		<a href="trangchu.php">Quay lại</a>
	 	</td>
	 </tr>
</body>
</html>