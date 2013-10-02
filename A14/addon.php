<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="4;URL=zhaorui.A14.php">
<title>addon</title>
</head>

<body>
<?php
// Create connection
$con=mysqli_connect("127.0.0.1","@localhost","","a13");

// Check connection
if (mysqli_connect_errno($con)){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
 	}
else{
	echo "Connection Successful" . "<br>";
    }

$sql="INSERT INTO Store (Comments) VALUES ('$_POST[com]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>
<br />
You are being automatically redirected to the add comments page.<br />
    If your browser does not redirect you in few seconds
    <a href="zhaorui.A14.php">click here</a>. 

</body>
</html>