<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kết quả</title>
</head>
<body>
	<?php  
	$a = (isset($_POST['a']))?$_POST['a']:"";
	$b = (isset($_POST['b']))?$_POST['b']:"";
	//echo 'a='.$a,'<br>';
	//echo 'b='.$b,'<br>';
	if ($a == 0 && $b !=0) {
		echo 'Phương trình vô nghiệm';
	}elseif ($a == 0 && b==0) {
		echo 'Phương trình có vô số nghiệm';
	}else{

		$c=-$b/$a;
		echo 'Phương trình có nghiệm duy nhất là x ='.$c;
	}
  ?>
</body>
</html>