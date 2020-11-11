<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="trangchu.php" method="post" enctype="multipart/form-data">
		<table border="1">
			<tr align="center" >
				<td colspan="2">Đăng ký</td>
			</tr>			
			<tr>
				<td>Full name</td>
				<td><input type="text" name="Fullname"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="Password"></td>
			</tr>
			<tr>
				<td>Nhập lại password</td>
				<td><input type="password" name="Nhaplaipassword"></td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td><input type="radio" name="Gioitinh" value="Nam">Nam
				<input type="radio" name="Gioitinh" value="Nữ">Nữ</td>
			</tr>
			<tr>
				<td>Ngày sinh</td>
				<td><input type="date" name="Ngaysinh"></td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><textarea name="Diachi"></textarea></td>
			</tr>
			<tr>
				<td>Avatar</td>
				<td><input type="file" name="fileToUpload"></td>
			</tr>
			<tr>
				<td>Sở thích</td>
				<td><input type="checkbox" name="Sothich[]" value="Xem phim">Xem phim
				<input type="checkbox" name="Sothich[]" value="Thể thao">Thể thao
				<input type="checkbox" name="Sothich[]" value="Web">Web</td>
			</tr>
			<tr align="center">
				<td colspan="2">
				<button type="reset">Reset</button>
				<button type="submit">OK</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>