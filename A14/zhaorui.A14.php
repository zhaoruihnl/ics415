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
// Create connection
$con=mysqli_connect("127.0.0.1","@localhost","","a13");

// Check connection
if (mysqli_connect_errno($con)){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
 	}
else{
	echo "Connection Successful" . "<br>";
    }

// Create table
$sql="CREATE TABLE IF NOT EXISTS Store(Comments CHAR(30))";

// Execute query
if (mysqli_query($con,$sql)){
    echo "Table Store created successfully or already exist" . "<br>";
    }
else{
  	echo "Error Store table: " . mysqli_error($con);
	}	
//Print Comments
$result = mysqli_query($con,"SELECT * FROM Store");
echo "<br>" . "Current Comments:" . "<br>";
while($row = mysqli_fetch_array($result)){
  echo $row['Comments'];
  echo "<br>";
  }
mysqli_close($con);

?>

<form action="addon.php" method="post">
    Add New Comment: <input type="text" name="com">
    <input type="submit" name="Submit">
</form>

</body>
</html>

</body>
</html>