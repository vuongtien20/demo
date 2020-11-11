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
	$c = (isset($_POST['c']))?$_POST['c']:"";

	if ($a == 0) {
        if ($b == 0) {
            echo ("Phương trình vô nghiệm!");
        } else {
            echo  ("Phương trình có một nghiệm: "
                    . "x = " . (-$c / $b));
        }
        return;
    }
    // tính delta
    $delta = $b*$b - 4*$a*$c;
    $x1 = "";
    $x2 = "";
    // tính nghiệm
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2*$a);
        $x2 = (-$b - sqrt($delta)) / (2*$a);
        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
    } else if ($delta == 0) {
        $x1 = (-$b / (2 * $a));
        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
    } else {
        echo ("Phương trình vô nghiệm!");
    }
	 ?>
</body>
</html>