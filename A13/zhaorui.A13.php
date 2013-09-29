<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A13</title>
</head>

<body>
<html>
<body>
<?php
$filename="zhaorui.notes.txt";
if (file_exists($filename)){
	echo "Comments:" . "<br>";
	$file = fopen($filename, "r") or exit("Unable to open file!");
	while(!feof($file)){
  		echo fgets($file). "<br>";
  	}
	fclose($file);
}
else{
	fopen($filename, 'w');
}

?>

<form method="post">
    Comments: <input type="text" name="Notes">
    <input type="submit" name="Submit">
</form>


<?php
if(isset($_POST['Notes'])){
	echo "New comment = " . $_POST['Notes'];
	$file = fopen("zhaorui.notes.txt","a");
	$data = $_POST['Notes'] . "\n";
	fwrite($file,$data);
	fclose($file);
}
?>

</body>
</html>

</body>
</html>