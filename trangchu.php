<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Chào mừng bạn đến với trang chủ!</h1>
	<?php 
		$fullname= $_POST['Fullname'];
		$password= $_POST['Password'];
		$nhaplaipassword= $_POST['Nhaplaipassword'];
		$gioitinh= $_POST['Gioitinh'];
		$ngaysinh= $_POST['Ngaysinh'];
		$diachi= $_POST['Diachi'];
		$sothich=$_POST['Sothich'];
		
		$hobby = "";
		foreach ($sothich as $key => $value) {
			$hobby = $hobby.','.$value;
		}

		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		  echo "Sorry, file already exists.";
		  $uploadOk = 0;
		}

		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 50000000000) {
		  echo "Sorry, your file is too large.";
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}		
		$duongdanfile = "http://localhost:8080/html/uploads/". basename($_FILES["fileToUpload"]["name"]);

		$avartar=$duongdanfile;
		echo $avartar;
		$servername = "localhost";
		$username = "root";
		$pass = "";
		$dbname = "utt_69tt21";

		// Create connection
		$conn = mysqli_connect($servername, $username, $pass, $dbname);
		// Check connection
		if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO dk1 (fullname, password, nhaplaipassword, gioitinh, ngaysinh, diachi, avartar, sothich )
		VALUES ('$fullname', '$password', '$nhaplaipassword', '$gioitinh','$ngaysinh', '$diachi', '$avartar', '$hobby')";

		if (mysqli_query($conn, $sql)) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	 ?>
	 <a href="hienthi.php">Hiển thị kết quả</a>
</body>
</html>