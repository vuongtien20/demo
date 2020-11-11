<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Danh sách sinh viên</title>
</head>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database="qlsv";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);

	
  ?>
<body>
	
	<table border="1">
		<tr>
			<td colspan="7" align="center">
				<input type="text">
				<input type="submit">
			</td>
		</tr>
		<tr>
			<td colspan="7" align="center"><h1>Tổng số sinh viên</h1></td>
		</tr>
		<tr>
			<td colspan="7"><a href="">Thêm mới</a></td>
		</tr>
		<tr>
			<th>STT</th>
			<th>Id</th>
			<th>Lớp</th>
			<th>Họ tên</th>
			<th>Ngày sinh</th>
			<th>Giới tính</th>
			<th>Chức năng</th>
		</tr>
		<?php
		$id = isset($_GET['id'])?($_GET['id']):0;
		$sql_select="select * from sinhvien,lop where sinhvien.lop=lop.id";
		$result= mysqli_query($conn, $sql_select);
			if (mysqli_num_rows($result) > 0) {
				$stt = 1;
				  	while($row = mysqli_fetch_assoc($result)) {    		
				    	?>
				    		<tr>
				    			<td><?= $stt++ ?></td>
					    		<td><?= $row['id'] ?></td>
					    		<td><?= $row['lop'] ?></td>
					    		<td><?= $row['hoten'] ?></td>
					    		<td><?= $row['ngaysinh'] ?></td>
					    		<td><?= $row['gioitinh'] ?></td>
					    		<td><a href="danhsachsv.php?id=<?= $row["id"] ?>">Update</a> <a href="danhsachsv.php?id=<?= $row["id"] ?>">Delete</a> </td>
				    		</tr>				    		

				    	<?php

				  }
				}								
				
		  ?>
	</table>
</body>
</html>