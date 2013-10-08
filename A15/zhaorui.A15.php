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
if (isset($_COOKIE["user"]))
  echo "Welcome " . $_COOKIE["user"] . "!<br>";
else
  echo "Welcome guest!<br>";
  
// Create connection
$con=mysqli_connect("127.0.0.1","@localhost","","a15");

// Check connection
if (mysqli_connect_errno($con)){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
 	}
else{
	echo "Connection Successful" . "<br>";
    }

// Create Store table
$sql="CREATE TABLE IF NOT EXISTS Store(Comments CHAR(30), CID int)";
// Execute query
if (mysqli_query($con,$sql)){
    echo "Table Store created successfully or already exist" . "<br>";
    }
else{
  	echo "Error Store table: " . mysqli_error($con);
	}

// Create Account table
$sql="CREATE TABLE IF NOT EXISTS Account(Username CHAR(30), UID int NOT NULL AUTO_INCREMENT, PRIMARY KEY (UID))";
// Execute query
if (mysqli_query($con,$sql)){
    echo "Table Account created successfully or already exist" . "<br>";
    }
else{
  	echo "Error Account table: " . mysqli_error($con);
	}	
	
	
//Print Comments
$result = mysqli_query($con,"SELECT Store.Comments, Store.CID, Account.Username, Account.UID 
FROM Store, Account 
WHERE Account.UID = Store.CID");
echo "<br>" . "Current Comments:" . "<br>";
while($row = mysqli_fetch_array($result)){
  echo $row['Username'] . " " . $row["Comments"];
  echo "<br>";
  }
  
//Print count
$result = mysqli_query($con,"SELECT Count(Store.Comments) AS 'Summary', Store.CID, Account.Username, Account.UID 
FROM Store, Account
WHERE Store.CID = Account.UID
GROUP BY Store.CID");
echo "<br>" . "Statistics Summary:" . "<br>";
while($row = mysqli_fetch_array($result)){
  echo $row['Username'] . " " . $row["Summary"];
  echo "<br>";
  }




mysqli_close($con);

?>
<form action="login.php" method="post">
	Username:<input type="text" name="username">
	<input type="submit" name="Login">
</form>

<form action="addon.php" method="post">
    Add New Comment: <input type="text" name="com">
    <input type="submit" name="Submit">
</form>

</body>
</html>

</body>
</html>